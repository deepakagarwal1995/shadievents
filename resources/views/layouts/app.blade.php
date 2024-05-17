<!DOCTYPE html>
<html lang="en">
@php
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$cpurl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

@endphp
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="https://svtindia.in/" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <title>{{ $title ?? 'Wedding Planner in Agra | Shadievents' }}</title>
    <meta name="keywords" content="{{ $keywords ?? 'Shadievents' }}" />
    <meta property="og:site_name" content="Shadievents">
    <link rel="canonical" href="{{ $cpurl }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ $ogimage ?? config('app.url').'/assets/images/OGlogo-shadi-events-2.jpg' }}">
    <meta name="description" content="{{ $descr ?? 'We shadievents are topmost wedding planner, we provide all wedding services in Agra,Jaipur,Delhi,Mathura,Firozabad,Baharatpur,Gwalior,Goa,Mumbai,Bhopal and many more services in India.' }}">
    <meta property="og:title" content="{{ $title ?? 'Wedding Planner in Agra | Shadievents' }}">
    <meta property="og:description" content="{{ $descr ?? 'We shadievents are topmost wedding planner, we provide all wedding services in Agra,Jaipur,Delhi,Mathura,Firozabad,Baharatpur,Gwalior,Goa,Mumbai,Bhopal and many more services in India.' }}">

    @include('inc.headerLinks')

    @yield('head')
</head>

<body>
    <div class="page">
    @yield('headerTop')
    @include('inc.header')

    @yield('content')

    @include('inc.footer')

    @include('inc.footerLinks')

    </div>

    @yield('scripts')
</body>

</html>
