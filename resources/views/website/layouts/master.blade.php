<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('website.layouts.style.style')
    @yield('style')
    <title>@yield('titel')</title>
</head>
<body>

    @include('website.layouts.navbar')
   
    @yield('content')

    @include('website.layouts.footer')
    @include('website.layouts.script.script')
    @yield('script')
</body>
</html>