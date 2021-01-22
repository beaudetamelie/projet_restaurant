
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

$requete3 = ("SELECT nom, FROM menu JOIN plat ON 'menu.nom_menu' = 'plat.menu'");
$req = $bdd->prepare($requete3);
$req->execute(array());
while ($donnees1 = $req->fetch())
{
       echo $donnees1['nom'] . 'euros <br/>';
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>