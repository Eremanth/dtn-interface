<?php
// Variable param�trage de la page
$nomFicPhpCourant = explode("?",$_SERVER['REQUEST_URI']);
$urlsource = $nomFicPhpCourant[0]; // Utilis� pour setlang.php
$callbackUrl="http://".$_SERVER['HTTP_HOST'].$nomFicPhpCourant[0]."?mode=retour"; // Url de retour apr�s authentification sur HT
//$file="faq"; // Nom du fichier pour include

include("init.php");
include("faq.php");
include("menu_bas.php");
?>