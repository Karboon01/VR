@extends('layouts.app')
@section('content')
    @foreach ($banner as $item)
        <div class="intro slider">
            <div class="intro__item">
                <div class="intro__fon">
                    <img class="intro__v-fon" src="{{ Vite::asset('resources/media/images/') . $item->background }}">
                </div>
                <div class="intro__content" style="margin-top: 0;">
                    <h1 class="intro_text_h1 _anim-items fs-vb"
                        style=" text-shadow: 0 0 10px #fff; font-weight: bold; letter-spacing: 10px;">{{ $item->heading }}
                    </h1>
                </div>
            </div>
        </div>
    @endforeach
    <div id="GB-hmeheader">

        <div style="display: flex; justify-content: center;">
            <h1 class="intro_text_h1 _anim-items fs-vb"
                style=" font-weight: bold; letter-spacing: 10px; margin-bottom: -50px; padding-top: 50px;">GALLERY</h1>
        </div>

        <div class="condstainerr mx-auto">
            @foreach ($cards_1 as $item)
                <div class="imgf">
                    <img src="{{ Vite::asset('resources/media/images/') . $item->image }}" alt="">
                </div>
            @endforeach
        </div>
        <div class="condstainerr mx-auto" style="margin-top: -140px; padding-bottom: 160px;">
            @foreach ($cards_2 as $item)
                <div class="imgf">
                    <img src="{{ $item->image }}" alt="">
                </div>
            @endforeach
        </div>
    </div>
@endsection
