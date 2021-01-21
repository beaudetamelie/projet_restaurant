<?php
class DTO_plat
{
	private $id;
	private $nom;
	private $nom_menu;
	private $prix;
	private $type;
	private $menu;
	function __construct($id, $nom, $nom_m, $prix, $type, $menu){
		$this->id =$id;
		$this->nom =$nom;
		$this->nom_menu = $nom_m; 
		$this->prix = $prix;
		$this->type = $type;
		$this->menu = $menu;
	}

	public function getId() {return $this ->id;}
	public function getNom() {return $this ->nom;}
	public function getNom_m() {return $this ->nom_menu;}
	public function getPrix() {return $this ->prix;}
	public function getType() {return $this ->type;}
	public function getMenu() {return $this ->menu;}

	//setter
	public function setId($id) {$this->id =$id;}
	public function setNom($nom) {$this->nom =$nom;}
	public function setNom_m($nom_menu) {$this->nom_menu = $nom_m; }
	public function setPrix($prix) {$this->prix = $prix;}
	public function setType($type) {$this->type = $type;}
	public function setMenu($menu) {$this->menu = $menu;}
}