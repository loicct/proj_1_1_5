<?php

include_once 'config.php';

//connexion à la bdd en php 5 ou PHP 7
//print "Debut test conn ok<br>\n";
if ($ModePHP == 5) {
  include 'connexion_5.php';
} else {
    //print "en conn 7<br>\n";
  include 'connexion_7.php';
}


//********************* Je peux faire un INSERT INTO pépère ! ******************
//if ($_POST['snom']!=null) && ( $_POST['sprenom']!=empty ) && ($_POST['snom']!=empty) && ( $_POST['sprenom']!=null ) {
//if ($_POST['snom'] != null && !empty($_POST['sprenom'])) {
    $req = "insert into membres (nom, prenom, login, pass, email)  VALUES ('".$_POST['snom']."','".$_POST['sprenom']."',  '".$_POST['slogin']."','".$_POST['spass']."','".$_POST['semail']."')";
    print $req;

    if ($result = mysqli_query($db, $req)) {
        /* Libération du jeu de résultats */
      mysqli_free_result($result);
    //include "JS_PHP_ENRG_OK.php";//Je confirme l'enregistrement
    }
//}
