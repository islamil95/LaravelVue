<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm py-3">
    <div class="row w-100 m-0 p-0">
        <a class="navbar-brand p-0 col-12 m-0 col-sm-10 col-md-4 HeaderLogo" href="{{ url('/') }}">
{{--            <div class="row m-0">{{ config('app.name') }}</div>--}}
            <div class="row m-0">
                <small class="w-100">Реестр резерва педагогических</small>
                <small class="w-100">кадров Чеченской Республики</small>
            </div>
        </a>
        <button class="navbar-toggler col-12 col-sm-2 collapsed HeaderMenuButton" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto HeaderMenuUrlCenterBlock">
                <li class="mx-2 HeaderMenuUrlCenter"><a class="text-muted text-decoration-none" href="{{route("home")}}">Личный кабинет</a></li>
                <li class="mx-2 HeaderMenuUrlCenter" ><a class="text-muted text-decoration-none" href="{{route("home")}}">Документы</a></li>
                <li class="mx-2 HeaderMenuUrlCenter"><a class="text-muted text-decoration-none" href="{{route("home")}}">Впервые на сайте?</a></li>
                <li class="mx-2 HeaderMenuUrlCenter"><a class="text-muted text-decoration-none" href="{{route("home")}}">Контакты</a></li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Вход
                        </a>
                        <div class="dropdown-menu p-2" aria-labelledby="navbarDropdownMenuLink" style="left: -120%;">
                            @if (Route::has('login'))
                                <a class="nav-link dropdown-item" href="{{ route('login') }}"   >Войти</a>
                            @endif
                            @if (Route::has('register'))
                                <a class="nav-link dropdown-item" href="{{ route('register') }}">Регистрация</a>
                            @endif
                        </div>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
