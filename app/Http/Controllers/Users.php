<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    public function admin_index(Request $request)
    {
        $users = DB::table('users')->get();
        $socialNetworks = DB::table('social')->get();
        return view('admin.users.index', ['users' => $users, 'socialNetworks' => $socialNetworks]);
    }

    public function getUserById(Request $request)
    {
        $id = $request->id;
        $user = DB::table('users')->where('users.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        if (!is_null($user)) {
            return view('admin.users.user', ['user' => $user, 'socialNetworks' => $socialNetworks]);
        } else {
            return abort(404);
        }
    }

    public function editUser(Request $request)
    {

        $user = DB::table('users')->where('id', $request->id)->first();

        $old_name = $user->name;
        $old_email = $user->email;
        $old_is_admin = $user->is_admin;
        $old_is_vip = $user->is_vip;

        DB::table('users')
            ->where('id', $request->id)
            ->update([
                'old_name' => $old_name,
                'old_email' => $old_email,
                'old_is_admin' => $old_is_admin,
                'old_is_vip' => $old_is_vip,
                'updated_at' => now(),
            ]);

        DB::table('users')
            ->where('id', $request->id)
            ->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'is_admin' => $request->input('is_admin'),
                'is_vip' => $request->input('is_vip'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td>NAME</td><td>' . $old_name . '</td><td> => </td><td>' . $request->input('name') . '</td></tr>
            <tr class="flex gap-5"><td>E-MAIL</td><td>' . $old_email . '</td><td> => </td><td>' . $request->input('email') . '</td></tr>
            <tr class="flex gap-5"><td>ADMIN</td><td>' . $old_is_admin . '</td><td> => </td><td>' . $request->input('is_admin') . '</td></tr>
            <tr class="flex gap-5"><td>VIP</td><td>' . $old_is_vip . '</td><td> => </td><td>' . $request->input('is_vip') . '</td></tr>',
            'table' => 'USER - EDIT',
            'datetime' => now(),
        ]);

        return redirect()->route('admin_users');
    }

    public function deleteUser(Request $request)
    {
        $user = DB::table('users')->where('id', $request->id)->first();
        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td>NAME</td><td>' . $user->name . '</td></tr>
            <tr class="flex gap-5"><td>E-MAIL</td><td>' . $user->email . '</td></tr>
            <tr class="flex gap-5"><td>ADMIN</td><td>' . $user->is_admin . '</td></tr>',
            'table' => 'USERS - DELETE',
            'datetime' => now(),
        ]);

        $user = DB::table('users')->where('id', $request->id)->delete();

        return redirect()->route('admin_users');
    }
}
