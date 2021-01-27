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


?>


<!DOCTYPE html>
<html>
<head>
	<title>coucou</title>
</head>
<body>
	
<p><strong><i>Entrées</i></strong></p>
<?php  $requete4 = ("SELECT  nom, prix FROM plat WHERE type = 'entree'");
   	   $req = $bdd->prepare($requete4);
	   $req->execute(array());
while ($donnees = $req->fetch())
{
       echo $donnees['nom'] . ' ...........' . $donnees['prix'] . 'euros <br/>';
}
?>
<p><strong><i>Plats</i></strong></p>
<?php  $requete5 = ("SELECT  nom, prix FROM plat WHERE type = 'plat'");
   	   $req = $bdd->prepare($requete5);
	   $req->execute(array());
while ($donnees = $req->fetch())
{
       echo $donnees['nom'] . ' ...........' . $donnees['prix'] . 'euros <br/>';
}
?>
<p><strong><i>Desserts</i></strong></p>
<?php  $requete6 = ("SELECT  nom, prix FROM plat WHERE type = 'dessert'");
   	   $req = $bdd->prepare($requete6);
	   $req->execute(array());
while ($donnees = $req->fetch())
{
       echo $donnees['nom'] . ' ...........' . $donnees['prix'] . 'euros <br/>';
}

?>
<p><strong><i>Plats végérariens</i></strong></p>
<?php
$requete10 = ("SELECT  nom, prix FROM plat WHERE vegetarien = '1'");
   	   $req = $bdd->prepare($requete10);
	   $req->execute(array());
while ($donnees = $req->fetch())
{
       echo $donnees['nom'] . ' ...........' . $donnees['prix'] . 'euros <br/>';
}
?>
<br/>
<a href="menu.php">Accès aux menus</a>



</body>
</html>