<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" href="img/favicon.png" />
	<title>Algo</title>
	<!-- Bootstrap core CSS -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" type="text/css" href="/css/grid.css">
	<link rel="stylesheet" type="text/css" href="/css/locomotive-scroll.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body data-scroll-container class="container">
	<div class="grid">
		<header>
			<nav class="nav" id="nav">
				<div id="logo">
					<a href="/">a</a>
				</div>
				<div id="menu">
					<div id="menu-toggle">
						<a class="main-link" href="#" onclick="toggle()">
							<svg xmlns="http://www.w3.org/2000/svg" id="hamburger-nav" width="32" height="20" viewBox="0 0 32 18">
								<g fill="none" fill-rule="evenodd" stroke="#1E2122" stroke-linecap="square" stroke-width="3" transform="translate(2)">
									<path d="M0 1L30 1M0 9L30 9M0 17L30 17"></path>
								</g>
							</svg>
						</a>
					</div>
			</nav>
		</header>

		<main>
			<?php include "../app/views/" . $view . ".php";
			?>
		</main>

		<footer>
			<div class="row-fluid">
				<div>L</div>
				<div>M</div>
				<div>R</div>
			</div>
		</footer>
	</div>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="/js/custom.js"></script>
	<script src="/js/locomotive-scroll.min.js"></script>
	<script>
		//AOS.init();

		const scroll = new LocomotiveScroll({
			el: document.querySelector('[data-scroll-container]'),
			smooth: true
		});
	</script>
</body>

</html>