<?php
include "../configa.php";
class categorie{
private $_nom_cat;
private $_date_d;
private $_desc;
  public function __construct($nom_cat,$date_cat,$desc)
  {

    $this->_nom_cat=$nom_cat;
    $this->_date_d=$date_cat;
    $this->_desc=$desc;
  }
  
  public function getnom_cat()
  {
    return $this->_nom_cat;
  }
 public function getdate_d()
  {
    return $this->_date_d;
  }
  public function getdesc()
  {
    return $this->_desc;
  }
  public function ajouter($e,$conn)
  {
    $sql="INSERT INTO categorie(nom_cat,date_d,description)
    values('".$e->getnom_cat()."','".$e->getdate_d()."','".$e->getdesc()."')";
    $conn->query($sql);
  }
  function afficher($conn)
  {
    $sql="SELECT * FROM categorie";
    $resultat=$conn->query($sql);
    return $resultat->fetchAll();
  }
  public function supprimer($id,$conn)
  {
    $sql="DELETE FROM  categorie WHERE nom_cat=".$id;
    $conn->exec($sql);
  }
  public function modifier($id,$conn)
  {
      $sql = 'UPDATE categorie SET nom_cat="'.$id->getnom_cat().'",date_d="'.$id->getdate_d().'",description="'.$id->getdesc().'"';
      $conn->exec($sql);
  }

     function afficherDESC()
     {
    $sql="select * from categorie ORDER BY nom_cat DESC";
    $c = configa::getConnexion();
    return ($c->query($sql));
    
     }

   function afficherASC()
   {
    $sql="select * from categorie ORDER BY nom_cat ASC";
    $c = configa::getConnexion();
    return ($c->query($sql));
    }

  public function rechercher($e,$conn){
  $sql="SELECT * FROM categorie WHERE nom_cat=".$e;
  $resultat=$conn->query($sql);
  return $resultat->fetchALL();
}

     function recupererid()
   {
    $sql="select * from categorie ";
    $c = configa::getConnexion();
    return ($c->query($sql));
    }
}
 ?>
