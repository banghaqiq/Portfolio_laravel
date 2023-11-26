<nav class="navbar navbar-expand-md nav">
    <div class="container">
        <h2>
            <a class="navbar-brand " href="{{ url('#') }}" style="color:white;font-family:'agbalumo';font-size:2.5rem">
                {{ config('app.name',) }}
            </a>
        </h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}" style="font-family: cursive;font-size:1.2rem">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                <li class="nav-item">
                    <a href="{{ route('addmenu') }}" class="nav-link" style="color: {{ Request::routeIs('addmenu') ? 'aqua' : '' }};border-bottom:{{ Request::routeIs('addmenu') ? '1px solid aqua' : '' }};  ">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('addprofile') }}" class="nav-link" style="color: {{ Request::routeIs('addprofile') ? 'aqua' : '' }};border-bottom:{{ Request::routeIs('addprofile') ? '1px solid aqua' : '' }};">About</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('addservice') }}" class="nav-link" style="color: {{ Request::routeIs('addservice') ? 'aqua' : '' }};border-bottom:{{ Request::routeIs('addservice') ? '1px solid aqua' : '' }};">Service</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('addportfolio') }}" class="nav-link" style="color: {{ Request::routeIs('addportfolio') ? 'aqua' : '' }};border-bottom:{{ Request::routeIs('addportfolio') ? '1px solid aqua' : '' }};">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('addpricing') }}" class="nav-link" style="color: {{ Request::routeIs('addpricing') ? 'aqua' : '' }};border-bottom:{{ Request::routeIs('addpricing') ? '1px solid aqua' : '' }};">Pricing</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('addtestimonial') }}" class="nav-link" style="color: {{ Request::routeIs('addtestimonial') ? 'aqua' : '' }};border-bottom:{{ Request::routeIs('addtestimonial') ? '1px solid aqua' : '' }};">Testimonial</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('addblog') }}" class="nav-link" style="color: {{ Request::routeIs('addblog') ? 'aqua' : '' }};border-bottom:{{ Request::routeIs('addblog') ? '1px solid aqua' : '' }};">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('addsosmed') }}" class="nav-link" style="color: {{ Request::routeIs('addsosmed') ? 'aqua' : '' }};border-bottom:{{ Request::routeIs('addsosmed') ? '1px solid aqua' : '' }};">Sosmed</a>
                </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
