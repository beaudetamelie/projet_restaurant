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


?>


<!DOCTYPE html>
<html>
<head>
	<title>Plats restaurant</title>
	  <link rel="stylesheet" type="text/css" href='style.css'"  />
</head>
<body>
	<h1>Plats à la carte</h1>
<p><strong><i>Entrées</i></strong></p>
<?php $requete4 = ('SELECT  nomPlat, prix, nomAllergene FROM plat, plat_allergene, allergene WHERE   plat_allergene.id_plat = plat.id_plat AND plat_allergene.id_allergene = allergene.id_allergene AND type = ?');
   	   $req = $bdd->prepare($requete4);
	   $req->execute(['entree']);
while ($donnees = $req->fetch())
{
       echo $donnees['nomPlat'] . ' ...........<b>' . $donnees['prix'] . ' euros</b><br/><i>Allergene contenu : '.$donnees['nomAllergene']. '</i><br/>';
}
?>
<p><strong><i>Plats</i></strong></p>
<?php
$requete5 = ('SELECT  nomPlat, prix, nomAllergene FROM plat, plat_allergene, allergene WHERE   plat_allergene.id_plat = plat.id_plat AND plat_allergene.id_allergene = allergene.id_allergene AND type = ?');
   	   $req = $bdd->prepare($requete5);
	   $req->execute(['plat']);
while ($donnees = $req->fetch())
{
       echo $donnees['nomPlat'] . ' ...........<b>' . $donnees['prix'] . ' euros</b><br/><i>Allergene contenu : '.$donnees['nomAllergene']. '</i><br/>';
}
?>
<p><strong><i>Desserts</i></strong></p>
<?php  $requete6 = ('SELECT  nomPlat, prix, nomAllergene FROM plat, plat_allergene, allergene WHERE   plat_allergene.id_plat = plat.id_plat AND plat_allergene.id_allergene = allergene.id_allergene AND type = ?');
   	   $req = $bdd->prepare($requete6);
	   $req->execute(['dessert']);
while ($donnees = $req->fetch())
{
       echo $donnees['nomPlat'] . ' ...........<b>' . $donnees['prix'] . ' euros</b><br/><i>Allergene contenu : '.$donnees['nomAllergene']. '</i><br/>';
}
?>
<p><strong><i>Plats végérariens</i></strong></p>
<?php  $requete10 = ('SELECT  nomPlat, prix, nomAllergene FROM plat, plat_allergene, allergene WHERE   plat_allergene.id_plat = plat.id_plat AND plat_allergene.id_allergene = allergene.id_allergene AND vegetarien = ?');
   	   $req = $bdd->prepare($requete10);
	   $req->execute(['1']);
while ($donnees = $req->fetch())
{
       echo $donnees['nomPlat'] . ' ...........<b>' . $donnees['prix'] . ' euros</b><br/><i>Allergene contenu : '.$donnees['nomAllergene']. '</i><br/>';
}
?>
<br/>
<button class="bouton"><a href=index.php>Accueil</a></button>
<button class="bouton"><a href="menu.php">Menus</a></button>



</body>
</html>