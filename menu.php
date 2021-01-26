<?php
session_start();
require_once('DAO_menu.php');
require_once('DAO_plat.php');
require_once('DAO_allergene.php');
try
       {
              $bdd = new PDO('mysql:host=localhost;dbname=menu_restaurant', 'root', '');
       }
              catch (Exception $e)
       {
              die('Erreur : ' . $e->getMessage());
       }
  




//requete affiche prix + nom menu
/*$requete7 = ('SELECT nom_menu, prix FROM menu');
$req = $bdd->prepare($requete7);
$req->execute(array());
while ($donnees = $req->fetch())
{
       echo $donnees['nom_menu'] . ' ...........' . $donnees['prix'] . 'euros <br/>';
}
*/
//requete affiche prix des entrée

$requete3 = ("SELECT 'menu_nom' FROM menu, plat WHERE 'menu.nom_menu' = 'plat.menu'");
$req = $bdd->prepare($requete3);
$req->execute(array());
while ($donnees = $req->fetch())
{
       echo $donnees['nom'] . 'euros <br/>';
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="index.php">Accès aux plats individuels</a>
</body>
</html>