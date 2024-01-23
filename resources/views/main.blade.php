@extends('layouts.app')
@section('content')
    @foreach ($banner as $item)
        <div class="intro slider">
            <div class="intro__item">
                <div class="intro__fon">
                    <video class="intro__v-fon" src="{{ Vite::asset('resources/media/images/') . $item->background }}"
                        autoplay muted loop></video>
                </div>
                <div class="intro__content">
                    <h1 class="intro_text_h1 _anim-items fs-vb"
                        style=" text-shadow: 0 0 10px #fff; font-weight: bold; letter-spacing: 10px;">{{ $item->heading }}
                    </h1>
                    <div class="intro-con-btn">
                        <a class="js-open-modal button1" href="/contact" data-modal="2">BOOK NOW</a>
                        <a class="button" href="/profile">BUY VIP</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div id="GB-hmeheadera">
        @foreach ($header as $item)
            <div style="display: flex; justify-content: center;">
                <h2 style="font-size: 50px; color: #fff;">{{ $item->text }}</h2>
            </div>
        @endforeach
        <div class="app">

            <div class="cardList">
                <button class="cardList__btn btn--left" style="opacity: 0; pointer-events: none;">
                    <div class="icon">
                        <svg>
                            <use xlink:href="#arrow-left"></use>
                        </svg>
                    </div>
                </button>
                <div class="cards__wrapper">
                    <div class="card current--card">
                        <div class="card__image">
                            <img src="https://cdn.vox-cdn.com/thumbor/I6gnwBeKyigI2VMxAJPCkWJBQgg=/0x0:2560x1440/1400x1050/filters:focal(1280x720:1281x721)/cdn.vox-cdn.com/uploads/chorus_asset/file/24704143/wwdc_2023_545.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="card next--card">
                        <div class="card__image">
                            <img src="https://img.mvideo.ru/Big/40078904bb.jpg" alt="">
                        </div>
                    </div>
                    <div class="card previous--card">
                        <div class="card__image">
                            <img src="{{ Vite::asset('resources/media/images/orleans-1024x576.webp') }}" alt="">
                        </div>
                    </div>
                </div>
                <button class="cardList__btn btn--right" style="opacity: 0; pointer-events: none;">
                    <div class="icon">
                        <svg>
                            <use xlink:href="#arrow-right"></use>
                        </svg>
                    </div>
                </button>
            </div>

            <div class="infoList">

                <div class="info__wrapper">
                    @foreach ($cards_1_1 as $item)
                        <div class="info current--info">
                            <h1 class="text name" style="opacity: 0; transform: translate(0px, 40px);">
                                {{ $item->name }}
                            </h1>
                            <h4 class="text location" style="opacity: 0; transform: translate(0px, 40px);">
                                {{ $item->location }}
                            </h4>
                            <p class="text description" style="opacity: 0; transform: translate(0px, 40px);">
                                {{ $item->descr }}
                            </p>
                        </div>
                    @endforeach
                    @foreach ($cards_1_2 as $item)
                        <div class="info next--info">
                            <h1 class="text name">
                                {{ $item->name }}
                            </h1>
                            <h4 class="text location">
                                {{ $item->location }}
                            </h4>
                            <p class="text description">
                                {{ $item->descr }}
                            </p>
                        </div>
                    @endforeach
                    @foreach ($cards_1_3 as $item)
                        <div class="info previous--info">
                            <h1 class="text name">
                                {{ $item->name }}
                            </h1>
                            <h4 class="text location">
                                {{ $item->location }}
                            </h4>
                            <p class="text description">
                                {{ $item->descr }}
                            </p>
                        </div>
                    @endforeach
                </div>

            </div>

            <div class="app__bg">
                <div class="app__bg__image current--image">
                    <img src="" alt="">
                </div>
                <div class="app__bg__image next--image">
                    <img src="" alt="">
                </div>
                <div class="app__bg__image previous--image">
                    <img src="" alt="">
                </div>
            </div>

        </div>

        <svg class="icons" style="display: none;">
            <symbol id="arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <polyline points="328 112 184 256 328 400"
                    style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"></polyline>
            </symbol>
            <symbol id="arrow-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <polyline points="184 112 328 256 184 400"
                    style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"></polyline>
            </symbol>
        </svg>

        @foreach ($cards_2 as $item)
            <div class="ab_txt1 _anim-items _anim-no-hide"
                style="height: 70vh; background: #00000000; display: flex; justify-content: center; align-items: center;">
                <iframe style="border-radius: 30px;" width="80%" height="80%" src="{{ $item->video }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        @endforeach

        <div style="background: #00000000; display: flex; justify-content: center; align-items: center;">
            <div style="display: flex; align-items: center; padding-bottom: 60px;">
                <a class="js-open-modal button1 ab_txt1 _anim-items _anim-no-hide" href="" data-modal="2">BOOK
                    NOW</a>
            </div>
        </div>
    </div>
@endsection
