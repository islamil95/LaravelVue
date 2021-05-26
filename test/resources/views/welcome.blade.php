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
            <div class="col-6"><img src="img/banner__img-1.jpg" alt="Педагогическому работнику" class="w-100 rounded"></div>
            <div class="col-6"><img src="img/banner__img-2.jpg" alt="Руководителю образовательной организации" class="w-100 rounded">
        </div>
        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <a class="btn btn-primary py-3 px-5" >Квалификационное испытание</a>
        </div>
    </div>
    <div class="row mt-4 py-5 align-items-center" style="background: #f3f3f3;">
        <div class="col-6 w-100 h-100 d-block" style="background: url('img/platform__img.jpg');">s</div>
        <div class="col-6">
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
{{--            <example-component></example-component>--}}
{{--                        <prop-component :urldata="{{json_encode($url_data)}}"></prop-component>--}}
{{--            <ajax-component></ajax-component>--}}



</div>
</body>
</html>
