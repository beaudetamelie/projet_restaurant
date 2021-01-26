<?php
require_once('DTO_menu.php');
class DAO_menu{
    private $id;
    private $nom ;
    private $nom_menu ;
    private $prix ;
    private $type;
    private $menu;



	public function __construct()
	{
		try{
			$bdd = new PDO('mysql:host=t59in.myd.infomaniak.com;dbname=t59in_amelie','t59in_amelie', 'AB@69400villle');
	
		}catch(Exception $e){
			die('Erreur : ' . $e->getMessage());
		}

	}

function id(){
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $nom_menu = $_POST['nom_menu'];
    $type = $_POST['type'];
    $menu = $_POST['menu'];

}

public function affiche_prix_menu(){
    $req = $bdd->prepare('SELECT nom_menu, prix FROM menu');
    $req->execute(array());
while ($donnees = $req->fetch())
{
       echo $donnees['nom_menu'] . ' ...........' . $donnees['prix'] . 'euros <br/>';
}
$req->closeCursor();
	}

}
?>