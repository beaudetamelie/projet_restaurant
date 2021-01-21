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
			$this->bdd = new PDO('mysql:host=localhost;dbname=amelie_menurestaurant;','amelie', '1234');
	
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

public function affiche_prix(){

   
        $requete2 = 'SELECT prix FROM menu';
        $req = $this->bdd->prepare($requete2);
        $req ->execute(array());
	}

}
?>