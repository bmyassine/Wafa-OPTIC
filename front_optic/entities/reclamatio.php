<?PHP
class reclamatio{
	private $ID_R;
	private $DATE_reclamatio;
	
    private $NUM_R;
    private $OBJET_R;
    private $DETAILS_R;
    private $ETAT_R;
    private $user_id;

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

	function __construct($DATE_reclamatio,$NUM_R,$OBJET_R,$DETAILS_R,$ETAT_R){

		$this->DATE_reclamatio=$DATE_reclamatio;
	
        $this->NUM_R=$NUM_R;
        $this->OBJET_R=$OBJET_R;
        $this->DETAILS_R=$DETAILS_R;
        $this->ETAT_R=$ETAT_R;
      
	}
	
	public function getID_R(){
		return $this->ID_R;
	}
	public function getDATE_reclamatio(){
		return $this->DATE_reclamatio;
	}


	public function getNUM_R(){
		return $this->NUM_R;
    }
    public function getOBJET_R(){
		return $this->OBJET_R;
    }
    public function getDETAILS_R(){
		return $this->DETAILS_R;
	}
    public function getETAT_R()
    {
        return $this->ETAT_R;
    }
	public function setID_R($ID_R){
		$this->ID_R=$ID_R;
    }
    //date_default_timezone_set('Africa/Tunisia');
    public function setDATE_reclamatio($DATE_reclamatio){
		$this->DATE_reclamatio=$DATE_reclamatio;
	}

	public function setNUM_R($NUM_R){
		$this->NUM_R=$NUM_R;
    }
    public function setOBJET_R($OBJET_R){
		$this->OBJET_R=$OBJET_R;
    }
    public function setDETAILS_R($DETAILS_R){
		$this->DETAILS_R=$DETAILS_R;
	}
    public function setETAT_R($ETAT_R){
        $this->ETAT_R=$ETAT_R;
    }
	
}

?>