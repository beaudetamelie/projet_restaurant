<?php
require_once('DTO_allergene.php');
class DAO_allergene{
    private $nom;

   public function __construct()
	{
		try{
			$bdd = new PDO('mysql:host=localhost;dbname=amelie_menurestaurant;','amelie', '1234');
	
		}catch(Exception $e){
			die('Erreur : ' . $e->getMessage());
		}

	}

}