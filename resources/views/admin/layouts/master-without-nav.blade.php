<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <title> @yield('title') | BK Basketbol</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Ubit CMS" name="description"/>
    <meta content="ubit" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

    @include('admin.layouts.head-css')
</head>

@yield('body')

@yield('content')

@include('admin.layouts.vendor-scripts')
</body>
</html>
