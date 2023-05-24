<header id="app_header" class="bg-dark py-3">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'current_page rounded-4' : '' }}"
                href="{{ route('home') }}" aria-current="page">
                Home
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'movies' ? 'current_page rounded-4' : '' }}"
                href="{{ route('movies') }}">
                Movies
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'about' ? 'current_page rounded-4' : '' }}"
                href="{{ route('about') }}">
                About
            </a>
        </li>
    </ul>
</header>
