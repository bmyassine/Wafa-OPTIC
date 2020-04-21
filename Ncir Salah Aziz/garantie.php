<?PHP
class garantie{
    private $ID_garantie;
    private $NOW_garantie;
    private $DATE_garantie;
    private $OBJET_garantie;
    private $ETAT_garantie;
    private $USER_ID;


    function __construct($NOW_garantie,$DATE_garantie, $OBJET_garantie, $ETAT_garantie,$USER_ID){

        $this->NOW_garantie=$NOW_garantie;
        $this->DATE_garantie=$DATE_garantie;
        $this->OBJET_garantie=$OBJET_garantie;
        $this->ETAT_garantie=$ETAT_garantie;
        $this->USER_ID=$USER_ID;

    }


    public function getNOW_garantie()
    {
        return $this->NOW_garantie;
    }

    public function setNOW_garantie($NOW_garantie)
    {
        $this->NOW_garantie = $NOW_garantie;
    }

    public function getUSER_ID(){
        return $this->USER_ID;
    }
    public function getID_garantie(){
        return $this->ID_garantie;
    }
    public function getOBJET_garantie(){
        return $this->OBJET_garantie;
    }
    public function getDATE_garantie(){
        return $this->DATE_garantie;
    }
    public function getETAT_garantie(){
        return $this->ETAT_garantie;
    }

    public function setUSER_ID($USER_ID){
        $this->USER_ID=$USER_ID;
    }
    public function setID_garantie($ID_garantie){
        $this->ID_garantie=$ID_garantie;
    }
    public function setOBJET_garantie($OBJET_garantie){
        $this->OBJET_garantie=$OBJET_garantie;
    }
    public function setDATE_garantie($DATE_garantie){
        $this->DATE_garantie=$DATE_garantie;
    }
    public function setETAT_garantie($ETAT_garantie){
        $this->ETAT_garantie=$ETAT_garantie;
    }

}

?>