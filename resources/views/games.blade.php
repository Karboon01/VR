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
    <div id="GB-hmeheader" style="position: relative;">
        <span style="position: relative; z-index: 1;">
        </span>
        <div class="containerr max-width-adaptive-md"
            style="padding-top: 100px;padding-bottom: 90px;position: relative;z-index: 1;">
            <ul class="stack-cards js-stack-cards">
                @foreach ($cards as $item)
                    @if ($item->id % 2 == 1)
                        <li data-theme="default" class="stack-cards__item bg radius-lg shadow-md js-stack-cards__item"
                            style="top: 80px;">
                            <div class="gridd">
                                <div class="col-6 flex items-center height-100% colcal">
                                    <div class="text-component padding-md paddingg tete" style="text-align: end;">
                                        <h2>
                                            {{ $item->header }}
                                        </h2>
                                        <p class="display@xs">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-6 height-100%">
                                    <div class="afteree-l"></div>
                                    <img class="block width-100% height-100% object-cover"
                                        src="{{ Vite::asset('resources/media/images/') . $item->image }}"
                                        alt="{{ $item->image }}">
                                </div>
                            </div>
                        </li>
                    @else
                        <li data-theme="default" class="stack-cards__item bg radius-lg shadow-md js-stack-cards__item"
                            style="top: 80px;">
                            <div class="gridd">
                                <div class="col-6 height-100%">
                                    <div class="afteree-r"></div>
                                    <img class="block width-100% height-100% object-cover"
                                        src="{{ Vite::asset('resources/media/images/') . $item->image }}"
                                        alt="{{ $item->image }}">
                                </div>
                                <div class="col-6 flex items-center height-100% colcal">
                                    <div class="text-component padding-md paddingg tete" style="text-align: start;">
                                        <h2>
                                            {{ $item->header }}
                                        </h2>
                                        <p class="display@xs">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    @endsection
