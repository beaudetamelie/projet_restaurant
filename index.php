<?php 
session_start();

require_once('DAO_menu.php'); 
require_once('DAO_plat.php');
$demande_prix = new DAO_menu('Localhost', 'amelie_menurestaurant', 'amelie', 1234);
$demande_prix->affiche_prix();
   
 
?>


<!DOCTYPE html>
<html>
<head>
	<title>coucou</title>
</head>
<body>
<p>coucou</p>



</body>
</html>