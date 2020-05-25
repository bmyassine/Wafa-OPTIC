<?php 


class compte
{
	private $id;
	private $mot_de_passe;
	private $type;
	public $conn;

	public function __construct($id,$mot_de_passe)
   { $this->id=$id;
   	$this->mot_de_passe=$mot_de_passe;
   	$this->conn=config::getConnexion();
  
		}
	function GetId(){
		return $this->id;
	}

		function GetMot_de_passe(){
		return $this->mot_de_passe;
	}
		function GetType(){
		return $this->type;
	}
	function GetConn(){
		return $this->conn;
	}
	function SetId($id){
	 $this->id=$id;
	}

		function SetMot_de_passe($mot_de_passe){
	 $this->mot_de_passe=$mot_de_passe;
	}
	function SetType($type){
	 $this->type=$type;
	}
	function setconn($conn){
			$this->conn= $conn;
}

}
?>