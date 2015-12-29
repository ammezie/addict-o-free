@extends('layout')
@section('includes')
<link rel="stylesheet" type="text/css" href="{{ asset('css/icons.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}" />
<script src="{{ asset('js/modernizr.custom.js') }}"></script>

@stop
@section('content')
<div class="container">
			<!-- Push Wrapper -->
			<div class="mp-pusher" id="mp-pusher">

				<!-- mp-menu -->
				<nav id="mp-menu" class="mp-menu">
					<div class="mp-level">
						<h2 class="icon icon-world">Menu</h2>
						<ul>
							<li class="icon icon-arrow-left">
								<a class="icon icon-display" href="#">Devices</a>
								
							</li>
							<li class="icon icon-arrow-left">
								<a class="icon icon-news" href="#">Reports</a>
							</li>
							<li><a class="icon icon-photo" href="#">Collections</a></li>
							<li><a class="icon icon-wallet" href="#">Credits</a></li>
						</ul>
							
					</div>
				</nav>
				<!-- /mp-menu -->

				<div class="scroller"><!-- this is for emulating position fixed of the nav -->
					<div class="scroller-inner">
						<div class="content clearfix">
							<div class="block block-40 clearfix">
								<p><a href="#" id="trigger" class="menu-trigger">Menu</a></p>
							</div>
							
						
						</div>
					</div><!-- /scroller-inner -->
				</div><!-- /scroller -->

			</div><!-- /pusher -->
		</div><!-- /container -->
<script src="{{ asset('js/classie.js') }}"></script>
<script src="{{ asset('js/mlpushmenu.js') }}"></script>
<script>
      new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
</script>
@stop