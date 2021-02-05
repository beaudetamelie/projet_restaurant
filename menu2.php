<?php
session_start();

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
	<title>Autres menus à la carte</title>
	<link rel="stylesheet" type="text/css" href='style.css'"  />
</head>
<body>
	<h1>Tout les menus à la carte</h1><br/>
	<?php
	$requete100 = "SELECT DISTINCT nomMenu, prix_menu, nomPlat FROM menu, plat_menu, plat WHERE menu.id_menu= plat_menu.id_menu_menu AND  plat.id_plat = plat_menu.id_plat_menu ORDER BY nomMenu, FIELD (type,'entree', 'plat', 'dessert')";
	$req = $bdd->prepare($requete100);
	$req->execute();
	//on affiche le prix
       		
	while ($donnees = $req->fetch())
		{
			
			echo '<br/>'.$donnees['nomMenu'] .'<br/>';
			echo $donnees['prix_menu']. ' euros <br/>';
       		echo $donnees['nomPlat'].'<br/>';
			
		}
?>
<br/>
<br/>
<button class="bouton"><a href="index.php">Retour à l'accueil</a></button>
<button class="bouton"><a href="menu.php">Menus</a></button>
	<!--on saute une ligne-->
	<br/>
	<!--on saute une ligne-->
	<br/>
	<!--on saute une ligne-->
	<br/>
	<!--on fais un bouton pour aller a l'accueil-->
	
	<!--on fais un bouton pour aller a l'accueil-->
	<button class="bouton"><a href="plats.php">Accès aux plats individuels</a></button>
</body>
</html>