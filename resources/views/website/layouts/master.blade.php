<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('website.layouts.style.style')
    @yield('style')
    <title>NA - Noor Al-Amana | @yield('titel')</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178114339-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-178114339-1');
</script>

</head>
<body>

    @include('website.layouts.navbar')
   
    @yield('content')

    @include('website.layouts.footer')
    <a href="#0" class="cd-top"></a>
    @include('website.layouts.script.script')
    @yield('script')
</body>
</html>