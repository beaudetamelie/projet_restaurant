<?php
require_once('DTO_plat.php');
class DAO_Joueur{
    private $id;
    private $nom ;
    private $nom_menu ;
    private $prix ;
    private $type;
    private $menu;

   /* $id = $_POST['id'];
    $nom = $_POST['nom'];
    $nom_menu = $_POST['nom_menu'];
    $type = $_POST['type'];
    $menu = $_POST['menu'];*/

	public function __construct()
	{
		try{
			$this->bdd = new PDO('mysql:host=localhost;dbname=amelie_menurestaurant;','amelie', '1234');
	
		}catch(Exception $e){
			die('Erreur : ' . $e->getMessage());
		}

	}




public function affiche_prix(){

   		$prix = $_POST['prix'];
        $requete2 = 'SELECT prix FROM plat';
        $req = $this->bdd->prepare($requete2);
        $req ->execute(array($_POST['prix']));
	}

}
?>