<?php

echo ("<script language='JavaScript' type='text/javascript'>");
echo ('alert("Enregistrement OK !");');
echo ('history.back(-2)');
//echo "window.location.replace(".chr(39).$URL_NEW.chr(39).");";//Je peux agir sur l'URL....
echo ("</script>");
header('Location: /includes/php/validinscr.php');
?>
