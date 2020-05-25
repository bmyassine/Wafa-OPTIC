<?php 
/**
 * 
*/
class client 
{
	private $cin;
	private $photo;
	private $nom;
	private $prenom;
	private $email;
	private $adresse;
	private $dateN;
	function __construct($cin,$photo,$nom,$prenom,$email,$adresse,$dateN)
   { $this->cin=$cin;
   	$this->photo=$photo;
   	$this->nom=$nom;
   	$this->prenom=$prenom;
   	$this->email=$email;
   	$this->adresse=$adresse;
   	$this->dateN=$dateN;
		}
	function GetCin(){
		return $this->cin;
	}
		function GetPhoto(){
		return $this->photo;
	}
		function GetNom(){
		return $this->nom;
	}

		function GetPrenom(){
		return $this->prenom;
	}

		function GetEmail(){
		return $this->email;
	}

		function GetAdresse(){
		return $this->adresse;
	}

		function GetDateN(){
		return $this->dateN;
	}

}
?>