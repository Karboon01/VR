@extends('layouts.app')
@section('content')
    <div id="GB-hmeheader">
        <div>
            <div style="display: flex; justify-content: center; align-items: center;">
                @foreach ($users as $item)
                    <h1 class="fs-vb" style="color: #fff; margin: 150px 25px; font-weight: 400;">
                        {{ $item->name }}
                    </h1>
                @endforeach
                @if (auth()->check() && auth()->user()->is_vip)
                    <svg width="53" height="46" viewBox="0 0 63 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4 16.0334V51C4 51.5523 4.44771 52 5 52H58C58.5523 52 59 51.5523 59 51V14.3965C59 13.5375 57.9882 13.0783 57.3416 13.6439L46.0013 23.5639C45.5407 23.9667 44.8296 23.8652 44.5002 23.3496L32.3749 4.36944C31.9737 3.74156 31.0515 3.7571 30.6718 4.39813L19.4095 23.41C19.1147 23.9076 18.4605 24.0521 17.9836 23.725L5.56558 15.2087C4.90199 14.7536 4 15.2287 4 16.0334Z"
                            fill="url(#paint0_linear_1473_5239)" stroke="url(#paint1_linear_1473_5239)" stroke-width="7" />
                        <defs>
                            <linearGradient id="paint0_linear_1473_5239" x1="17.0952" y1="3" x2="62.1321"
                                y2="55.0532" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#B430E3" />
                                <stop offset="0.92993" stop-color="#FAB62A" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_1473_5239" x1="2.69047" y1="-0.0087707" x2="62.5588"
                                y2="66.6742" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#A91CFF" />
                                <stop offset="0.921955" stop-color="#FFBF1C" />
                            </linearGradient>
                        </defs>
                    </svg>
                @endif

            </div>

            @foreach ($profile_vip as $item)
                <div class="concodwsx">
                    <div>
                        <h1 class="fs-vb" style=" color: #fff; font-weight: 400; padding: 0 50px; margin: 20px 0;">
                            VIP
                        </h1>
                    </div>
                    <div>
                        <p class="fs-m" style=" font-weight: 400; color: #ffffff49; padding: 0 20px;">
                            {{ $item->descr }}
                        </p>
                    </div>
                    <div style="padding: 10px 50px; text-align: right;">
                        <div>
                            <p class="fs-s" style=" color: #fff; margin: 0; font-weight: 400;">
                                {{ $item->price }}$
                            </p>
                        </div>
                        <div>
                            <button class="button" style="margin: 0;">
                                Buy
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach

            <div style="width: 87%; justify-content: center; margin: 20px auto;">
                <div style="display: flex; flex-wrap: wrap; justify-content: space-between; margin: -20px;">
                    @foreach ($profile_check as $item)
                        <div
                            style="margin: 30px; display: flex; flex-direction: column; justify-content: end;  color: #fff; width: 350px; height: 300px; background: url({{ Vite::asset('resources/media/images/') . $item->background }}); background-position: center; background-size: cover; border-radius: 12px;">
                            <div style="display: flex; justify-content: space-between; align-items: end; margin: 0 15px;">
                                <h1 style="font-size: 100px; font-weight: 400; margin: 0;">{{ $item->name }}</h1>
                                <div style="font-size: 20px; text-align: end; font-weight: 400;">
                                    <p style="font-weight: 400;">{{ $item->date }}</p>
                                    <p style="font-weight: 400;">{{ $item->price }}$</p>
                                </div>

                            </div>
                            <div>
                                <button class="button2" style="font-weight: 400;">Download chek</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
