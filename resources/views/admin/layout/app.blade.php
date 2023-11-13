<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bracket Responsive Bootstrap 4 Admin Template</title>
    @include('admin.partials.meta')
    @include('admin.partials.headerlinks')
</head>
<body>
<div class="br-logo"><a href=""><span>[</span>bracket<span>]</span></a></div>

@include('admin.partials.slide-left')
@include('admin.partials.header')
@yield('content')
@include('admin.partials.slide-right')
@include('admin.partials.footer')
@include('admin.partials.footerlinks')
    </body>
</html>
