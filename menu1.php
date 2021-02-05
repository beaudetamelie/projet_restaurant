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
	<title>Menus à la carte</title>
	<link rel="stylesheet" type="text/css" href='style.css'"  />
</head>
<body>
	<h1>Menus à la carte</h1>
	
	<br/><p class="titre"><strong><i><?php
	$requeteI = "SELECT nomMenu FROM menu WHERE nomMenu = ?";
	$req = $bdd->prepare($requeteI);
	$req->execute(['Tradition']);
	while ($donnees = $req->fetch())
		{
			//on affiche le prix
       		echo $donnees['nomMenu'];
		}
		?></i></strong><br/>
	<?php
	$requete8 = ("SELECT prix_menu FROM menu WHERE nomMenu = ? ");
	$req = $bdd->prepare($requete8);
	$req->execute(['Tradition']);
	while ($donnees = $req->fetch())
		{	
	       echo $donnees['prix_menu'] . 'euros <br/><br/>';
		}
?>
</p><p class="requete">
<?php
	//afficher plats contenu menu Tradition
 	$requete9 = ("SELECT nomPlat FROM menu, plat_menu, plat WHERE menu.id_menu= plat_menu.id_menu_menu AND  plat.id_plat = plat_menu.id_plat_menu AND nomMenu = ?");
	$req = $bdd->prepare($requete9);
	$req->execute([ 'Tradition']);
	while ($donnees = $req->fetch())
		{
      		echo $donnees['nomPlat'] . '<br/>';
		}

?></p>
<br/>
<br/>
	<button class="bouton"><a href="menu.php">Menu précédent</a></button>
	<br/>
	<button class="bouton"><a href="menu2.php">Tout les menus</a></button>
	<br/>
	<br/>
<button class="bouton"><a href="index.php">Accès a l'accueil</a></button>
<button class="bouton"><a href="plats.php">Accès aux plats individuels</a></button>
</body>
</html>