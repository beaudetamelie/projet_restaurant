<?php 
session_start();

require_once('DAO_menu.php'); 
require_once('DAO_plat.php');
$demande_prix = new PDO('mysql:host=Localhost; dbname=amelie_menurestaurant;charset=utf8';'amelie', '1234');
$afficher = $demande_prix->query('SELECT prix FROM menu');
   
 echo $afficher;
?>


<!DOCTYPE html>
<html>
<head>
	<title>coucou</title>
</head>
<body>
<p>Entrées</p>
<? 
   
?>
<p>Plats</p>
<p>Desserts</p>




</body>
</html>