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

//requete affiche prix + nom menu
$requete1 = ('SELECT nom_menu, prix FROM menu');
$req = $bdd->prepare($requete1);
$req->execute(array());
while ($donnees = $req->fetch())
{
       echo $donnees['nom_menu'] . ' ...........' . $donnees['prix'] . 'euros <br/>';
}

//requete affiche prix des entrée



?>


<!DOCTYPE html>
<html>
<head>
	<title>coucou</title>
</head>
<body>
	<?php
	   $requete2 = ("SELECT nom, prix FROM plat WHERE type = entrée");
   	   $req = $bdd->prepare($requete2);
	   $req->execute(array());
while ($donnees = $req->fetch())
{
       echo $donnees['nom'] . ' ...........' . $donnees['prix'] . 'euros <br/>';
}
	?>
<p>Entrées</p>

<p>Plats</p>
<p>Desserts</p>




</body>
</html>