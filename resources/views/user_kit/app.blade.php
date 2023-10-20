<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>
	<head>
		<title>Solid State by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets_u/css/main.css" />
		<noscript><link rel="stylesheet" href="assets_u/css/noscript.css" /></noscript>

		<noscript><link rel="stylesheet" href="assets_u/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
        <!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="{{ route('user.index') }}">Home</a></li>
								<li><a href={{ route('information.option') }}>Information</a></li>
								<li><a href="{{ route('login') }}">Log In</a></li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>

        @yield('konten_u')

		<!-- Scripts -->
			<script src="assets_u/js/jquery.min.js"></script>
			<script src="assets_u/js/jquery.scrollex.min.js"></script>
			<script src="assets_u/js/browser.min.js"></script>
			<script src="assets_u/js/breakpoints.min.js"></script>
			<script src="assets_u/js/util.js"></script>
			<script src="assets_u/js/main.js"></script>

	</body>
</html>
