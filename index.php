<?php
session_start ();
?>

<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8">

		<title>Open Music</title>
		<meta name="description" content="">

		<?php include('includes/php/favicon.php') ?>

		<!-- Vue Mobile optimisé -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="includes/css/styles.css" rel="stylesheet">

		<!-- Inclusion de Modernizr-->
		<script src="includes/js/modernizr-2.6.2.min.js"></script>

	</head>

	<body>

		<div class="container" id="main">

			<!--INCULSION DU MENU DE NAVIGATION "navbar.php"-->
			<?php include('includes/php/navbardyn.php') ?>

			<!--INCULSION DU CAROUSEL "carousel.php"-->
			<?php include('includes/php/carousel.php') ?>

			<!--INCULSION DU PARAGRAPHE "paragrapheaccueil.php"-->
			<?php include('includes/php/paragrapheaccueil.php') ?>

			<!--INCULSION DES FONCTIONNALITE "fonctionnaliteaccueil.php"-->
			<?php include('includes/php/fonctionnaliteaccueil.php') ?>

			<!--INCULSION DE + D'INFO "moreinfo.php"-->
			<?php include('includes/php/moreinfo.php') ?>

		</div>

		<!--INCULSION DU FOOTER "footer.php"-->
		<?php include('includes/php/footer.php') ?>

		<!-- JS -->

		<!--jQuery-->
		<script src="http://code.jquery.com/jquery.js"></script>

		<!--jQuery mode offline -->
		<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>

		<!-- Bootstrap JS -->
		<script src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Custom JS -->
		<script src="includes/js/script.js"></script>

	</body>

</html>
