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




$req="select id, nom, prenom, login, pass, email from membres";
$req="select * from membres";
print $req."<br />";

if ($result = mysqli_query($db, $req)) {

  while($rows=mysqli_fetch_assoc($result)) {

    print $rows['nom']." ". $rows['prenom']." Id = ".$rows['id']."<br />";
    $URL_NEWS = "test_url.php?id=".$rows['id']."&nom=".$rows['nom'];
    header('location:'.$URL_NEWS);

    }



  mysqli_free_result($result);

}
