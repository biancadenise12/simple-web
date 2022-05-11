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
				<div class="logo"><?php echo gethostname(); ?><a href="index.php"> : Simple Web App</a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section class="banner full">
				<article>
					<img src="images/slide04.jpg" alt="" />
					<div class="inner">
						<header>
							<h2>Welcome!</h2>
							<?php $output = shell_exec('pg_isready --host=$DB_ENDPOINT --port=5432 --username=postgres --dbname=postgres'); echo "<pre>$output</pre>"; ?>
							
							<form action="show.php" method="get">
								<span>What is your first name?</span><input type="text" name="firstname"><br>
								<span>What is your last name?</span><input type="text" name="lastname"><br>
								<input type="submit">
								</form>
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