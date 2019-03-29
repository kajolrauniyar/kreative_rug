<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{asset('css/icon-font.css')}}">
  <title>{{config('app.name')}}</title>
</head>

<body>    
  @include('frontend.partials._nav') 
  @yield('content')
</body>
  @include('frontend.partials._footer')
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="{{asset('js/app.js')}}"></script>

</html>