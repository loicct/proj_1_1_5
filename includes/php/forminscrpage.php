<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8">

		<title>Nom du site</title>
		<meta name="description" content="">

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

    <script src="/includes/js/confmdp.js"></script>

    <div class="container">
      <h2>Horizontal form</h2>
      <form class="form-horizontal" role="form" action="../bdd/inscriptionmembres.php"
        method="post" onsubmit="return verify(this.snom, this.sprenom, this.slogin, this.semail, this.spass, this.sverifpass)">

        <div class="form-group">
          <label class="col-lg-2 control-label" for="inputName">Nom</label>
          <div class="col-lg-10">
            <input class="form-control" id="inputName" placeholder="Nom"
            name="snom" type="text">
          </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="inputFirstname">Prénom</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputFirstname" placeholder="Prénom"
              name="sprenom" type="text">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label" for="inputPseudo">Identifiant</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputPseudo" placeholder="Pseudo"
              name="slogin" type="text">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label" for="inputEmail">Email</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputEmail" placeholder="Email"
              name="semail" type="email">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label" for="inputPass">Mot de Passe</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputPass" placeholder="Mot de Passe"
              name="spass" type="password">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label" for="inputPassconf">
            Confirmation du Mot de Passe
            </label>
            <div class="col-lg-10">
              <input class="form-control" id="inputPassconf" name="sverifpass"
              placeholder="Mot de Passe" type="password">
            </div>
          </div>



          <button class="btn btn-success pull-right" type="submit" id="confirminscr">
            Inscription
          </button><br>

        </form>


      <?php include('navbar.php') ?>

      <?php include('fonctionnaliteaccueil.php') ?>

		</div>

		<!--INCULSION DU FOOTER "footer.php"-->
		<?php include('footer.php') ?>

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
