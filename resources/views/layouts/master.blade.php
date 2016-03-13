<!DOCTYPE html>
<!--
 _____   ___  ___
|     | /   \/   \  ___ __
`__ \|  O    O  || . \\ \/
|___/ \___/\___/ |  _//\_\
                 |_|
            https://500px.com

Want to make this site better?  https://tesjil.com/jobs
-->
<html>
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="_token" content="{{ csrf_token() }}" />
  <meta name="description" content="Directory And Listing System">
  <meta name="keywords" content="Laravel, PHP, Nigeria, People, Find">
  <meta name="author" content="Surajudeen Akande">
  <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
  <!--Bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/darkly/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/darkly/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
  @yield('custom-css')
</head>
<body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    @yield('scripts')
</body>
</html>

<html>
