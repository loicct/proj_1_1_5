<?php

include_once 'config.php';

//connexion à la bdd en php 5 ou PHP 7

if ($ModePHP == 5) {
  include 'connexion_5.php';
} else {
    //print "en conn 7<br>\n";
  include 'connexion_7.php';
}
//echo "test1 ";
$login = $_POST['slogin'];
$email = $_POST['semail'];
//echo "test2 : ".$login;
$req1="SELECT login FROM membres WHERE login='$login'";
$req2="SELECT login FROM membres WHERE email='$email'";
$veriflogin = mysqli_query($db,$req1);
$verifemail = mysqli_query($db,$req2);
//print $req1;
$count = mysqli_num_rows($veriflogin);
//echo "test3 : ".$count;


if (mysqli_num_rows($veriflogin) != 0)
{
  echo 'ce login existe deja';
}

elseif (mysqli_num_rows($verifemail) != 0)
{
  echo 'cette email existe deja';
}

else {
  define('PREFIX_SALT', 'YoLo');
  define('SUFFIX_SALT', 'ZzbRra');
  $passhash = sha1(PREFIX_SALT.$_POST['spass'].SUFFIX_SALT);
  $req = "insert into membres (nom, prenom, login, pass, email) VALUES ('".$_POST['snom']."','".$_POST['sprenom']."','".$_POST['slogin']."','".$passhash."','".$_POST['semail']."')";
  if ($result = mysqli_query($db, $req)) {
    //Libération du jeu de résultats
    mysqli_free_result($result);
    include "JS_PHP_ENRG_OK.php";
    //echo "test4 ";
  }
}
