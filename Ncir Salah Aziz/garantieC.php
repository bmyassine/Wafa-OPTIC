<?PHP
include_once "../config.php";
class garantieC {

    function affichergarantie ($a)
    {
        $sql="SELECT * FROM garantie WHERE USER_ID=$a ORDER BY NOW_garantie ASC";
        $db=config::getConnexion();
        $list=$db->query($sql);
        return $list;
    }


    function ajoutergarantie($garantie)
    {
        $sql="INSERT INTO garantie (NOW_garantie,DATE_garantie,OBJET_garantie,ETAT_garantie,USER_ID) VALUES (:NOW_garantie,:DATEtime,:OBJET_garantie,:ETAT_garantie,:USER_ID)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);

            $NOW_garantie=$garantie->getNOW_garantie();
            $Date=$garantie->getDATE_garantie();
            $OBJET_garantie=$garantie->getOBJET_garantie();
            $ETAT_garantie=$garantie->getETAT_garantie();
            $USER_ID=$garantie->getUSER_ID();

            $req->bindValue(':NOW_garantie',$NOW_garantie);
            $req->bindValue(':DATEtime',$Date);
            $req->bindValue(':OBJET_garantie',$OBJET_garantie);
            $req->bindValue(':ETAT_garantie',$ETAT_garantie);
            $req->bindValue('USER_ID',$USER_ID);
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

    }

    function affichergaranties()
    {
        //$sql="SElECT * From garantie s inner join utilisateur u on s.USER_ID= u.USER_ID";
        $sql="SElECT d.ID_garantie,d.NOW_garantie,d.DATE_garantie,d.OBJET_garantie,d.ETAT_garantie,d.USER_ID  FROM garantie d ORDER BY NOW_garantie DESC";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function acceptergarantie($ID_garantie)
    {
        $sql = "UPDATE garantie SET ETAT_garantie = 'Acceptee' where ID_garantie = :ID_garantie";
        $db = config::getConnexion();
        $req = $db->prepare($sql);

        $req->bindValue(':ID_garantie', $ID_garantie);
        try {
            $req->execute();
            // header('Location: ../views/Demande.php');

        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function refusergarantie($ID_garantie)
    {
        $sql = "UPDATE garantie SET ETAT_garantie = 'Refusee' where ID_garantie = :ID_garantie";
        $db = config::getConnexion();
        $req = $db->prepare($sql);

        $req->bindValue(':ID_garantie', $ID_garantie);
        try {
            $req->execute();
            // header('Location: ../views/Demande.php');

        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function supprimergarantie($ID_garantie){
        $sql="DELETE FROM garantie where ID_garantie= :ID_garantie";
        $db = config::getConnexion();
        $req=$db->prepare($sql);

        $req->bindValue(':ID_garantie',$ID_garantie);
        try{
            $req->execute();
            // header('Location: ../views/Contact.php');

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function recuperergarantie($ID_garantie){
        $sql="SELECT * from garantie where ID_garantie=$ID_garantie";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }




function modifiergarantie($garantie,$ID_garantie)
{
    $sql = "UPDATE `garantie` SET `DATE_garantie`= DATE_garantie,`OBJET_garantie`= OBJET_garantie  WHERE  `garantie`.`ID_garantie` = ID_garantie";
    $db = config::getConnexion();
    $req = $db->prepare($sql);
    $ID_D=$garantie->getID_D();
    $nom = $garantie->getDATE_garantie();
    $objet = $garantie->getOBJET_garantie();

    $req->bindValue(":ID_D",$ID_D);
    $req->bindValue(':nom', $nom);
    $req->bindValue(':objet', $objet);

     $req->execute();

}

function Recherchegarantie($haja){

  $sql="SELECT ID_garantie,NOW_garantie,DATE_garantie,OBJET_garantie,ETAT_garantie,USER_ID FROM garantie WHERE OBJET_garantie LIKE '%$haja%' ORDER BY DATE_garantie DESC";


  $db = config::getConnexion();
  try{
  $liste=$db->query($sql);
  return $liste;

  }
       catch (Exception $e){
           die('Erreur: '.$e->getMessage());
       }
}

function NBRRESU(){

  $sql="SELECT COUNT(ID_garantie) nbr FROM garantie WHERE OBJET_garantie='Livraison non reçu' ";


  $db = config::getConnexion();
  try{
  $liste=$db->query($sql);
  return $liste;

  }
       catch (Exception $e){
           die('Erreur: '.$e->getMessage());
       }
}

function NBRNONC(){

  $sql="SELECT COUNT(ID_garantie) nbr FROM garantie WHERE OBJET_garantie='Livraison non coforme' ";


  $db = config::getConnexion();
  try{
  $liste=$db->query($sql);
  return $liste;

  }
       catch (Exception $e){
           die('Erreur: '.$e->getMessage());
       }
}

function NBRREP(){

  $sql="SELECT COUNT(ID_garantie) nbr FROM garantie WHERE OBJET_garantie='Réparation et maintenance sous garantie' ";


  $db = config::getConnexion();
  try{
  $liste=$db->query($sql);
  return $liste;

  }
       catch (Exception $e){
           die('Erreur: '.$e->getMessage());
       }
}

function NBRAUTRE(){

  $sql="SELECT COUNT(ID_garantie) nbr FROM garantie WHERE OBJET_garantie='Autre..' ";


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
