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


//requete affiche prix des entrée


?>

<!DOCTYPE html>
<html>
<head>
	<title>Menus à la carte</title>
	<link rel="stylesheet" type="text/css" href='style.css'"  />
</head>
<body>
	<h1>Menus à la carte</h1>
	<p class="titre"><strong><i>Menu Terroir</i></strong><br/>
<?php
//afficher prix menu terroir
	$requete7 = ("SELECT prix FROM menu WHERE nomMenu = ?");
	$req = $bdd->prepare($requete7);
	$req->execute(['Terroir']);
	while ($donnees = $req->fetch())
		{
       		echo $donnees['prix'] . 'euros <br/><br/>';
		}?></p><p class="requete">
<?php
//afficher plat menu terroir
 	$requete3 = ("SELECT nomPlat FROM menu, plat_menu, plat WHERE menu.id_menu= plat_menu.id_menu AND  plat.id_plat = plat_menu.id_plat AND nomMenu = ?");
	$req = $bdd->prepare($requete3);
	$req->execute([ 'Terroir']);
	while ($donnees = $req->fetch())
		{
      		echo $donnees['nomPlat'] . '<br/>';
		}
	

//affiche prix menu tradition
	?></p>
	<br/>
	<br/>
	<button class="bouton"><a href="menu1.php">Menu suivant</a></button>
	<br/>
	<br/>
	<br/>
<button class="bouton"><a href="index.php">Accès a l'accueil</a></button>
<button class="bouton"><a href="plats.php">Accès aux plats individuels</a></button>
</body>
</html>