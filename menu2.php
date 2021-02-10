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
	<link rel="stylesheet" type="text/css" href='style.css'  />
</head>
<body>
	<h1>Tous les menus à la carte</h1><br/>
	
	<?php
	$requeteNP = "SELECT id_menu,nomMenu, prix_menu FROM menu";
	$reqNP = $bdd->prepare($requeteNP);
	$reqNP->execute();

		while ($donneesNP = $reqNP->fetch())
		{
			echo '<br/>'.$donneesNP['nomMenu'] .'<br/>';
			echo $donneesNP['prix_menu']. ' euros <br/>';


			$requeteM = "SELECT  nomPlat FROM menu, plat_menu, plat WHERE menu.id_menu= plat_menu.id_menu_menu AND  plat.id_plat = plat_menu.id_plat_menu AND id_menu = ? GROUP BY nomPlat, nomMenu ORDER BY nomMenu";
			$reqM = $bdd->prepare($requeteM);
			$reqM->execute([$donneesNP['id_menu']]);
			while ($donneesM = $reqM->fetch()){
				echo $donneesM['nomPlat'].'<br/>';
			}
       		
	}		
	
?>	
<br/>
<br/>
<button class="bouton"><a href="index.php">Retour à l'accueil</a></button>
<button class="bouton"><a href="plats.php">Accès aux plats individuels</a></button>
	<!--on saute une ligne-->
	<br/>
	<!--on saute une ligne-->
	<br/>
	<!--on saute une ligne-->
	<br/>
	<!--on fais un bouton pour aller a l'accueil-->
	
	<!--on fais un bouton pour aller a l'accueil-->
	
</body>
</html>