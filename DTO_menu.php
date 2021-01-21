<?php
class DTO_menu
{
	private $id;
	private $nom_menu;
	private $prix;
	function __construct($id, $nom_m, $prix){
		$this->id =$id;
		$this->nom_menu = $nom_m; 
		$this->prix = $prix;
	}

	public function getId() {return $this ->id;}
	public function getNom_m() {return $this ->nom_menu;}
	public function getPrix() {return $this ->prix;}

	//setter
	public function setId($id) {$this->id =$id;}
	public function setNom_m($nom_menu) {$this->nom_menu = $nom_m; }
	public function setPrix($prix) {$this->prix = $prix;}
}