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
	<title>coucou</title>
</head>
<body>
	
<p><strong><i>Entrées</i></strong></p>
<?php  $requete4 = ("SELECT  'plat.nom', prix FROM plat INNER JOIN plat_allergene ON  'plat_allergene.id_plat' = 'plat.id_plat' INNER JOIN  allergene ON 'plat_allergene.id_allergene' = 'allergene.id_allergene' WHERE type = 'entree'");
   	   $req = $bdd->prepare($requete4);
	   $req->execute(array());
while ($donnees = $req->fetch())
{
       echo $donnees['plat.nom'] . ' ...........' . $donnees['prix'] . 'euros'.$donnees['allergene.nom']. '<br/>';
}
?>

<br/>
<a href="menu.php">Accès aux menus</a>



</body>
</html>