<?php
require_once('DTO_plat.php');
class DAO_plat{
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
			$bdd = new PDO('mysql:host=t59in.myd.infomaniak.com;dbname=t59in_amelie','t59in_amelie', 'AB@69400villle');
	
		}catch(Exception $e){
			die('Erreur : ' . $e->getMessage());
		}

	}





}
?>