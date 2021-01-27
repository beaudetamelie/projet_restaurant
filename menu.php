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
	<title></title>
</head>
<body>
<?php
//afficher nom et prix menu terroir
	$requete7 = ("SELECT nom, prix FROM menu WHERE nom = 'Terroir'");
	$req = $bdd->prepare($requete7);
	$req->execute(array());
	while ($donnees = $req->fetch())
		{
       		echo $donnees['nom'] . ' ...........' . $donnees['prix'] . 'euros <br/>';
		}

//afficher plat menu terroir
 	$requete3 = ("SELECT 'plat.nom' FROM menu INNER JOIN plat_menu ON 'menu.id_menu'= 'plat_menu.id_menu' INNER JOIN plat ON 'plat.id_plat' = 'plat_menu.id_plat' WHERE 'menu.nom' = 'Terroir'");
	$req = $bdd->prepare($requete3);
	$req->execute(array());
	while ($donnees = $req->fetch())
		{
      		echo $donnees['plat.nom'] . 'euros <br/>';
		}
	echo 'coucou';
	
//affiche nom et prix menu tradition
	?>
	<br/>
	<?php
	$requete8 = ("SELECT nom, prix FROM menu WHERE nom = 'Tradition'");
	$req = $bdd->prepare($requete8);
	$req->execute(array());
	while ($donnees = $req->fetch())
		{	
	       echo $donnees['nom'] . ' ...........' . $donnees['prix'] . 'euros <br/>';
		}


 	$requete9 = ("SELECT 'plat.nom' FROM menu INNER JOIN plat_menu ON 'menu.id'= 'plat_menu.id_menu' INNER JOIN plat ON 'plat.id' = 'plat_menu.id_plat' WHERE 'menu.nom' = 'Terroir'");
	$req = $bdd->prepare($requete9);
	$req->execute(array());
	while ($donnees = $req->fetch())
		{
      		echo $donnees['plat.nom'] . 'euros <br/>';
		}
	echo 'coucou';
?>
	<br/>
<a href="index.php">Accès aux plats individuels</a>
</body>
</html>