<?PHP
class commande{
 
	private $total;
	private $etat;
	
	function __construct($total,$etat){
		 		$this->total=$total;
		$this->etat=$etat;
		
	}
	
	
	function gettotal(){
		return $this->total;
	}
	function getetat(){
		return $this->etat;
	}
	

	
	function settotal($total){
		$this->total=$total;
	}
	function setetat($etat){
		$this->etat;
	}
	
	
}

?>