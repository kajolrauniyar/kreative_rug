<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>{{config('app.name')}}</title>
  <meta name="robots" content="index,follow">
  <meta name="Googlebot" content="index, follow"/>
  <meta name="distribution" content="Global">
  <meta name="revisit-after" content="2 Days" />
  <meta name="classification" content="Rugs, Custom Handmade Rugs from Nepal" />
  <meta name="category" content="Rugs, Custom Handmade Rugs from Nepal" />
  <meta name="language" content="en-us" />
  <meta name="description" content="Kreative Rugs Studio is the solution for anyone looking for a truely unique, high quality & custom made rug.">
  <link rel="canonical" href="{{url()->current()}}" />
  <base url="{{ url('/') }}"/>
  
  <script type='application/ld+json'> 
  {
    "@context": "http://www.schema.org",
    "@type": "Hotel",
    "name": "Kreative Rugs",
    "url": "www.kreativerugs.com/",
    "logo": "http://www.kreativerugs.com/img/android-icon-192x192.png",
    "image": "http://www.kreativerugs.com/img/android-icon-192x192.png",
    "description": "Kreative Rugs Studio is the solution for anyone looking for a truely unique, high quality & custom made rug.",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Kesar Mahal Marg, Thamel-29, Kathmandu - 44600, Nepal",
      "addressLocality": "kathmandu",
      "addressRegion": "Center Development Region",
      "postalCode": "44600",
      "addressCountry": "Nepal"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "27.715792",
      "longitude": "85.313797"
    },
    "hasMap": "https://www.google.com/maps/place/Karma+Tara+Residency/@27.715792,85.313797,17z/data=!4m5!3m4!1s0x0:0x97dfbf880ed4c453!8m2!3d27.7159776!4d85.3145912?hl=en-US",
    "openingHours": "Mo, Tu, We, Th, Fr, Sa 10:00-22:00 Su 10:00-20:00",
    "contactPoint": {
      "@type": "ContactPoint",
      "contactType": "office",
      "telephone": "+977 1-4423578"
    }
  }
   </script>

  <link rel="apple-touch-icon" sizes="57x57" href="{{asset('img/apple-icon-57x57.png')}}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{asset('img/apple-icon-60x60.png')}}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/apple-icon-72x72.png')}}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon-76x76.png')}}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/apple-icon-114x114.png')}}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{asset('img/apple-icon-120x120.png')}}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{asset('img/apple-icon-144x144.png')}}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{asset('img/apple-icon-152x152.png')}}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/apple-icon-180x180.png')}}">
  <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/android-icon-192x192.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicon-96x96.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon-16x16.png')}}">
  <link rel="manifest" href="{{ asset('img/manifest.json') }}">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{{ asset('img/ms-icon-144x144.png') }}">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{asset('css/icon-font.css')}}">

</head>

<body>
  @include('frontend.partials._nav') @yield('content')
</body>
  @include('frontend.partials._footer')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="{{asset('js/app.js')}}"></script>

</html>