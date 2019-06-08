<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Rubik&display=swap&subset=cyrillic" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap-grid.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/bootstrap-utilities@4.1.3/bootstrap-utilities.css" rel="stylesheet" />
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet" rel="stylesheet" />
    <link href="https://unpkg.com/sanitize.css/typography.css" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col logo">
                    <a href="{{route('root')}}">
                        <img src="/images/logo-raster-full.png" alt="{{env('APP_NAME')}}" height="60px">
                    </a>
                    <!-- <strong style="color:#3498db">M</strong>obilnikacije.net -->
                </div>
            </div>
        </div>
    </header>
    <nav class="menu mb-4">
        <div class="container">
            <div class="row">
                <div class="col">
                        <!-- <a href="#">Samsung</a>
                        <a href="#">HTC</a>
                        <a href="#">Sony</a>
                        <a href="#">Apple iPhone</a>
                        <a href="#">Nokia</a>
                        <a href="#">Windows Phone</a>
                        <a href="#">Alcatel</a>
                        <a href="#">Huawei</a> -->
                        @foreach($brands as $brand)
                        <a href="#">{{$brand->name}}</a>
                        @endforeach 
                </div>
            </div>
        </div>
    </nav>

    <!--Container-->
    @yield('content')
    <!--End Container-->

    <div style="height:700px"></div>
</body>
</html>
