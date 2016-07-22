<?php
include_once "config.php";
//print $DBASE;
//connexion à la bdd en php 5 ou PHP 7
//print "Debut test conn ok<br>\n";
if ($ModePHP==5) {
  include "connexion_5.php";
} else {
//print "en conn 7<br>\n";
  include "connexion_7.php";
}

//include_once 'inscriptionmembres.php';
define('PREFIX_SALT', 'YoLo');
define('SUFFIX_SALT', 'ZzbRra');

$hashpass = sha1(PREFIX_SALT.$_POST['sPass'].SUFFIX_SALT);

$req_co ="select id, nom, prenom, login, pass, email from membres where login='".$_POST['sLogin']."' and pass='".$hashpass."'";

if ($result = mysqli_query($db, $req_co)) {
  $num_rows = mysqli_num_rows($result);
}

if ($num_rows<=0) {//Le select fonctionne mais personne n'a été trouvée, donc login ou motde passe inexsitant !
  //print "bad";
  print "Connexion invalide";
  header("refresh:2;url=../../index.php"); //si la personne n'existe pas dans la BDD, la page affiche le print et renvoie a l'index
}

else {
  //print "good";
  print "Bienvenue ".$_POST['sLogin']." !" ;
  while($rows=mysqli_fetch_assoc($result)) {
    session_start ();
    //$_SESSION['login'] = $_GET['login'];
    $hachage = sha1($rows['id']);
    //$URL_NEWS = "/index.php?".$hachage;
    header("location:/index.php?id=".$hachage);
  }

}


?>
