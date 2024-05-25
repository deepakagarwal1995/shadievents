<!DOCTYPE html>
<html lang="en">
@php
    $protocol =
        (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443
            ? 'https://'
            : 'http://';
    $cpurl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
@endphp

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <meta name="content_country_applicability" content="IN" />

    <meta name="author" content="Shadi Events" />


    <link rel="dns-prefetch" href="//tpc.googlesyndication.com" />
    <link rel="dns-prefetch" href="//pagead2.googlesyndication.com" />
    <link rel="dns-prefetch" href="//www.googletagservices.com" />
    <link rel='dns-prefetch' href='//www.googletagmanager.com' />
    <meta name="distribution" content="India" />
    <meta name="identifier-url" content="URL/" />
    <meta name="target_country" content="IN" />
    <meta name="country" content="India" />


    <title>{{ $title ?? 'Wedding Planner in Agra | Shadievents' }}</title>
    <meta name="keywords" content="{{ $keywords ?? 'Shadievents' }}" />
    <meta property="og:site_name" content="Shadievents">
    <link rel="canonical" href="{{ $cpurl }}">
    <meta property="og:type" content="website">
    <meta property="og:image"
        content="{{ $ogimage ?? config('app.url') . '/assets/images/OGlogo-shadi-events-2.jpg' }}">
    <meta name="description"
        content="{{ $descr ?? 'Shadi Events is the best wedding planner in Agra for event management and wedding services, Hospitality services, wedding Decoration services, and wedding photography.' }}">
    <meta property="og:title" content="{{ $title ?? 'Wedding Planner in Agra | Shadievents' }}">
    <meta property="og:description"
        content="{{ $descr ?? 'Shadi Events is the best wedding planner in Agra for event management and wedding services, Hospitality services, wedding Decoration services, and wedding photography.' }}">
    <meta property="og:url" content="{{ $cpurl }}" />

    @include('inc.headerLinks')

    @yield('head')

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MS3M3TK8');
    </script>
    <!-- End Google Tag Manager -->


    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "website",
  "name": "Best Wedding Planner In Agra || Shadi Events",
  "url": "https://www.shadievents.com/",
  "sameAs": [
"https://www.facebook.com/shadievents.com",
"https://www.instagram.com/shadieventss/",
"https://www.youtube.com/@cpstudio1567",
"https://in.pinterest.com/wedding_planner_agra/",
"https://www.linkedin.com/company/shadi-events/",
"https://www.shadievents.com/blog"
  ]
}
</script>

    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Best Wedding Planner In Agra || Shadi Events",
  "image": "https://www.shadievents.com/assets/images/gold-logo-sm.png",
  "@id": "https://www.shadievents.com",
  "url": "https://www.shadievents.com/",
  "telephone": "8868899888",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "503 Besera Heights, Fatehabad Road, Near Jaypee Palace",
    "addressLocality": "Agra",
    "postalCode": "282001",
    "addressCountry": "IN"
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "00:00",
    "closes": "23:59"
  },
  "sameAs": [
    "https://www.facebook.com/shadievents.tcom",
    "https://www.instagram.com/shadieventss/",
    "https://www.youtube.com/@cpstudio1567",
    "https://www.linkedin.com/company/shadi-events/",
    "https://in.pinterest.com/wedding_planner_agra/",
    "https://www.shadievents.com/blog"
  ]
}
</script>

    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Shadi Events",
  "alternateName": "Best Wedding Planner In Agra",
  "url": "https://www.shadievents.com/",
  "logo": "https://www.shadievents.com/assets/images/gold-logo-sm.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "7500466141",
    "contactType": "customer service",
    "contactOption": "HearingImpairedSupported",
    "areaServed": "IN",
    "availableLanguage": ["en","Hindi"]
  },
  "sameAs": [
    "https://www.facebook.com/shadievents.tcom",
    "https://www.instagram.com/shadieventss/",
    "https://www.youtube.com/@cpstudio1567",
    "https://www.linkedin.com/company/shadi-events/",
    "https://in.pinterest.com/wedding_planner_agra/"
  ]
}
</script>

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MS3M3TK8" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
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
