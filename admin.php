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
	<p><strong><i>Ajouter un plat</i></strong></p>
	<form action="admin.php" method="post">
		<!-- <div>
        <label for="IdPlat" class="form"></label>
        <input type="text" id="IdPlat" name="IdPlat" class="input">
    </div>-->
    <div>
        <label for="nomPlat" class="form">Nom du plat :</label>
        <input type="text" id="nomPlat" name="nomPlat" class="input">
    </div>
    <br/>
    <div>
        <label for="prixPlat" class="form">prix du plat :</label>
        <input type="text" id="prixPlat" name="prixPlat"class="input">
    </div>
    <br/>
    <div>
        <label for="vegetarien"class="form">Plat végétarien  (0/1) :</label>
        <input type="text" id="vegetarien" name="vegetarien" class="input">
    </div>
    
    <br/>
    <div>
        <label for="type"class="form">Type de plat (entree/plat/dessert) :</label>
        <input type="text" id="type" name="type" class="input">
    </div>
    <br/>
    <div>
        <label for="type"class="form">ID Allergène  (Oeuf = 4/Poisson = 3/Lait = 2/Arachide = 1) :</label>
        <input type="text" id="id_allergene" name="id_allergene" class="input">
    </div>
    <br/>
    <div>
    	 <label for="type"class="form"></label>
        <input type="submit" id="valider" name="valider" class="input">
     </div>
</form>
<?php
 if (isset ($_POST['valider'])){
$nomPlat = $_POST['nomPlat'];
$prixPlat = $_POST['prixPlat'];
$vegetarien = $_POST['vegetarien'];
$type = $_POST['type'];
$id_allergene = $_POST['id_allergene'];

//On prépare la commande sql d'insertion
$requete21 = "INSERT INTO plat (id_plat,nomPlat, prix, vegetarien, type) VALUES(?, ?, ?, ?, ?)";
$req = $bdd->prepare($requete21);
	   $req->execute([NULL, $nomPlat, $prixPlat,$vegetarien, $type]);



$requete24 = "INSERT INTO plat_allergene(id_plat, id_allergene) VALUES((SELECT id_plat FROM plat WHERE $nomPlat = nomPlat), ?)" ;
$req = $bdd->prepare($requete24);
	   $req->execute([$id_allergene]); 
}?>
<p><strong><i>Supprimer un plat</i></strong></p>
<form action="admin.php" method="post">
    <div>
        <label for="nomPlatSuppr">Nom du plat à supprimer :</label>
        <input type="text" id="nomPlatSuppr" name="nomPlatSuppr">
    </div>
    <br/>
    <div>
    	 <label for="type"></label>
        <input type="submit" id="ok" name="ok">
    </div>
    <?php
 if (isset ($_POST['ok'])){
$nomPlatSuppr = $_POST['nomPlatSuppr'];

$requete24 = "DELETE FROM plat WHERE nomPlat = ? ";
$req = $bdd->prepare($requete24);
	   $req->execute([$nomPlatSuppr]);
}
?>
<p><strong><i>Modifier un plat</i></strong></p>
<p>Vous souhaitez modifier le nom du plat</p>
<form action="admin.php" method="post">
    <div>
        <label for="nomPlatAModif">Nom du plat à modifier :</label>
        <input type="text" id="nomPlatAModif" name="nomPlatAModif">
    </div>
    <br/>
    <div>
        <label for="nomPlatModif">Nom du plat modifier :</label>
        <input type="text" id="nomPlatModif" name="nomPlatModif">
    </div>
    <br/>
    <div>
    	 <label for="type"></label>
        <input type="submit" id="okModif" name="okModif">
    </div>
<?php
if (isset ($_POST['okModif'])){
	$nomPlatModif = $_POST['nomPlatModif'];
	$nomPlatAModif = $_POST['nomPlatAModif'];
$requete23 = "UPDATE plat SET nomPlat = ? WHERE nomPlat = ? ";
$req = $bdd->prepare($requete23);
	   $req->execute([$nomPlatModif, $nomPlatAModif]);
}

?>
<p>Vous souhaitez modifier le prix du plat</p>
</form>
<button class="bouton"><a href="index.php">Accueil</a></button>
</body>
</html>