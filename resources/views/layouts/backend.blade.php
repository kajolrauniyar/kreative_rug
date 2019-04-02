<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/materialadmin.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/material-design-iconic-font.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/libs/toastr/toastr.css')}}" />
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"> --}}
    <!-- END STYLESHEETS -->
    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    @yield('styles')
</head>
<body class="menubar-hoverable header-fixed menubar-pin ">
    @if (Auth::check())
    @include('backend.partials._side-nav')
    @else
    @yield('content')
    @endif
</div>
</body>
@include('backend.partials._javascript')
@include('backend.partials._message')
@yield('scripts')
</html>
