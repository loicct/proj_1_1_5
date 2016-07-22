<?php

try {
  $db = new PDO('mysql:host=localhost;dbname=sitemusiques;charset=utf8',
  'root', 'apzoeiru');
  print "connexion ok";
}
catch (Exception $e) {
  die('Erreur : '.$e->getMessage());
}
print "test1";

$reponse = $bdd->query('SELECT * FROM membres');

print "test2";

while ($donnees = $reponse->fetch()) {
  print "test3";
?>
  <p>
    <strong>NOM</strong> : <?php echo $donnees['nom']; ?>
  </p>
<?php
}

$reponse->closeCursor();
?>
