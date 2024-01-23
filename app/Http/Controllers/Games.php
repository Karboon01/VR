<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Games extends Controller
{
    public function index(Request $request)
    {
        $banner = DB::table('banner')->where('banner.page', 'games')->get();
        $cards = DB::table('games_cards')->get();
        $socialNetworks = DB::table('social')->get();

        return view('games', [
            'banner' => $banner,
            'cards' => $cards,
            'socialNetworks' => $socialNetworks
        ]);
    }

    public function admin_index(Request $request)
    {
        $cards = DB::table('games_cards')->get();
        $socialNetworks = DB::table('social')->get();
        return view('admin.games.index', ['cards' => $cards, 'socialNetworks' => $socialNetworks]);
    }

    // <--------------------HEADERS-------------------->

    public function getCardsById(Request $request)
    {
        $id = $request->id;
        $cards = DB::table('games_cards')->where('games_cards.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        return view('admin.games.cards', ['cards' => $cards, 'socialNetworks' => $socialNetworks]);
    }

    public function editCards(Request $request)
    {
        $cards = DB::table('games_cards')->where('id', $request->id)->first();

        $old_header = $cards->header;
        $old_text = $cards->text;
        $old_image = $cards->image;

        DB::table('games_cards')
            ->where('id', $request->id)
            ->update([
                'old_header' => $old_header,
                'old_text' => $old_text,
                'old_image' => $old_image,
                'updated_at' => now(),
            ]);

        DB::table('games_cards')
            ->where('id', $request->id)
            ->update([
                'header' => $request->input('header'),
                'text' => $request->input('text'),
                'image' => $request->input('image'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[75px]">HEADER</td><td>-</td><td class="break-normal text-wrap w-[500px]">' . $old_header . '</td><td> => </td><td class="break-normal text-wrap w-[500px]">' . $request->input('header') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">TEXT</td><td>-</td><td class="break-normal text-wrap w-[500px]">' . $old_text . '</td><td> => </td><td class="break-normal text-wrap w-[500px]">' . $request->input('text') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">IMAGE</td><td>-</td><td class="break-normal text-wrap w-[500px]">' . $old_image . '</td><td> => </td><td class="break-normal text-wrap w-[500px]">' . $request->input('image') . '</td></tr>',
            'table' => 'GAME - CARDS - EDIT',
            'datetime' => now(),
        ]);

        return redirect()->route('admin_games');
    }
}
