<?php
  // Variable param�trage de la page
  $nomFicPhpCourant = explode("?",$_SERVER['REQUEST_URI']);
  $urlsource = $nomFicPhpCourant[0]; // Utilis� pour setlang.php
  $callbackUrl="http://".$_SERVER['HTTP_HOST'].$nomFicPhpCourant[0]."?mode=retour"; // Url de retour apr�s authentification sur HT
  //$file="home"; // Nom du fichier pour include
  
  include("init.php");
  
	switch($_SESSION['lang']) {
		case "fr" :
		$contenu = "Ce programme utilise des informations provenant du service du jeu en ligne hattrick.org.<br>";
		$contenu .= "Cette utilisation a &eacute;t&eacute; approuv&eacute;e par les d&eacute;veloppeurs et d&eacute;tenteurs des droits de hattrick.org, Extralives AB.";
		break;
		case "de" :
		$contenu = "Dieses Programm benutzt Informationen, die aus dem Provider des online Spieles hattrick.org stammen.<br>";
		$contenu .= "Diese Benutzung wurde von den Entwicklern und Inhabern der Rechte von hattrick.org, Extralives AB, gen&auml;hmigt.";
		break;
		case "es" :
		$contenu = "Esta aplicaci&oacute;n usa informaciones del juego en l�nea Hattrick.org.<br>";
		$contenu .= "El uso de datos est& aprobado por los desarrolladores y los propietarios de derechos intelectuales de Hattrick.org, Extralives AB.";
		break;
		case "it" :
		$contenu = "Questa applicazione utilizza le informazioni del servizio di giochi online hattrick.org.<br>";
		$contenu .= "Questo uso &egrave; stato approvato dagli sviluppatori e dai proprietari dei diritti d\'autore di Hattrick.org, Extralives AB.";
		break;
		case "sv" :
		$contenu = "Denna applikation anv&auml;nder information fr&aring;n onlinespelplattformen hattrick.org.<br>";
		$contenu .= "Detta har godk&auml;nts av utvecklarna och &auml;garna av Hattrick.org, Extralives AB.";
		break;
		default :
		$contenu = "This application uses information from the online game service hattrick.org. <br>";
		$contenu .= "This use has been approved by the developers and copyright owners of hattrick.org, Extralives AB.";
		break;
	}?>
  <div id="contenu">
  	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  		<tr>
		    <td width="5" rowspan="10" valign="top">&nbsp;</td>
		    <td rowspan="10" valign="top"><p align="center" class="style40">&nbsp;</p>
          <p align="center" class="style40"><a href="http://www.extralives.com/" target="_new"><img src="img/logo_CHPP.gif" width="120" height="60" border="0"></a></p>
			    <p align="center" class="style40"><?php echo($contenu); ?></p></td>
    		<td width="5" rowspan="10" valign="top"> <p align="justify">&nbsp;</p></td>
		 </tr>
  	</table>
  </div>
<?php
	include("menu_bas.php");
?>