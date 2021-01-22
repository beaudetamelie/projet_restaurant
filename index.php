<?php
session_start();
require_once('DAO_menu.php');
require_once('DAO_plat.php');
require_once('DAO_allergene.php');
try{
       $bdd = new PDO('mysql:host=localhost;dbname=amelie_menurestaurant', 'amelie', 1234);
}
catch(Exception $e)
{
       die('Erreur : '.$e->getMessage());
}
  $requete2 = ("SELECT  nom, prix FROM plat ORDER BY type");
   	   $req = $bdd->prepare($requete2);
	   $req->execute(array());
while ($donnees = $req->fetch())
{
       echo $donnees['nom'] . ' ...........' . $donnees['prix'] . 'euros <br/>';
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>coucou</title>
</head>
<body>
	
<p>Entrées</p>

<p>Plats</p>
<p>Desserts</p>
<a href="menu.php">Accès aux menus</a>



</body>
</html>