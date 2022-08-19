<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('include.meta')
    @include('include.style')
    <title>@yield('title') - DuniaCrypto</title>

</head>
<body id="page-top">
    <div class="back-to-top"></div>
     @include('include.navbar')
    @yield('content')
    @include('include.footer')
    @include('include.script')
</body>
</html>