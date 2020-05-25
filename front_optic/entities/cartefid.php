<?php 
/**
 * 
 */

class cartefid {

   private $points;
   private $type;
   private $cin;

	function __construct($points,$type,$cin)
	{$this->points=$points;
		$this->type=$type;
		$this->cin=$cin;
	}
	function setPoints($points){
		$this->points=$points;
	}

	function setType($type){
		$this->type=$type;
	}
	function setCin($cin){
		$this->cin=$cin;
	}
	function getPoints(){
		return $this->points;
	}

	function getTypeclient(){
		return $this->type;
	}
	function getCin(){
		return $this->cin;
	}
}
?>