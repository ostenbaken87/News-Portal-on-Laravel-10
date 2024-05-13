<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free-6.5.2-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">
</head>
<body>
<div class="wrapper">
    @include('front.header.header')
    <main>
        @yield('content')
    </main>
    <footer class="footer">
        <div class="footer_rights">
            Created by Soloviev NV in 2024, all rights reserved.
        </div>
    </footer>
</div>
<script src=""></script>
<script src="{{asset('assets/front/jquery/jquery.min.js')}}"></script>
</body>
</html>
