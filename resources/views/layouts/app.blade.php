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

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MS3M3TK8');</script>
<!-- End Google Tag Manager -->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MS3M3TK8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
