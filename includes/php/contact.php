<?php
session_start();
?>

<!doctype html>

<html>

<head>
  <meta charset="utf-8">

  <title>Open Music</title>
  <meta name="description" content="">

  <?php include('favicon.php') ?>

  <!-- Vue Mobile optimisé -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!-- Bootstrap CSS -->
  <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/includes/css/bootstrap-glyphicons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="/includes/css/styles.css" rel="stylesheet">

  <!-- Inclusion de Modernizr-->
  <script src="/includes/js/modernizr-2.6.2.min.js"></script>

  <?php include('/includes/bdd/connexionmembres.php') ?>

</head>

<body style="padding:80px 0 0 0">



  <div class="container" id="formcont">
    <div class="row">
      <div class="col-md-12">
        <hr>
        <div class="col-md-12"><b>CONTACTEZ-NOUS !</b></div>
        <hr>
      </div>
    </div>
  </div>
      <!-- CONTENT -->
  <div class="container">

    <?php if(array_key_exists('errors',$_SESSION)): ?>
    <div class="col-md-4" id="sendechec">
      <?= implode('<br>', $_SESSION['errors']); ?>
    </div>
    <?php endif; ?>
    <?php if(array_key_exists('success',$_SESSION)): ?>
    <div class="col-md-4" id="sendsucces">
      <h4><strong>Félicitation ! </strong> Votre message à bien été transmis.</h4>
    </div>

    <?php endif; ?>
    <form action="send_form.php" method="post" id="formcont">

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="inputname">Votre nom</label>
            <input required type="text" name="name" placeholder="Nom" class="form-control" id="inputname" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">
          </div><!--/*.form-group-->
        </div><!--/*.col-md-6-->

        <div class="col-md-6">
          <div class="form-group">
            <label for="inputemail">Votre email</label>
            <input required type="email" name="email" placeholder="E-mail" class="form-control" id="inputemail" value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">
          </div><!--/*.form-group-->
        </div><!--/*.col-md-6-->

        <div class="col-md-6">
          <div class="form-group">
          <label for="inputsubject">Sujet</label>
          <input type="text" name="subject" placeholder="Le sujet du message..." class="form-control" id="inputsubject" value="<?php echo isset($_SESSION['inputs']['subject'])? $_SESSION['inputs']['subject'] : ''; ?>">
          </div><!--/*.form-group-->
        </div><!--/*.col-md-6-->

        <div class="col-md-12">
          <div class="form-group">
            <label for="inputmessage">Votre message</label>
            <textarea required id="inputmessage" name="message" placeholder="Votre message..." class="form-control"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
          </div><!--/*.form-group-->
        </div><!--/*.col-md-12-->

        <div class="col-md-12">
          <div class="checkbox">
            <label for="checkspam">
              <input type="checkbox" name="antispam" id="hp">
            </label>
          </div>
        </div><!--/*.col-md-12-->

        <div class="col-md-12">
          <button type='submit' class='btn btn-primary'>Envoyer</button>
        </div><!--/*.col-md-12-->
      </div><!--/*.row-->

    </form>

    <?php include('navbar.php') ?>
    <?php include('fonctionnaliteaccueil.php') ?>

  </div><!--/*.container-->
    <!-- END CONTENT -->

  <?php include('footer.php') ?>

  <!--jQuery-->
  <script src="http://code.jquery.com/jquery.js"></script>

  <!--jQuery mode offline -->
  <script>window.jQuery || document.write('<script src="/includes/js/jquery-1.8.2.min.js"><\/script>')</script>

  <!-- Bootstrap JS -->
  <script src="/bootstrap/js/bootstrap.min.js"></script>

  <!-- Custom JS -->
  <script src="/includes/js/script.js"></script>

</body>

</html>

<?php

  unset($_SESSION['inputs']); // on nettoie les données précédentes
  unset($_SESSION['success']);
  unset($_SESSION['errors']);
