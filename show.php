<!DOCTYPE HTML>
<html>
	<head>
		<title>Simple Web App</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><?php echo gethostname(); ?><a href="index.html"> : Simple Web App</a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section class="banner full">
				<article>
					<img src="images/slide02.jpg" alt="" />
					<div class="inner">
						<header>
							<h2>Hello!</h2>
							<p> <?php echo $_GET["firstname"]; echo " "; echo $_GET["lastname"] ?> </p>	
						</header>
					</div>
				</article>
				
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					&copy; TEMPLATED. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>