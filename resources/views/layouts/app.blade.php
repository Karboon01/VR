<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- STYLES -->
    <link rel="shortcut icon" href="{{ Vite::asset('resources/media/images/logo/TimeClub.svg') }}" type="image/x-icon">
    <link rel="mask-icon" type="image/x-icon" href="{{ Vite::asset('resources/media/images/logo/TimeClub.svg') }}"
        color="#111">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/100/three.min.js"></script>
    <script src="https://www.vantajs.com/dist/vanta.fog.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9NT7XHYJL8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-9NT7XHYJL8');
    </script>
</head>

<body translate="no" class="antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Content -->
        <main>
            <div class="modal" data-modal="1">

                <div class="model__con">
                    <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z">
                        </path>
                    </svg>
                    <p class="modal__title"></p>
                </div>

                <form class="form__user" action="" id="register" style="display: none;">
                    <div class="form__napr">
                        <label class="avt" id="log">SIGN IN </label><span>
                            <pre> | </pre>
                        </span><label class="zar" id="reg"> SIGN UP</label>
                    </div>
                    <div class="login-box-log">
                        <div class="user-box">
                            <input type="name" name="" required="">
                            <label>Full name</label>
                        </div>
                        <div class="user-box">
                            <input type="name" name="" required="">
                            <label>E-mail</label>
                        </div>
                        <div class="user-box">
                            <input type="password" name="" required="">
                            <label>Password</label>
                        </div>
                        <div class="user-box">
                            <input type="password" name="" required="">
                            <label>Confirm passowed</label>
                        </div>
                        <div style="display: flex;">
                            <div class="con-logo">
                                <div
                                    style="background: url({{ Vite::asset('resources/media/images/Vector (4).svg') }}); background-size: cover; width: 25px; height: 26px;">
                                </div>
                            </div>
                            <div class="con-logo">
                                <div
                                    style="background: url({{ Vite::asset('resources/media/images/Vector (5).svg') }}); background-size: cover; width: 13px; height: 26px;">
                                </div>
                            </div>
                        </div>
                        <button class="but-log">SEND</button>
                    </div>

                </form>

                <form class="form__user" id="sing" action="">
                    <div class="form__napr">
                        <label class="avt" id="log" style="color: #FF8C00;">SIGN IN </label><span>
                            <pre> | </pre>
                        </span><label class="zar" id="reg"> SIGN UP</label>
                    </div>
                    <div class="form_napr">
                        <div class="login-box-log">
                            <div class="user-box">
                                <input type="name" name="" required="">
                                <label>User Name</label>
                            </div>
                            <div class="user-box">
                                <input type="password" name="" required="">
                                <label>Password</label>
                            </div>
                            <div style="display: flex;">
                                <div class="con-logo">
                                    <div
                                        style="background: url({{ Vite::asset('resources/media/images/Vector (4).svg') }}); background-size: cover; width: 25px; height: 26px;">
                                    </div>
                                </div>
                                <div class="con-logo">
                                    <div
                                        style="background: url({{ Vite::asset('resources/media/images/Vector (5).svg') }}); background-size: cover; width: 13px; height: 26px;">
                                    </div>
                                </div>
                            </div>
                            <button class="but-log">SEND</button>
                        </div>

                    </div>

                </form>

            </div>
            <div class="overlay js-overlay-modal"></div>

            @yield('content')
        </main>
        <footer class="site-footer">
            <div class="containerr">
                <div class="" style="display: flex; justify-content: flex-end; fill: #000;">
                    <div
                        style="margin-right: auto;
            margin-left: 50px;
            display: flex;
            justify-content: flex-start;">
                        <a href="/">
                            <img src="{{ Vite::asset('resources/media/images/Layer_1копия.svg') }}" alt=""
                                width="74px" height="74px">
                        </a>
                    </div>

                    <div style="display: flex;">
                        <div class="" style="display: flex; flex-direction: column; margin: 25px;">
                            <h6><a href="/studio">STUDIO</a></h6>

                        </div>
                        <div class="" style="display: flex; flex-direction: column; margin: 25px;">
                            <h6><a href="/services">SERVICES</a></h6>

                        </div>

                        <div class="" style="display: flex; flex-direction: column; margin: 25px;">
                            <h6><a href="/label">LABEL</a></h6>

                        </div>
                        <div class="" style="display: flex; flex-direction: column; margin: 25px;">
                            <h6><a href="/contact">CONTACT</a></h6>

                        </div>
                        <div class="" style="display: flex; flex-direction: column; margin: 25px;">
                            <h6><a href=""><button id="ru" class="translate"
                                        style="background: transparent; border: 0; cursor: pointer;"><img
                                            src="{{ Vite::asset('resources/media/images/image 12 (1).png') }}"
                                            width="40px" height="25px" alt=""></button></a></h6>

                        </div>
                        <div class="" style="display: flex; flex-direction: column; margin: 25px;">
                            <h6><a href=""><button id="en" class="translate"
                                        style="background: transparent; border: 0; cursor: pointer;"><img
                                            src="{{ Vite::asset('resources/media/images/image 13.png') }}"
                                            width="40px" height="25px" alt=""></button></a></h6>

                        </div>
                    </div>

                </div>

            </div>
            <div class="containerr" style=" margin: 25px;">
                <div class="" style=" display: flex; justify-content: space-between;">
                    <div class="" style="display: flex; flex-direction: column; ">
                        <p class="copyright-text">Copyright © 2017 All Rights Reserved by
                            <a href="#">Scanfcode</a>.
                        </p>
                    </div>

                    <div class="" style="display: flex; flex-direction: column;">
                        <ul class="social-icons">
                            @foreach ($socialNetworks as $item)
                                <li>
                                    <a class="{{ $item->name }}" href="#"
                                        style="display: flex; justify-content: center; align-items: center; text-decoration: none; cursor: pointer;">
                                        {!! $item->icon !!}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                // console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>

    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js">
    </script>

    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js"></script>

    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                // console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>

    <script id="rendered-js">
        $('.navTrigger').click(function() {
            $(this).toggleClass('active');
            console.log("Clicked menu");
            $("#mainListDiv").toggleClass("show_list");
            $("#mainListDiv").fadeIn();

        })
    </script>

    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js"></script>

    <script id="rendered-js">
        // console.clear();
        const {
            gsap,
            imagesLoaded
        } = window;
        const buttons = {
            prev: document.querySelector(".btn--left"),
            next: document.querySelector(".btn--right")
        };

        const cardsContainerEl = document.querySelector(".cards__wrapper");
        const appBgContainerEl = document.querySelector(".app__bg");

        const cardInfosContainerEl = document.querySelector(".info__wrapper");

        buttons.next.addEventListener("click", () => swapCards("right"));

        buttons.prev.addEventListener("click", () => swapCards("left"));

        function swapCards(direction) {
            const currentCardEl = cardsContainerEl.querySelector(".current--card");
            const previousCardEl = cardsContainerEl.querySelector(".previous--card");
            const nextCardEl = cardsContainerEl.querySelector(".next--card");

            const currentBgImageEl = appBgContainerEl.querySelector(".current--image");
            const previousBgImageEl = appBgContainerEl.querySelector(".previous--image");
            const nextBgImageEl = appBgContainerEl.querySelector(".next--image");

            changeInfo(direction);
            swapCardsClass();

            removeCardEvents(currentCardEl);

            function swapCardsClass() {
                currentCardEl.classList.remove("current--card");
                previousCardEl.classList.remove("previous--card");
                nextCardEl.classList.remove("next--card");

                currentBgImageEl.classList.remove("current--image");
                previousBgImageEl.classList.remove("previous--image");
                nextBgImageEl.classList.remove("next--image");

                currentCardEl.style.zIndex = "50";
                currentBgImageEl.style.zIndex = "-2";

                if (direction === "right") {
                    previousCardEl.style.zIndex = "20";
                    nextCardEl.style.zIndex = "30";

                    nextBgImageEl.style.zIndex = "-1";

                    currentCardEl.classList.add("previous--card");
                    previousCardEl.classList.add("next--card");
                    nextCardEl.classList.add("current--card");

                    currentBgImageEl.classList.add("previous--image");
                    previousBgImageEl.classList.add("next--image");
                    nextBgImageEl.classList.add("current--image");
                } else if (direction === "left") {
                    previousCardEl.style.zIndex = "30";
                    nextCardEl.style.zIndex = "20";

                    previousBgImageEl.style.zIndex = "-1";

                    currentCardEl.classList.add("next--card");
                    previousCardEl.classList.add("current--card");
                    nextCardEl.classList.add("previous--card");

                    currentBgImageEl.classList.add("next--image");
                    previousBgImageEl.classList.add("current--image");
                    nextBgImageEl.classList.add("previous--image");
                }
            }
        }

        function changeInfo(direction) {
            let currentInfoEl = cardInfosContainerEl.querySelector(".current--info");
            let previousInfoEl = cardInfosContainerEl.querySelector(".previous--info");
            let nextInfoEl = cardInfosContainerEl.querySelector(".next--info");

            gsap.timeline().
            to([buttons.prev, buttons.next], {
                duration: 0.2,
                opacity: 0.5,
                pointerEvents: "none"
            }).

            to(
                currentInfoEl.querySelectorAll(".text"), {
                    duration: 0.4,
                    stagger: 0.1,
                    translateY: "-120px",
                    opacity: 0
                },

                "-=").

            call(() => {
                swapInfosClass(direction);
            }).
            call(() => initCardEvents()).
            fromTo(
                direction === "right" ?
                nextInfoEl.querySelectorAll(".text") :
                previousInfoEl.querySelectorAll(".text"), {
                    opacity: 0,
                    translateY: "40px"
                },

                {
                    duration: 0.4,
                    stagger: 0.1,
                    translateY: "0px",
                    opacity: 1
                }).


            to([buttons.prev, buttons.next], {
                duration: 0.2,
                opacity: 1,
                pointerEvents: "all"
            });


            function swapInfosClass() {
                currentInfoEl.classList.remove("current--info");
                previousInfoEl.classList.remove("previous--info");
                nextInfoEl.classList.remove("next--info");

                if (direction === "right") {
                    currentInfoEl.classList.add("previous--info");
                    nextInfoEl.classList.add("current--info");
                    previousInfoEl.classList.add("next--info");
                } else if (direction === "left") {
                    currentInfoEl.classList.add("next--info");
                    nextInfoEl.classList.add("previous--info");
                    previousInfoEl.classList.add("current--info");
                }
            }
        }

        function updateCard(e) {
            const card = e.currentTarget;
            const box = card.getBoundingClientRect();
            const centerPosition = {
                x: box.left + box.width / 2,
                y: box.top + box.height / 2
            };

            let angle = Math.atan2(e.pageX - centerPosition.x, 0) * (35 / Math.PI);
            gsap.set(card, {
                "--current-card-rotation-offset": `${angle}deg`
            });

            const currentInfoEl = cardInfosContainerEl.querySelector(".current--info");
            gsap.set(currentInfoEl, {
                rotateY: `${angle}deg`
            });

        }

        function resetCardTransforms(e) {
            const card = e.currentTarget;
            const currentInfoEl = cardInfosContainerEl.querySelector(".current--info");
            gsap.set(card, {
                "--current-card-rotation-offset": 0
            });

            gsap.set(currentInfoEl, {
                rotateY: 0
            });

        }

        function initCardEvents() {
            const currentCardEl = cardsContainerEl.querySelector(".current--card");
            currentCardEl.addEventListener("pointermove", updateCard);
            currentCardEl.addEventListener("pointerout", e => {
                resetCardTransforms(e);
            });
        }
        initCardEvents();

        function removeCardEvents(card) {
            card.removeEventListener("pointermove", updateCard);
        }

        function init() {

            let tl = gsap.timeline();

            tl.to(cardsContainerEl.children, {
                delay: 0.15,
                duration: 0.5,
                stagger: {
                    ease: "power4.inOut",
                    from: "right",
                    amount: 0.1
                },

                "--card-translateY-offset": "0%"
            }).

            to(cardInfosContainerEl.querySelector(".current--info").querySelectorAll(".text"), {
                delay: 0.5,
                duration: 0.4,
                stagger: 0.1,
                opacity: 1,
                translateY: 0
            }).

            to(
                [buttons.prev, buttons.next], {
                    duration: 0.4,
                    opacity: 1,
                    pointerEvents: "all"
                },

                "-=0.4");

        }
        const waitForImages = () => {
            const images = [...document.querySelectorAll("img")];
            const totalImages = images.length;
            let loadedImages = 0;
            const loaderEl = document.querySelector(".loader span");

            gsap.set(cardsContainerEl.children, {
                "--card-translateY-offset": "100vh"
            });

            gsap.set(cardInfosContainerEl.querySelector(".current--info").querySelectorAll(".text"), {
                translateY: "40px",
                opacity: 0
            });

            gsap.set([buttons.prev, buttons.next], {
                pointerEvents: "none",
                opacity: "0"
            });


            images.forEach(image => {
                imagesLoaded(image, instance => {
                    if (instance.isComplete) {
                        loadedImages++;
                        let loadProgress = loadedImages / totalImages;

                        gsap.to(loaderEl, {
                            duration: 1,
                            scaleX: loadProgress,
                            backgroundColor: `hsl(${loadProgress * 120}, 100%, 50%`
                        });


                        if (totalImages == loadedImages) {
                            gsap.timeline().
                            to(".loading__wrapper", {
                                duration: 0.8,
                                opacity: 0,
                                pointerEvents: "none"
                            }).

                            call(() => init());
                        }
                    }
                });
            });
        };
        waitForImages();
        //# sourceURL=pen.js
    </script>

    <script>
        $('.zar').click(function() {
            $('#sing').toggle(({
                'transition': 'all .5s',
            }))
            $('#register').show(({
                'transition': 'all .5s',
            }))
            $('.avt').css({
                'color': 'white',
                'transition': 'all .5s',
            })
            $('.zar').css({
                'color': '#FF8C00',
                'transition': 'all .5s',
            })
        })
        $('.avt').click(function() {
            $('#sing').show(({
                'transition': 'all .5s',
            }))
            $('#register').toggle(({
                'transition': 'all .5s',
            }))
            $('.avt').css({
                'color': '#FF8C00',
                'transition': 'all .5s',
            })
            $('.zar').css({
                'color': 'white',
                'transition': 'all .5s',
            })
        })
    </script>

    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js">
    </script>

    <script id="rendered-js">
        VANTA.FOG({
            el: "#GB-hmeheader",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,

            minWidth: 200.00,
            highlightColor: 0xcbb2ff,
            midtoneColor: 0xb88aff,
            lowlightColor: 0xaa80ff,
            baseColor: 0x202020,
            blurFactor: 0.55,
            speed: 2.50,
            zoom: 1.30
        })
    </script>

    <script src="./js/main.js"></script>

    <script id="rendered-js">
        VANTA.FOG({
            el: "#GB-hmeheadera",
            mouseControls: true,
            touchControls: true,

            minWidth: 200.00,
            highlightColor: 0x0,
            highlightColor: 0xcbb2ff,
            midtoneColor: 0xb88aff,
            lowlightColor: 0xaa80ff,
            baseColor: 0x202020,
            blurFactor: 0.55,
            speed: 2.50,
            zoom: 0.30
        })
    </script>

    <script id="rendered-js">
        VANTA.FOG({
            el: "#GB-hmeheaderacon",
            mouseControls: true,
            touchControls: true,
            waveHeight: 20,
            minWidth: 200.00,
            highlightColor: 0x0,
            highlightColor: 0xcbb2ff,
            midtoneColor: 0xb88aff,
            lowlightColor: 0xaa80ff,
            baseColor: 0x202020,
            blurFactor: 0.55,
            speed: 2.50,
            zoom: 0.30
        })
    </script>

    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                // console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>
    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js">
    </script>


    <script id="rendered-js">
        $('.navTrigger').click(function() {
            $(this).toggleClass('active');
            console.log("Clicked menu");
            $("#mainListDiv").toggleClass("show_list");
            $("#mainListDiv").fadeIn();

        });
    </script>

    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js">
    </script>

    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js"></script>

    <script>
        $('.zar').click(function() {
            $('#sing').toggle(({
                'transition': 'all .5s',
            }))
            $('#register').show(({
                'transition': 'all .5s',
            }))
            $('.avt').css({
                'color': 'white',
                'transition': 'all .5s',
            })
            $('.zar').css({
                'color': '#FF8C00',
                'transition': 'all .5s',
            })
        })
        $('.avt').click(function() {
            $('#sing').show(({
                'transition': 'all .5s',
            }))
            $('#register').toggle(({
                'transition': 'all .5s',
            }))
            $('.avt').css({
                'color': '#FF8C00',
                'transition': 'all .5s',
            })
            $('.zar').css({
                'color': 'white',
                'transition': 'all .5s',
            })
        })
    </script>

    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js">
    </script>


    <script id="rendered-js">
        VANTA.FOG({
            el: "#GB-hmeheaderaa",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            highlightColor: 0xcbb2ff,
            midtoneColor: 0xb88aff,
            lowlightColor: 0xaa80ff,
            baseColor: 0x202020,
            blurFactor: 0.55,
            speed: 2.50,
            zoom: .30
        })
    </script>

    <script id="rendered-js">
        VANTA.FOG({
            el: "#GB-hmeheadderaaa",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            highlightColor: 0xcbb2ff,
            midtoneColor: 0xb88aff,
            lowlightColor: 0xaa80ff,
            baseColor: 0x202020,
            blurFactor: 0.55,
            speed: 2.50,
            zoom: .30
        })
    </script>




    <script>
        const animItems = document.querySelectorAll('._anim-items');

        if (animItems.length > 0) {
            window.addEventListener('scroll', animOnScroll);

            function animOnScroll() {
                for (let index = 0; index < animItems.length; index++) {
                    const animItem = animItems[index];
                    const animItemHeight = animItem.offsetHeight;
                    const animItemOffset = offset(animItem).top;
                    const animStart = 4;

                    let animItemPoint = window.innerHeight - animItemHeight / animStart;
                    if (animItemHeight > window.innerHeight) {
                        animItemPoint = window.innerHeight - window.innerHeight / animStart;
                    }

                    if ((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)) {
                        animItem.classList.add('_active');
                    } else {
                        if (!animItem.classList.contains('_anim-no-hide')) {
                            animItem.classList.remove('_active');
                        }

                    }
                }
            }

            function offset(el) {
                const rect = el.getBoundingClientRect(),
                    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
                    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                return {
                    top: rect.top + scrollTop,
                    left: rect.left + scrollLeft
                }
            }
            setTimeout(() => {
                animOnScroll();
            }, 300);


        }
    </script>
</body>

</html>
