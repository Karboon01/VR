<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Gallery extends Controller
{
    public function index(Request $request)
    {
        $banner = DB::table('banner')->where('banner.page', 'gallery')->get();
        $cards_1 = DB::table('gallery_cards_1')->get();
        $cards_2 = DB::table('gallery_cards_2')->get();
        $socialNetworks = DB::table('social')->get();

        return view('gallery', [
            'banner' => $banner,
            'cards_1' => $cards_1,
            'cards_2' => $cards_2,
            'socialNetworks' => $socialNetworks
        ]);
    }

    public function admin_index(Request $request)
    {
        $cards_1 = DB::table('gallery_cards_1')->get();
        $cards_2 = DB::table('gallery_cards_2')->get();
        $socialNetworks = DB::table('social')->get();
        return view('admin.gallery.index', ['cards_1' => $cards_1, 'cards_2' => $cards_2, 'socialNetworks' => $socialNetworks]);
    }


    public function getCards1ById(Request $request)
    {
        $id = $request->id;
        $cards = DB::table('gallery_cards_1')->where('gallery_cards_1.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        if (!is_null($cards)) {
            return view('admin.gallery.cards_1', ['cards' => $cards, 'socialNetworks' => $socialNetworks]);
        } else {
            return abort(404);
        }
    }

    public function editCards1(Request $request)
    {
        $cards = DB::table('gallery_cards_1')->where('id', $request->id)->first();

        $old_image = $cards->image;

        DB::table('gallery_cards_1')
            ->where('id', $request->id)
            ->update([
                'old_image' => $old_image,
                'updated_at' => now(),
            ]);

        DB::table('gallery_cards_1')
            ->where('id', $request->id)
            ->update([
                'image' => $request->input('image'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[75px]">IMAGE</td><td>-</td><td class="break-normal text-wrap break-all w-[500px]">' . $old_image . '</td><td> => </td><td class="break-normal text-wrap break-all w-[500px]">' . $request->input('image') . '</td></tr>',
            'table' => 'GALLERY - CARDS 1 - EDIT',
            'datetime' => now(),
        ]);

        return redirect()->route('admin_gallery');
    }

    public function getCards2ById(Request $request)
    {
        $id = $request->id;
        $cards = DB::table('gallery_cards_2')->where('gallery_cards_2.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        if (!is_null($cards)) {
            return view('admin.gallery.cards_2', ['cards' => $cards, 'socialNetworks' => $socialNetworks]);
        } else {
            return abort(404);
        }
    }

    public function editCards2(Request $request)
    {
        $cards = DB::table('gallery_cards_2')->where('id', $request->id)->first();

        $old_image = $cards->image;

        DB::table('gallery_cards_2')
            ->where('id', $request->id)
            ->update([
                'old_image' => $old_image,
                'updated_at' => now(),
            ]);

        DB::table('gallery_cards_2')
            ->where('id', $request->id)
            ->update([
                'image' => $request->input('image'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[75px]">IMAGE</td><td>-</td><td class="break-normal text-wrap break-all w-[500px]">' . $old_image . '</td><td> => </td><td class="break-normal text-wrap break-all w-[500px]">' . $request->input('image') . '</td></tr>',
            'table' => 'GALLERY - CARDS 2 - EDIT',
            'datetime' => now(),
        ]);

        return redirect()->route('admin_gallery');
    }
}
