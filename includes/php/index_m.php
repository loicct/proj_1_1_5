<?php
session_start ();
?>

<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8">

		<title>Open Music</title>
		<meta name="description" content="">

		<?php include('favicon.php') ?>

		<!-- Vue Mobile optimisé -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Bootstrap CSS -->
		<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/bootstrap-glyphicons.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="../css/styles.css" rel="stylesheet">

		<!-- Inclusion de Modernizr-->
		<script src="../js/modernizr-2.6.2.min.js"></script>

		<?php include('/includes/bdd/connexionmembres.php') ?>

	</head>

	<body>

		<div class="container" id="main">

			<!--INCULSION DU MENU DE NAVIGATION "navbar.php"-->
			<?php include('navbarlog.php') ?>

			<!--INCULSION DU CAROUSEL "carousel.php"-->
			<?php include('carousel.php') ?>

			<!--INCULSION DU PARAGRAPHE "paragrapheaccueil.php"-->
			<?php include('paragrapheaccueil.php') ?>

			<!--INCULSION DES FONCTIONNALITE "fonctionnaliteaccueil.php"-->
			<?php include('fonctionnaliteaccueil.php') ?>

			<!--INCULSION DE + D'INFO "moreinfo.php"-->
			<?php include('moreinfo.php') ?>

		</div>

		<!--INCULSION DU FOOTER "footer.php"-->
		<?php include('footer.php') ?>

		<!-- JS -->

		<!--jQuery-->
		<script src="http://code.jquery.com/jquery.js"></script>

		<!--jQuery mode offline -->
		<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>

		<!-- Bootstrap JS -->
		<script src="../../bootstrap/js/bootstrap.min.js"></script>

		<!-- Custom JS -->
		<script src="../js/script.js"></script>

	</body>

</html>
