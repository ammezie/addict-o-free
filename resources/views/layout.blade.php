<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="{{ asset('css/reset.css') }}"> <!-- CSS reset -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Resource style -->
  <script src="{{ asset('js/modernizr.js') }}"></script> <!-- Modernizr -->
  <script src="{{ asset('js/jquery-2.1.4.js') }}"></script> <!-- Modernizr -->
  @yield('title')
  
</head>
<body>
@yield('content')

<nav id="main-nav">
  <ul>
    <li><a href="#0"><span>Tour</span></a></li>
    <li><a href="#0"><span>Pricing</span></a></li>
    <li><a href="#0"><span>Labs</span></a></li>
    <li><a href="#0"><span>About</span></a></li>
    <li><a href="#0"><span>Contact us</span></a></li>
  </ul>
  <a href="#0" class="cd-close-menu">Close<span></span></a>
</nav>

<script src="{{ asset('js/main.js') }}"></script> <!-- Resource jQuery -->
</body>
</html>