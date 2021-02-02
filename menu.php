<?php
session_start();


try
       {
       	//connexion a la base
              $bdd = new PDO('mysql:host=localhost;dbname=menu_restaurant', 'root', '');
       }

              catch (Exception $e)
       {
       		//si ça marche pas cela fais une erreur
              die('Erreur : ' . $e->getMessage());
       }
?>

<!DOCTYPE html>
<html>
<head>
	<!--titre de l'onglet-->
	<title>Menus à la carte</title>
	<link rel="stylesheet" type="text/css" href='style.css'"  />
</head>
<body>
	<!--titre de la page-->
	<h1>Menus à la carte</h1>
	<!--titre du menu-->
	<p class="titre"><strong><i>Menu Terroir</i></strong><br/>
<?php
	//afficher prix menu terroir
	$requete7 = ("SELECT prix FROM menu WHERE nomMenu = ?");
	//on prepare la requete dans $req
	$req = $bdd->prepare($requete7);
	//on l'execute
	$req->execute(['Terroir']);
	//tant que la requete est trouvé
	while ($donnees = $req->fetch())
		{
			//on affiche le prix
       		echo $donnees['prix'] . 'euros <br/><br/>';
		}?></p><p class="requete">
<?php
	//afficher plat menu terroir
 	$requete3 = ("SELECT nomPlat FROM menu, plat_menu, plat WHERE menu.id_menu= plat_menu.id_menu AND  plat.id_plat = plat_menu.id_plat AND nomMenu = ?");
 	//on prepare la requete dans $req
	$req = $bdd->prepare($requete3);
	//on l'execute
	$req->execute([ 'Terroir']);
	//tant que la requete est trouvé
	while ($donnees = $req->fetch())
		{
			//on affiche le(s) nom(s) du menu
      		echo $donnees['nomPlat'] . '<br/>';
		}
	

//affiche prix menu tradition
	?></p>
	<!--on saute une ligne-->
	<br/>
	<!--on saute une ligne-->
	<br/>
	<!--on fais un bouton pour aller au menu suivant-->
	<button class="bouton"><a href="menu1.php">Menu suivant</a></button>
	<!--on saute une ligne-->
	<br/>
	<!--on saute une ligne-->
	<br/>
	<!--on saute une ligne-->
	<br/>
	<!--on fais un bouton pour aller a l'accueil-->
	<button class="bouton"><a href="index.php">Accès a l'accueil</a></button>
	<!--on fais un bouton pour aller a l'accueil-->
	<button class="bouton"><a href="plats.php">Accès aux plats individuels</a></button>
<!--on ferme le body-->
</body>
<!--on ferme le html-->	
</html>