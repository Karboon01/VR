<nav class="nav">
    <div class="nav__container">
        <div class="nav__logo">
            <a href="/">
                <img src="{{ Vite::asset('resources/media/images/logo/TimeClub.svg') }}" alt="Logo">
            </a>
        </div>
        <div id="nav__List" class="nav__list">
            <ul class="nav__links">
                <li><a href="/about">ABOUT US</a></li>
                <li><a href="/games">GAMES</a></li>
                <li><a href="/gallery">GALLERY</a></li>
                <li><a href="/contact">CONTACT</a></li>
                @guest
                    <li>
                        <a href={{ route('login') }}>
                            <svg class="loggin" width="42" height="42" viewBox="0 0 32 33" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.75 17.0986C20.1955 17.0986 23.7993 13.4948 23.7993 9.04929C23.7993 4.60379 20.1955 1 15.75 1C11.3045 1 7.70068 4.60379 7.70068 9.04929C7.70068 13.4948 11.3045 17.0986 15.75 17.0986Z M1 31.8489L1.51976 28.9691C2.13378 25.6433 3.89344 22.6376 6.49305 20.4743C9.09267 18.3109 12.368 17.1266 15.75 17.127C19.136 17.1278 22.4146 18.3161 25.0147 20.4851C27.6149 22.654 29.3721 25.6662 29.9802 28.9972L30.5 31.877"
                                    stroke="#fff" stroke-width="2.5" stroke-miterlimit="10" />
                            </svg>
                        </a>
                    </li>
                @endguest
                @auth
                    <li>
                        <a href={{ route('profile.edit') }}>
                            <svg class="loggin" width="42" height="42" viewBox="0 0 32 33" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.75 17.0986C20.1955 17.0986 23.7993 13.4948 23.7993 9.04929C23.7993 4.60379 20.1955 1 15.75 1C11.3045 1 7.70068 4.60379 7.70068 9.04929C7.70068 13.4948 11.3045 17.0986 15.75 17.0986Z M1 31.8489L1.51976 28.9691C2.13378 25.6433 3.89344 22.6376 6.49305 20.4743C9.09267 18.3109 12.368 17.1266 15.75 17.127C19.136 17.1278 22.4146 18.3161 25.0147 20.4851C27.6149 22.654 29.3721 25.6662 29.9802 28.9972L30.5 31.877"
                                    stroke="#fff" stroke-width="2.5" stroke-miterlimit="10" />
                            </svg>
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
@auth
    @if (auth()->check() && auth()->user()->is_admin)
        <nav class="nav mt-[65px]">
            <div class="nav__container">
                <div id="nav__List" class="nav__list">
                    <ul class="nav__links">
                        <li><a href="/admin_socials">SOCIAL</a></li>
                        <li><a href="/admin_banner">BANNER</a></li>
                        <li><a href="/admin_main">MAIN</a></li>
                        <li><a href="/admin_about">ABOUT US</a></li>
                        <li><a href="/admin_games">GAMES</a></li>
                        <li><a href="/admin_gallery">GALLERY</a></li>
                        <li><a href="/admin_contact">CONTACT</a></li>
                        <li><a href="/admin_users">USERS</a></li>
                        <li><a href="/change_log">CHANGE LOG</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    @endif
@endauth
