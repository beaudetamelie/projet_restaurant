<?php
require_once('DTO_allergene.php');
class DAO_allergene{
    private $nom;

   public function __construct()
	{
		try{
			$bdd = new PDO('mysql:host=t59in.myd.infomaniak.com;dbname=t59in_amelie','t59in_amelie', 'AB@69400villle');
	
		}catch(Exception $e){
			die('Erreur : ' . $e->getMessage());
		}

	}

}