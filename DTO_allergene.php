<?php
class DTO_allergene
{
	private $nom;
function __construct($nom){
	$this->nom =$nom;
}
public function getNom() {return $this ->nom;}
public function setNom($nom) {$this->nom =$nom;}}