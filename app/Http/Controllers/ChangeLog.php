<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChangeLog extends Controller
{
    // <--------------------INDEX-------------------->

    public function admin_index(Request $request)
    {
        $change_log = DB::table('change_log')->orderBy('change_log.datetime', 'desc')->get();
        $socialNetworks = DB::table('social')->get();
        return view('admin.change_log', ['change_log' => $change_log, 'socialNetworks' => $socialNetworks]);
    }

}
