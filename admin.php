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
    <link rel="stylesheet" type="text/css" href='style1.css'"  />
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
        <input type="text" id="nomPlat" name="nomPlat" >
    </div>
    <br/>
    <div>
        <label for="prixPlat" class="form">prix du plat :</label>
        <input type="text" id="prixPlat" name="prixPlat">
    </div>
    <br/>
    <div>
        <label for="vegetarien"class="form">Plat végétarien  (0/1) :</label>
        <input type="text" id="vegetarien" name="vegetarien" >
    </div>
    
    <br/>
    <div>
        <label for="type"class="form">Type de plat (entree/plat/dessert) :</label>
        <input type="text" id="type" name="type" >
    </div>
    <br/> 
    <div>
    <INPUT type="checkbox" name="nomAllergene" value="1"> <?php $requete200 = "SELECT id_allergene, nomAllergene FROM allergene WHERE nomAllergene = ?";
    $req = $bdd->prepare($requete200);
     $req->execute(['Arachide']);
     while ($donnees = $req->fetch())
    {
       echo $donnees['nomAllergene'] ;
   }
       ?>
    <INPUT type="checkbox" name="nomAllergene" value="2"> <?php $requete201 = "SELECT id_allergene, nomAllergene FROM allergene WHERE nomAllergene = ?";
    $req = $bdd->prepare($requete201);
     $req->execute(['Lait']);
     while ($donnees = $req->fetch())
    {
       echo $donnees['nomAllergene'] ;
   }?>
    <INPUT type="checkbox" name="nomAllergene" value="3"> <?php $requete202 = "SELECT id_allergene, nomAllergene FROM allergene WHERE nomAllergene = ?";
    $req = $bdd->prepare($requete202);
     $req->execute(['Poisson']);
     while ($donnees = $req->fetch())
    {
       echo $donnees['nomAllergene'] ;
   }?>
    <INPUT type="checkbox" name="nomAllergene" value="4"> <?php $requete203 = "SELECT id_allergene, nomAllergene FROM allergene WHERE nomAllergene = ?";
    $req = $bdd->prepare($requete203);
     $req->execute(['Œuf']);
     while ($donnees = $req->fetch())
    {
       echo $donnees['nomAllergene'] ;
   }?>
    <INPUT type="checkbox" name="nomAllergene" value="5"> <?php $requete204 = "SELECT id_allergene, nomAllergene FROM allergene WHERE nomAllergene = ?";
    $req = $bdd->prepare($requete204);
     $req->execute(['Tomates']);
     while ($donnees = $req->fetch())
    {
       echo $donnees['nomAllergene'] ;
   }?>
    <INPUT type="checkbox" name="nomAllergene" value="6"> <?php $requete205 = "SELECT id_allergene, nomAllergene FROM allergene WHERE nomAllergene = ?";
    $req = $bdd->prepare($requete205);
     $req->execute(['Crustacés']);
     while ($donnees = $req->fetch())
    {
       echo $donnees['nomAllergene'] ;
   }?>
    <INPUT type="checkbox" name="nomAllergene" value="7"><?php $requete206 = "SELECT id_allergene, nomAllergene FROM allergene WHERE nomAllergene = ?";
    $req = $bdd->prepare($requete206);
     $req->execute(['Blé']);
     while ($donnees = $req->fetch())
    {
       echo $donnees['nomAllergene'] ;
   }?>
    <INPUT type="checkbox" name="nomAllergene" value="8"> <?php $requete207 = "SELECT id_allergene, nomAllergene FROM allergene WHERE nomAllergene = ?";
    $req = $bdd->prepare($requete207);
     $req->execute(['Légumineuses']);
     while ($donnees = $req->fetch())
    {
       echo $donnees['nomAllergene'] ;
   }?>
    <INPUT type="checkbox" name="nomAllergene" value="9"> <?php $requete208 = "SELECT id_allergene, nomAllergene FROM allergene WHERE nomAllergene = ?";
    $req = $bdd->prepare($requete208);
     $req->execute(['Banane']);
     while ($donnees = $req->fetch())
    {
       echo $donnees['nomAllergene'] ;
   }?>
    <INPUT type="checkbox" name="nomAllergene" value="10"> <?php $requete209 = "SELECT id_allergene, nomAllergene FROM allergene WHERE nomAllergene = ?";
    $req = $bdd->prepare($requete209);
     $req->execute(['Kiwi']);
     while ($donnees = $req->fetch())
    {
       echo $donnees['nomAllergene'] ;
   }?>
    <INPUT type="checkbox" name="nomAllergene" value="11"> <?php $requete210 = "SELECT id_allergene, nomAllergene FROM allergene WHERE nomAllergene = ?";
    $req = $bdd->prepare($requete210);
     $req->execute(['Pommes de terre']);
     while ($donnees = $req->fetch())
    {
       echo $donnees['nomAllergene'] ;
   }?>
    <INPUT type="checkbox" name="nomAllergene" value="12"> <?php $requete211 = "SELECT id_allergene, nomAllergene FROM allergene WHERE nomAllergene = ?";
    $req = $bdd->prepare($requete211);
     $req->execute(['Boeuf']);
     while ($donnees = $req->fetch())
    {
       echo $donnees['nomAllergene'] ;
   }?>
    <INPUT type="checkbox" name="nomAllergene" value="13"> <?php $requete212 = "SELECT id_allergene, nomAllergene FROM allergene WHERE nomAllergene = ?";
    $req = $bdd->prepare($requete212);
     $req->execute(['Mangue']);
     while ($donnees = $req->fetch())
    {
       echo $donnees['nomAllergene'] ;
   }?>
    <br/>
