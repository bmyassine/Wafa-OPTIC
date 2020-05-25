<?php
/**
 * 
 */
class commentaire 
{
	private $id;
	private $id_compte;
	private $texte;
	
	function __construct($id,$id_compte,$texte)
	{$this->id=$id;
		$this->id_compte=$id_compte;
		$this->texte=$texte;
	}
	function getid(){
		return $this->id;
	}

	function getid_compte(){
		return $this->id_compte;
	}
	function gettexte(){
		return $this->texte;
	}
	function setid($id){
	$this->id=$id;
	}

	function setid_compte($id_compte){
		 $this->id_compte=$id_compte;
	}
	function settexte($texte){
	 $this->texte=$texte;
	}
}
?>