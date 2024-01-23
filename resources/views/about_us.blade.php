@extends('layouts.app')
@section('content')
    <div class="intro slider">
        @foreach ($banner as $item)
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
        @endforeach
    </div>
    <div style="background: #E0E0E0">
        <div style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
            <div class="cont-ab">
                <div class="cont-small" style="margin: 20px;">
                    <h2 class="ab_txt _anim-items _anim-no-hide _active"><b
                            style="font-weight: 800; font-size: 36px;">DIGITAL MARKETING SPECIALISTS IN</b></h2>
                    <h2 class="ab_txt _anim-items _anim-no-hide _active"><b
                            style="font-weight: 800; font-size: 36px; background: -webkit-linear-gradient(#cbb2ff,#b88aff, #aa80ff,#202020); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">LEAD
                            GENERATION AND ECOMMERCE.</b></h2>
                </div>
                <div class="cont-big" style="margin: 20px;">
                    @foreach ($text as $item)
                        <p class="ab_txt _anim-items _anim-no-hide _active" style="font-size: 17px; font-weight: 200;">
                            {{ $item->text }}
                        </p>
                    @endforeach
                </div>
            </div>
            @foreach ($cards as $index => $item)
                @if ($item->id % 2 == 1)
                    <div class="cont-l">
                        @if ($item->background && Str::contains($item->background, '.mp4'))
                            <video id="GB_tree" class="www"
                                src="{{ Vite::asset('resources/media/images/') . $item->background }}" autoplay=""
                                muted="" loop=""
                                style="margin: 0px; background-size: cover; background-position: center;"></video>
                        @else
                            <div id="GB_tree" class="ab_txt1 _anim-items _anim-no-hide www"
                                style="background: url({{ Vite::asset('resources/media/images/') . $item->background }}) no-repeat center;  height: 600px; margin: 0px; ">
                            </div>
                        @endif
                        <div style="width: 20%; margin-left: 120px; ">
                            <h2 class="ab_txt _anim-items _anim-no-hide _active">
                                <b style=" padding: 20px; font-size: 34px;">
                                    {{ $half1Array[$index] }}<b
                                        style="background: -webkit-linear-gradient(#cbb2ff,#b88aff, #aa80ff,#202020); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">{{ $half2Array[$index] }}
                                    </b>
                                </b>
                            </h2>
                            <p class="ab_txt1 _anim-items _anim-no-hide _active"
                                style="font-size: 24px; padding: 20px; font-weight: 200;">
                                {{ $item->text }}
                            </p>
                        </div>
                    </div>
                @else
                    <div class="cont-r">
                        <div style="width: 20%; margin-right: 120px; text-align: right;">
                            <h2 class="ab_txt _anim-items _anim-no-hide">
                                <b style=" padding: 20px; font-size: 34px;">
                                    {{ $half1Array[$index] }}<b
                                        style="background: -webkit-linear-gradient(#cbb2ff,#b88aff, #aa80ff,#202020); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">{{ $half2Array[$index] }}
                                    </b>
                                </b>
                            </h2>
                            <p class="ab_txt1 _anim-items _anim-no-hide"
                                style="font-size: 24px; padding: 20px; font-weight: 200;">
                                {{ $item->text }}
                            </p>
                        </div>
                        @if ($item->background && Str::contains($item->background, '.mp4'))
                            <video id="GB_fo" class="www"
                                src="{{ Vite::asset('resources/media/images/') . $item->background }}" autoplay=""
                                muted="" loop=""
                                style="margin: 0px; background-size: cover; background-position: center;"></video>
                        @else
                            <div id="GB_fo" class="ab_txt1 _anim-items _anim-no-hide www"
                                style="background: url({{ Vite::asset('resources/media/images/') . $item->background }}) no-repeat center;  height: 600px; margin: 0px; ">
                            </div>
                        @endif
                    </div>
                @endif
            @endforeach

        </div>
    </div>
@endsection
