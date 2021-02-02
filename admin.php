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
	<title>Administrateurs</title>
	<link rel="stylesheet" type="text/css" href='style.css'"  />
</head>
<body>
<h1>Partie Administration</h1>
	<p>Ajouter un plat</p>
	<form action="admin.php" method="post">
    <div>
        <label for="nomPlat">Nom du plat :</label>
        <input type="text" id="nomPlat" name="nomPlat">
    </div>
    <div>
        <label for="prixPlat">prix du plat :</label>
        <input type="text" id="prixPlat" name="prixPlat">
    </div>
    <div>
        <label for="vegetarien">Plat végétarien  (0/1) :</label>
        <input type="text" id="vegetarien" name="vegetarien">
    </div>
    <div>
        <label for="type">Type de plat (entree/plat/dessert) :</label>
        <input type="text" id="type" name="type">
    </div>
    <div>
    	 <label for="type"></label>
        <input type="submit" id="valider" name="valider">
     </div>
</form>
<?php
 if (isset ($_POST['valider'])){
$nomPlat = $_POST['nomPlat'];
$prixPlat = $_POST['prixPlat'];
$vegetarien = $_POST['vegetarien'];
$type = $_POST['type'];

//On prépare la commande sql d'insertion
$requete21 = "INSERT INTO plat (id_plat,nomPlat, prix, vegetarien, type) VALUES(?, ?, ?, ?, ?)";
$req = $bdd->prepare($requete21);
	   $req->execute([NULL, $nomPlat, $prixPlat,$vegetarien, $type]);
}
?>
<p>Supprimer un plat</p>
<form action="admin.php" method="post">
    <div>
        <label for="nomPlatSuppr">Nom du plat à supprimer :</label>
        <input type="text" id="nomPlatSuppr" name="nomPlatSuppr">
    </div>
    <div>
    	 <label for="type"></label>
        <input type="submit" id="ok" name="ok">
    </div>
    <?php
 if (isset ($_POST['ok'])){
$nomPlatSuppr = $_POST['nomPlatSuppr'];
$requete22 = "SELECT id_plat FROM plat WHERE nomPlat = ?";
$req = $bdd->prepare($requete22);
	   $req->execute(['$nomPlatSuppr']);
	   while ($donnees = $req->fetch())
{
       echo $donnees['id_plat'];
}
/*$requete21 = "DELETE FROM plat WHERE nomPlat = ? ";
$req = $bdd->prepare($requete21);
	   $req->execute(['$nomPlatSuppr']);*/
}
?>
</form>
</body>
</html>