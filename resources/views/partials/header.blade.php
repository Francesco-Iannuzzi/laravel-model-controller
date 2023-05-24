<header class="bg-dark py-3">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'bg-secondary text-light rounded-4' : '' }} text-light"
                href="{{ route('home') }}" aria-current="page">
                Home
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'movies' ? 'bg-secondary text-light rounded-4' : '' }} text-light"
                href="{{ route('movies') }}">
                Movies
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'about' ? 'bg-secondary text-light rounded-4' : '' }} text-light"
                href="{{ route('about') }}">
                About
            </a>
        </li>
    </ul>
</header>
