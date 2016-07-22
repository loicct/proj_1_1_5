<?php include("formucontact.php") ?>
<?php include("formconnex.php") ?>

<div class="navbar navbar-fixed-top">

  <div class="container">

    <button class="navbar-toggle"
    data-target=".navbar-responsive-collapse"
    data-toggle="collapse" type="button">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    <a class="navbar-brand" href="/index.php"><img src="/images/logo.png"
      alt="logo" /></a>

    <div class="nav-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="/index.php">Accueil</a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle"
          data-toggle="dropdown">Services
          <strong class="caret"></strong>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">Musiques</a></li>
            <li class="divider"></li>
            <!--<li class="dropdown-header">Autres</li>-->
            <li><a href="/includes/php/contact.php">Contact</a></li>

          </ul>
        </li>
      </ul>

      <form class="navbar-form pull-left">
        <input type="test" class="form-control"
        placeholder="Chercher sur le site..." id="searchInput">
        <button type="submit" class="btn btn-default">
          <span class="glyphicon glyphicon-search"></span>
        </button>
      </form>

      <ul class="nav navbar-nav pull-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicon glyphicon-user"></span>
            Espace Membre
          </a>
          <ul class="dropdown-menu">
            <li><a href="#myModalconnex" data-toggle="modal"><span class="glyphicon glyphicon-ok">
            </span>Connexion</a></li>
            <li class="divider"></li>
            </li>
            <li><a href="/includes/php/forminscrpage.php"><span class="glyphicon glyphicon-music">
            </span>Inscription</a></li>
          </ul>
        </li>
      </ul>

    </div>

  </div>

</div>
