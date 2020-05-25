<?PHP
class livraison{
	private $telephone;
	private $client;
	private $cmd;
	private $date;
	private $adresselivraison;
	function __construct($telephone,$client,$cmd,$date,$adresselivraison){
		$this->telephone=$telephone;
		$this->client=$client;
		$this->cmd=$cmd;
		$this->date=$date;
		$this->adresselivraison=$adresselivraison;
	}
	function get_telephone(){
		return $this->telephone;
	}
	function get_client(){
		return $this->client;
	}
	function get_cmd(){
		return $this->cmd;
	}
	function get_date(){
		return $this->date;
	}
	function get_adresselivraison(){
		return $this->adresselivraison;
	}
	function set_client($client){
		$this->client=$client;
	}
	function set_cmd($cmd){
		$this->cmd;
	}
	function set_date($date){
		$this->date=$date;
	}
	function set_adresselivraison($date){
		$this->adresselivraison=$adresselivraison;
	}
}
?>