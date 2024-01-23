<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main extends Controller
{
    // <--------------------INDEX-------------------->

    public function index(Request $request)
    {
        $banner = DB::table('banner')->where('banner.page', 'main')->get();
        $header = DB::table('main_header')->get();
        $cards_1_1 = DB::table('main_cards_1')->where('main_cards_1.id', 1)->get();
        $cards_1_2 = DB::table('main_cards_1')->where('main_cards_1.id', 2)->get();
        $cards_1_3 = DB::table('main_cards_1')->where('main_cards_1.id', 3)->get();
        $cards_2 = DB::table('main_cards_2')->get();
        $social = DB::table('social')->get();
        $socialNetworks = DB::table('social')->get();
        return view('main', ['banner' => $banner, 'header' => $header, 'cards_1_1' => $cards_1_1, 'cards_1_2' => $cards_1_2, 'cards_1_3' => $cards_1_3, 'cards_2' => $cards_2, 'social' => $social, 'socialNetworks' => $socialNetworks ]);
    }

    public function admin_index(Request $request)
    {
        $header = DB::table('main_header')->get();
        $cards_1 = DB::table('main_cards_1')->get();
        $cards_2 = DB::table('main_cards_2')->get();
        $social = DB::table('social')->get();
        $socialNetworks = DB::table('social')->get();
        return view('admin.main.index', ['header' => $header, 'cards_1' => $cards_1, 'cards_2' => $cards_2, 'social' => $social, 'socialNetworks' => $socialNetworks    ]);
    }

    // <--------------------HEADERS-------------------->

    public function getHeaderById(Request $request)
    {
        $id = $request->id;
        $header = DB::table('main_header')->where('main_header.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        return view('admin.main.header', ['header' => $header, 'socialNetworks' => $socialNetworks  ]);
    }

    public function editHeader(Request $request)
    {
        $header = DB::table('main_header')->where('id', $request->id)->first();

        $old_text = $header->text;

        DB::table('main_header')
            ->where('id', $request->id)
            ->update([
                'old_text' => $old_text,
                'updated_at' => now(),
            ]);

        DB::table('main_header')
            ->where('id', $request->id)
            ->update([
                'text' => $request->input('text'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[75px]">TEXT</td><td>-</td><td class="break-normal text-balance w-[500px]">' . $old_text . '</td><td> => </td><td class="break-normal text-balance w-[500px]">' . $request->input('text') . '</td></tr>',
            'table' => 'MAIN - HEADER - EDIT',
            'datetime' => now(),
        ]);

        return redirect()->route('admin_main');
    }
    // <--------------------CARDS_1-------------------->

    public function getCards1ById(Request $request)
    {
        $id = $request->id;
        $cards = DB::table('main_cards_1')->where('main_cards_1.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        return view('admin.main.cards_1', ['cards' => $cards, 'socialNetworks' => $socialNetworks   ]);
    }

    public function editCards1(Request $request)
    {
        $cards_1 = DB::table('main_cards_1')->where('id', $request->id)->first();

        $old_name = $cards_1->name;
        $old_location = $cards_1->location;
        $old_descr = $cards_1->descr;

        DB::table('main_cards_1')
            ->where('id', $request->id)
            ->update([
                'old_name' => $old_name,
                'old_location' => $old_location,
                'old_descr' => $old_descr,
                'updated_at' => now(),
            ]);

        DB::table('main_cards_1')
            ->where('id', $request->id)
            ->update([
                'name' => $request->input('name'),
                'location' => $request->input('location'),
                'descr' => $request->input('descr'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[75px]">NAME</td><td>-</td><td class="break-normal text-balance w-[500px]">' . $old_name . '</td><td> => </td><td class="break-normal text-balance w-[500px]">' . $request->input('name') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">LOCATION</td><td>-</td><td class="break-normal text-balance w-[500px]">' . $old_location . '</td><td> => </td><td class="break-normal text-balance w-[500px]">' . $request->input('location') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">DESCRIPTION</td><td>-</td><td class="break-normal text-balance w-[500px]">' . $old_descr . '</td><td> => </td><td class="break-normal text-balance w-[500px]">' . $request->input('descr') . '</td></tr>',
            'table' => 'MAIN - CARD 1 - EDIT',
            'datetime' => now(),
        ]);

        return redirect()->route('admin_main');
    }

    // <--------------------CARDS_2-------------------->

    public function getCards2ById(Request $request)
    {
        $id = $request->id;
        $cards = DB::table('main_cards_2')->where('main_cards_2.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        return view('admin.main.cards_2', ['cards' => $cards, 'socialNetworks' => $socialNetworks   ]);
    }

    public function editCards2(Request $request)
    {
        $cards = DB::table('main_cards_2')->where('id', $request->id)->first();

        $old_video = $cards->video;

        DB::table('main_cards_2')
            ->where('id', $request->id)
            ->update([
                'old_video' => $old_video,
                'updated_at' => now(),
            ]);

        DB::table('main_cards_2')
            ->where('id', $request->id)
            ->update([
                'video' => $request->input('video'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[75px]">VIDEO</td><td>-</td><td class="break-normal text-balance w-[500px]">' . $old_video . '</td><td> => </td><td class="break-normal text-balance w-[500px]">' . $request->input('video') . '</td></tr>',
            'table' => 'MAIN - CARDS 2 - EDIT',
            'datetime' => now(),
        ]);

        return redirect()->route('admin_main');
    }
}
