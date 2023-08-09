<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('favicon/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/card/size.css') }}">
    @stack('style')
    @yield('css')
</head>
<body>
    <div class="cover">
        @yield('cover')
    </div>
    <div class="container">
        @yield('container')
    </div>
    @stack('script')
    @yield('script')
</body>
</html>