</div>
   
    <br/>
    <div>
         <label for="type"class="form"></label>
        <input type="submit" id="valider" name="valider" >
     </div>

</form>


<?php
 if (isset ($_POST['valider'])){
$nomPlat = $_POST['nomPlat'];
$prixPlat = $_POST['prixPlat'];
$vegetarien = $_POST['vegetarien'];
$type = $_POST['type'];
$nomAllergene = $_POST['nomAllergene'];

//On prépare la commande sql d'insertion
$requeteA = "INSERT INTO plat(id_plat,nomPlat, prix, vegetarien, type) VALUES(?, ?, ?, ?, ?) ";
$req = $bdd->prepare($requeteA);
       $req->execute([NULL, $nomPlat, $prixPlat,$vegetarien, $type]);

$requeteM ="INSERT INTO plat_allergene(id_plat_allergene, id_allergene_allergene) VALUES ANY ((SELECT id_plat FROM plat WHERE nomPlat = ?), (SELECT id_allergene FROM allergene WHERE nomAllergene = ?))";


       $req = $bdd->prepare($requeteM);
               $req->execute([$nomPlat, $nomAllergene]);
           
       }
?>



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
</form>
    <?php
 if (isset ($_POST['ok'])){
$nomPlatSuppr = $_POST['nomPlatSuppr'];

$requeteB = "DELETE plat, plat_menu, plat_allergene FROM ((plat INNER JOIN plat_menu ON plat.id_plat = plat_menu.id_plat_menu) INNER JOIN plat_allergene ON plat.id_plat = plat_allergene.id_plat_allergene)   WHERE nomPlat= ?";
$req = $bdd->prepare($requeteB);
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
</form>

<?php
if (isset ($_POST['okModif'])){
    $nomPlatModif = $_POST['nomPlatModif'];
    $nomPlatAModif = $_POST['nomPlatAModif'];
$requeteC = "UPDATE plat SET nomPlat = ? WHERE nomPlat = ? ";
$req = $bdd->prepare($requeteC);
       $req->execute([$nomPlatModif, $nomPlatAModif]);
}
?>



<p>Vous souhaitez modifier le prix du plat</p>
<form action="admin.php" method="post">
    <div>
        <label for="nomPlatAModif">Nom du plat à modifier :</label>
        <input type="text" id="nomPlatAModif" name="nomPlatAModif">
    </div>
    <br/>
    <div>
        <label for="prixAModif">prix à modifier :</label>
        <input type="text" id="prixAModif" name="prixAModif">
    </div>
    <br/>
    <div>
        <label for="prixModif">prix modifier :</label>
        <input type="text" id="prixModif" name="prixModif">
    </div>
    <br/>
    <div>
         <label for="type"></label>
        <input type="submit" id="okModifPrix" name="okModifPrix">
    </div>
</form> 

<?php
if (isset ($_POST['okModifPrix'])){
    $prixModif = $_POST['prixModif'];
    $prixAModif = $_POST['prixAModif'];
    $nomPlatAModif = $_POST['nomPlatAModif'];
$requeteD = "UPDATE plat SET prix = ? WHERE nomPlat = ? AND $prixAModif = ?";
$req = $bdd->prepare($requeteD);
       $req->execute([$prixModif, $nomPlatAModif, $prixAModif]);
}
?>




<p><strong><i>Ajouter  un menu</i></strong></p>
    <form action="admin.php" method="post">
        
    <div>
        <label for="nomMenuAjout" class="form">Nom du menu :</label>
        <input type="text" id="nomMenuAjout" name="nomMenuAjout" >
    </div>
    <br/>
    
    <div>
        <label for="prixMenu"class="form">Prix du menu :</label>
        <input type="text" id="prixMenu" name="prixMenu" >
    </div>
   
    <br/>
    <div>
         <label for="type"class="form"></label>
        <input type="submit" id="validerAjout" name="validerAjout" >
     </div>
     <br/>
</form>

<?php
if (isset ($_POST['validerAjout'])){
$nomMenuAjout = $_POST['nomMenuAjout'];
$prixMenu = $_POST['prixMenu'];
$requeteE = "INSERT INTO menu (id_menu, nomMenu, prix) VALUES(?, ?, ?)";
$req = $bdd->prepare($requeteE);
       $req->execute([NULL, $nomMenuAjout, $prixMenu]);
}?>



<p>Ajouter un plat dans un menu</p>
<form action="admin.php" method="post"> 
     <div>
        <label for="nomMenuAj" class="form">Nom du menu :</label>
        <input type="text" id="nomMenuAj" name="nomMenuAj" >
    </div>
    <br/>
    <div>
        <label for="nomPlatAj" class="form">Nom du plat :</label>
        <input type="text" id="nomPlatAj" name="nomPlatAj" >
    </div>
    <br/>
    <div>
         <label for="type"class="form"></label>
        <input type="submit" id="validerAjoutPlat" name="validerAjoutPlat" >
     </div>
     <br/>
</form>
<?php
if (isset ($_POST['validerAjoutPlat'])){
$nomMenuAj = $_POST['nomMenuAj'];
$nomPlatAj = $_POST['nomPlatAj'];
$requeteF = "INSERT INTO plat_menu(id_plat_menu, id_menu_menu) VALUES ((SELECT id_plat FROM plat WHERE nomPlat = ?), (SELECT id_menu FROM menu WHERE nomMenu = ?))";
    $req = $bdd->prepare($requeteF);
       $req->execute([$nomPlatAj, $nomMenuAj]);}

?>

<p><strong><i>Modifier un menu</i></strong></p>
<p>Vous souhaitez modifier le nom d'un plat d'un menu</p>
<form action="admin.php" method="post">
    <div>
        <label for="nomPlatAModifSuppr">Nom du plat à changer dans le menu :</label>
        <input type="text" id="nomPlatAModifSuppr" name="nomPlatAModifSuppr">
    </div>
    <br/>
    <div>
        <label for="nomPlatModifAjout">Nom du plat changé dans le menu :</label>
        <input type="text" id="nomPlatModifAjout" name="nomPlatModifAjout">
    </div>
    <br/>
    <div>
         <label for="type"></label>
        <input type="submit" id="okModifMenu" name="okModifMenu">
    </div>
</form>

<?php
if (isset ($_POST['okModifMenu'])){
    $nomPlatModifAjout = $_POST['nomPlatModifAjout'];
    $nomPlatAModifSuppr = $_POST['nomPlatAModifSuppr'];
$requeteC = "UPDATE plat, plat_menu SET nomPlat = ? WHERE plat.id_plat = plat_menu.id_plat_menu AND nomPlat = ?";
$req = $bdd->prepare($requeteC);
       $req->execute([$nomPlatModifAjout, $nomPlatAModifSuppr]);
}
?>




<p><strong><i>Supprimer un menu</i></strong></p>
<form action="admin.php" method="post">
    <div>
        <label for="nomMenuSuppr">Nom du menu à supprimer :</label>
        <input type="text" id="nomMenuSuppr" name="nomMenuSuppr">
    </div>
    <br/>
    <div>
         <label for="type"></label>
        <input type="submit" id="validerSuppr" name="validerSuppr">
    </div>

</form>
    <?php
 if (isset ($_POST['validerSuppr'])){
$nomMenuSuppr = $_POST['nomMenuSuppr'];

$requeteG = "DELETE FROM menu WHERE nomMenu = ? ";
$req = $bdd->prepare($requeteG);
       $req->execute([$nomMenuSuppr]);
}
?>


<p><strong><i>Ajouter  un allergene</i></strong></p>
    <p>Liste des allergènes déja existants : </p>
    <?php $requete400 = "SELECT * FROM allergene ";
$req = $bdd->prepare($requete400);
     $req->execute();
     while ($donnees = $req->fetch())
{
       echo '<br/>-'.$donnees['nomAllergene']; 
} ?>
    <form action="admin.php" method="post">
        
    <div>
        <label for="nomAllergeneAjout" class="form">Nom de l'allergène :</label>
        <input type="text" id="nomallergeneAjout" name="nomAllergeneAjout" >
    </div>
    <br/>
 
    <div>
         <label for="type"class="form"></label>
        <input type="submit" id="validerAjoutAllergene" name="validerAjoutAllergene" >
     </div>
     <br/>
</form>

<?php
if (isset ($_POST['validerAjoutAllergene'])){
$nomAllergeneAjout = $_POST['nomAllergeneAjout'];
$requeteJ = "INSERT INTO allergene (id_allergene, nomAllergene) VALUES(?, ?)";
$req = $bdd->prepare($requeteJ);
       $req->execute([NULL, $nomAllergeneAjout]);
}?>







<<p>Ajouter un allergène dans un plat</p>
<form action="admin.php" method="post"> 
<div>	 
   <label for="nomAllergeneAjoutPlat" class="form">Nom de l'allergène : </label>
   <input type="text" id="nomAllergeneAjoutPlat" name="nomAllergeneAjoutPlat">
    <br/>

    <br/>
	<div>
        <label for="nomPlatAjout" class="form">Nom du plat :</label>
        <input type="text" id="nomPlatAjout" name="nomPlatAjout" >
    </div>
    <br/>
    <div>
    	 <label for="type"class="form"></label>
        <input type="submit" id="validerAjoutAllergenePlat" name="validerAjoutAllergenePlat" >
     </div>
     <br/>
</form>
<?php

    if (isset ($_POST['validerAjoutAllergenePlat'])){
        $nomPlatAjout = $_POST['nomPlatAjout'];
        $nomAllergeneAjoutPlat = $_POST['nomAllergeneAjoutPlat'];
        $requeteI = "INSERT INTO plat_allergene(id_plat_allergene, id_allergene_allergene) VALUES ((SELECT id_plat FROM plat WHERE nomPlat = ?), (SELECT id_allergene FROM allergene WHERE nomAllergene = ?))";
        	$req = $bdd->prepare($requeteI);
        	   $req->execute([$nomPlatAjout, $nomAllergeneAjoutPlat]);
    }

?>

<button class="bouton"><a href="index.php">Accueil</a></button>
</body>
</html>


