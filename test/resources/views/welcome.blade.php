<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @include('layouts/headerMenu')
    <div class="container   mt-4">
        <div class="row">
            <div class="col-md-6 col-12"><img src="img/banner__img-1.jpg" alt="Педагогическому работнику" class="w-100 rounded"></div>
            <div class="col-md-6 col-12 IndexMen"><img src="img/banner__img-2.jpg" alt="Руководителю образовательной организации" class="w-100 rounded">
        </div>
        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-12 col-md-6"><a class="btn btn-primary py-3 px-5 w-100" href="{{route('login')}}">Квалификационное испытание</a></div>
        </div>
    </div>

    <div class="row mx-0 mt-4  " style="background: #f3f3f3;">
        <div class="col-12 col-md-6 IndexLeftImg" style="background: url('img/platform__img.jpg'); background-size: cover;">⠀</div>
        <div class="col-12 col-md-6 py-5">
            <h2 class="font-weight-bold" style='font-family: "Montserrat", Arial, sans-serif;'>
                Описание платформы
            </h2>
            <p style="    text-align: justify;">Уважаемые коллеги, педагоги и руководители ОО! <br> Сайт "Реестр
                резерва педагогических кадров Чеченской Республики" создан в целях оказания профессионального
                сопровождения учителей и директоров школ в вопросах трудоустройства. <br> Настоящий сайт
                ориентирован на создание региональной базы педагогических кадров ЧР, дает возможность
                руководителям ОО подобрать для своей организации квалифицированных специалистов.</p>
            <p style="    text-align: justify;">Уважаемые учителя! На нашем сайте вы можете пройти тестирование
                (квалификационное испытание) по соответствующему предмету и получить сертификат о прохождении
                данного испытания. <br>Это дает вам возможность подтвердить свою компетентность и найти
                интересную работу.</p>
        </div>
    </div>
<div style="background: #333333;font-size: 130%;" class="p-4 text-white row m-0">
    <div class="col-sm-4 col-12 footer_logo">
        <small class="w-100">Pedagogchr.ru</small>
    </div>
    <div class="col-sm-4 text-center col-12" >
        <small class="w-100">© 2019 Реестр резерва педагогических кадров Чеченской Республики</small>
    </div>
    <div class="col-sm-4 col-12  footer_politica" >
        <small class="w-100"><a href="/" class="text-white">Политика конфиденциальности</a></small>
    </div>
</div>
    {{--            <example-component></example-component>--}}
{{--                        <prop-component :urldata="{{json_encode($url_data)}}"></prop-component>--}}
{{--            <ajax-component></ajax-component>--}}



</div>
</body>
</html>
