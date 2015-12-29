@extends('layout')
@section('title')
<title>Addict-O-Free</title>
@stop
@section('includes')
<link rel="stylesheet" href="{{ asset('css/reset.css') }}"> <!-- CSS reset -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Resource style -->
<script src="{{ asset('js/jquery-2.1.4.js') }}"></script> <!-- Modernizr -->
<script src="{{ asset('js/main.js') }}"></script> <!-- Resource jQuery -->
<script src="{{ asset('js/modernizr.js') }}"></script> <!-- Modernizr -->

@stop
@section('content')

<main id="cd-main-content">
  <section id="cd-intro">
  <div id="button-g">
    <button type="button" class="button large-button">Login</button>
    <button type="button" class="button large-button">Register</button>
  </div>
    <header class="cd-header">
      <div id="cd-logo"><a href="#0"><img src="{{ asset('img/cd-logo.svg') }}" alt="Logo"></a></div>
      <a class="cd-menu-trigger" href="#main-nav">Menu<span></span></a>
    </header>
    <div class="cd-blurred-bg"></div>
  </section> <!-- cd-intro -->
</main>
<div class="cd-shadow-layer"></div>
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

@stop