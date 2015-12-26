@extends('layout')
@section('title')
<title>Addict-O-Free</title>
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
@stop