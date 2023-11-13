<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Insurax - Insurance Company HTML Template - Home Insurance</title>
    <meta name="author" content="Insurax">
    <meta name="description" content="Insurax - Insurance Company HTML Template">
    <meta name="keywords" content="Insurax - Insurance Company HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    @include('front.partials.headerlinks')
</head>
<body class="theme-blue">
@include('front.partials. Preloader')
@include('front.partials.menu')
@include('front.partials.Sidemenu')
@include('front.partials.header')
@yield('content')
@include('front.partials.footer')
@include('front.partials.Scroll')
@include('front.partials.footerlinks')
</body>
</html>
