<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class About extends Controller
{
    // <--------------------INDEX-------------------->

    public function index(Request $request)
    {
        $banner = DB::table('banner')->where('banner.page', 'about_us')->get();
        $cards = DB::table('about_us_cards')->get();
        $text = DB::table('about_us_text')->get();
        $headers = DB::table('about_us_cards')->select('header')->get();
        $socialNetworks = DB::table('social')->get();

        $half1Array = [];
        $half2Array = [];

        foreach ($headers as $header) {
            $length = mb_strlen($header->header);
            $half1Array[] = mb_substr($header->header, 0, $length / 2);
            $half2Array[] = mb_substr($header->header, $length / 2);
        }

        return view('about_us', [
            'banner' => $banner,
            'cards' => $cards,
            'text' => $text,
            'half1Array' => $half1Array,
            'half2Array' => $half2Array,
            'socialNetworks' => $socialNetworks
        ]);
    }

    public function admin_index(Request $request)
    {
        $header = DB::table('main_header')->get();
        $cards = DB::table('about_us_cards')->get();
        $text = DB::table('about_us_text')->get();
        $socialNetworks = DB::table('social')->get();
        return view('admin.about.index', ['header' => $header, 'cards' => $cards, 'text' => $text, 'socialNetworks' => $socialNetworks]);
    }

    // <--------------------HEADERS-------------------->

    public function getCardsById(Request $request)
    {
        $id = $request->id;
        $cards = DB::table('about_us_cards')->where('about_us_cards.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        return view('admin.about.cards', ['cards' => $cards, 'socialNetworks' => $socialNetworks]);
    }

    public function editCards(Request $request)
    {
        $cards = DB::table('about_us_cards')->where('id', $request->id)->first();

        $old_header = $cards->header;
        $old_text = $cards->text;
        $old_background = $cards->background;

        DB::table('about_us_cards')
            ->where('id', $request->id)
            ->update([
                'old_header' => $old_header,
                'old_text' => $old_text,
                'old_background' => $old_background,
                'updated_at' => now(),
            ]);

        DB::table('about_us_cards')
            ->where('id', $request->id)
            ->update([
                'header' => $request->input('header'),
                'text' => $request->input('text'),
                'background' => $request->input('background'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[75px]">HEADER</td><td>-</td><td class="break-normal text-wrap w-[500px]">' . $old_header . '</td><td> => </td><td class="break-normal text-wrap w-[500px]">' . $request->input('header') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">TEXT</td><td>-</td><td class="break-normal text-wrap w-[500px]">' . $old_text . '</td><td> => </td><td class="break-normal text-wrap w-[500px]">' . $request->input('text') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">BACKGROUND</td><td>-</td><td class="break-normal text-wrap w-[500px]">' . $old_background . '</td><td> => </td><td class="break-normal text-wrap w-[500px]">' . $request->input('background') . '</td></tr>',
            'table' => 'ABOUT US - CARDS - EDIT',
            'datetime' => now(),
        ]);

        return redirect()->route('admin_about');
    }

    public function getTextById(Request $request)
    {
        $id = $request->id;
        $text = DB::table('about_us_text')->where('about_us_text.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        return view('admin.about.text', ['text' => $text, 'socialNetworks' => $socialNetworks]);
    }

    public function editText(Request $request)
    {
        $cards_1 = DB::table('about_us_text')->where('id', $request->id)->first();

        $old_text = $cards_1->text;

        DB::table('about_us_text')
            ->where('id', $request->id)
            ->update([
                'old_text' => $old_text,
                'updated_at' => now(),
            ]);

        DB::table('about_us_text')
            ->where('id', $request->id)
            ->update([
                'text' => $request->input('text'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[75px]">NAME</td><td>-</td><td class="break-normal text-wrap w-[500px]">' . $old_text . '</td><td> => </td><td class="break-normal text-wrap w-[500px]">' . $request->input('text') . '</td></tr>',
            'table' => 'ABOUT US - TEXT - EDIT',
            'datetime' => now(),
        ]);

        return redirect()->route('admin_main');
    }

}