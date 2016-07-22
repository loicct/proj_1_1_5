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

	</head>

	<body>

		<div class="container" id="main">

			<!--INCULSION DU MENU DE NAVIGATION "navbar.php"-->
			<?php include("navbar.php") ?>

			<!--INCULSION DU TEXTE DE VALIDATION D'INSCRIPTION "textvalidinscr.php"-->
			<?php include("textvalidinscr.php") ?>

			<!--INCULSION DES FONCTIONNALITE "fonctionnaliteaccueil.php"-->
			<?php include("fonctionnaliteaccueil.php") ?>

		</div>

		<!--INCULSION DU FOOTER "footer.php"-->
		<?php include("footer.php") ?>

		<!-- JS -->

		<!--jQuery-->
		<script src="http://code.jquery.com/jquery.js"></script>

		<!--jQuery mode offline -->
		<script>window.jQuery || document.write('<script src="../js/jquery-1.8.2.min.js"><\/script>')</script>

		<!-- Bootstrap JS -->
		<script src="../../bootstrap/js/bootstrap.min.js"></script>

		<!-- Custom JS -->
		<script src="../js/script.js"></script>

	</body>

</html>
