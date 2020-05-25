<?PHP
 class reclamatioC
{

    function afficherreclamatio($a)
    {
        $sql = "SELECT * FROM reclamatio WHERE user_id=$a ORDER BY DATE_reclamatio ASC";
        $db = config::getConnexion();
        $list = $db->query($sql);
        return $list;
    }


    function ajouterreclamatio($reclamatio)
    {
        $sql = "INSERT INTO reclamatio (DATE_reclamatio,NUM_R,OBJET_R,DETAILS_R,ETAT_R) VALUES (:DATEtime,:NUM_R,:OBJET_R,:DETAILS_R,:ETAT_R)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            //$ID_R=$reclamatio->getID_R();
            $Date = $reclamatio->getDATE_reclamatio();
          
            $NUM_R = $reclamatio->getNUM_R();
            $OBJET_R = $reclamatio->getOBJET_R();
            $DETAILS_R = $reclamatio->getDETAILS_R();
            $etat = $reclamatio->getETAT_R();
            
            //$req->bindValue(':ID_R',$ID_R);
            $req->bindValue(':DATEtime', $Date);
         
            $req->bindValue(':NUM_R', $NUM_R);
            $req->bindValue(':OBJET_R', $OBJET_R);
            $req->bindValue(':DETAILS_R', $DETAILS_R);
            $req->bindValue(':ETAT_R', $etat);
            
            $req->execute();

        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }

    }

    function afficherreclamatios()
    {
        //$sql="SElECT * From reclamatio d inner join utilisateur u on d.USER_ID= u.USER_ID";
        $sql = "SElECT * FROM reclamatio d ORDER BY DATE_reclamatio DESC";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function supprimerreclamatio($ID_R)
    {
        //$date= date_create()->format('Y-m-d');

        //$d ="SELECT DATE_reclamatio FROM reclamatio WHERE ID_R = :ID_R ";
        //$bd = config::getConnexion();

            $sql = "DELETE FROM reclamatio where ID_R= :ID_R";
            $db = config::getConnexion();
            $req = $db->prepare($sql);

            $req->bindValue(':ID_R', $ID_R);
            try {
                $req->execute();
                // header('Location: ../views/reclamatio.php');

            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }

           // echo "<script type=\"text/javascript\">window.alert('Vous ne pouvez plus supprimer.')</script>";

    }

    function traiterD($ID_R)
    {
        $sql = "UPDATE reclamatio SET ETAT_R= 'Traitee' where ID_R= :ID_R";
        $db = config::getConnexion();
        $req = $db->prepare($sql);

        $req->bindValue(':ID_R', $ID_R);
        try {
            $req->execute();
            // header('Location: ../views/reclamatio.php');

        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function recupererreclamatio($ID_R)
    {
        $sql = "SELECT * from reclamatio where ID_R=$ID_R";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function modifierreclamatio($reclamatio,$ID_R)
    {
        $sql = "UPDATE reclamatio SET  NUM_R=:num , OBJET_R=:objet,DETAILS_R =:details WHERE reclamatio ID_R=:ID_R";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $ID_R=$reclamatio->getID_R();
    
        $num = $reclamatio->getNUM_R();
        $objet = $reclamatio->getOBJET_R();
        $details = $reclamatio->getDETAILS_R();

        $req->bindValue(":ID_R",$ID_R);
  
        $req->bindValue(':num', $num);
        $req->bindValue(':objet', $objet);
        $req->bindValue(':details', $details);

        $req->execute();

    }

    function Recherchereclamatio($haja){

    	$sql="SELECT ID_R,DATE_reclamatio,NUM_R,OBJET_R,DETAILS_R,ETAT_R FROM reclamatio WHERE OBJET_R LIKE '%$haja%' ORDER BY DATE_reclamatio DESC";


    	$db = config::getConnexion();
    	try{
    	$liste=$db->query($sql);
    	return $liste;

    	}
    			 catch (Exception $e){
    					 die('Erreur: '.$e->getMessage());
    			 }
    }

    function NBRPART(){

      $sql="SELECT COUNT(ID_R) nbr FROM reclamatio WHERE OBJET_R='Livraison nom recu' ";


      $db = config::getConnexion();
      try{
      $liste=$db->query($sql);
      return $liste;

      }
           catch (Exception $e){
               die('Erreur: '.$e->getMessage());
           }
    }

    function NBRSPON(){

      $sql="SELECT COUNT(ID_R) nbr FROM reclamatio WHERE OBJET_R='Livraison nom conforme' ";


      $db = config::getConnexion();
      try{
      $liste=$db->query($sql);
      return $liste;

      }
           catch (Exception $e){
               die('Erreur: '.$e->getMessage());
           }
    }
}

?>
