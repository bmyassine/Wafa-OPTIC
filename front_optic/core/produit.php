<?php
class produit{
  private $_codeProd;
  private $_image;
  private $_nom;
  private $_id_cat;
  private $_typee;
  private $_prix;
  private $_dateC;

  public function __construct($codeProd,$image,$nom,$id_cat,$typee,$prix,$dateC)
  {

    $this->_codeProd=$codeProd;
    $this->_image=$image;
    $this->_nom=$nom;
    $this->_id_cat=$id_cat;
    $this->_typee=$typee;
    $this->_prix=$prix;
    $this->_dateC=$dateC;

  }

  public function getcodeprod()
  {
    return $this->_codeProd;
  }
  public function getimage()
  {
    return $this->_image;
  }
   public function getnom()
  {
    return $this->_nom;
  }
   public function getid_cat()
  {
    return $this->_id_cat;
  }
   public function gettypee()
  {
    return $this->_typee;
  }
    public function getprix()
  {
    return $this->_prix;
  }
   public function getdateC()
  {
    return $this->_dateC;
  }

  public function ajouter($e,$conn)
  {
    $sql="INSERT INTO produit(codeProd,image,nom,id_cat,typee,prix,dateC)
    values('".$e->getcodeprod()."','".$e->getimage()."','".$e->getnom()."','".$e->getid_cat()."','".$e->gettypee()."','".$e->getprix()."','".$e->getdateC()."')";
    $conn->query($sql);
  }
  public function afficher($conn)
  {
    $sql="SELECT * FROM produit";
    $resultat=$conn->query($sql);
    return $resultat->fetchAll();
  }
  public function supprimer($id,$conn)
  {
    $sql="DELETE FROM  produit WHERE codeProd=".$id;
    $conn->exec($sql);
  }
  public function rechercher($codeProd,$conn){
  $sql="SELECT * FROM produit WHERE codeProd=".$codeProd;
  $resultat=$conn->query($sql);
  return $resultat->fetchALL();
}
public function recherchern($codeProd,$conn){
  $name=$codeProd;
  $sql="SELECT * FROM produit WHERE nom='$name'";
  $resultat=$conn->query($sql);
  return $resultat->fetchALL();
}
 public function modifier($id,$conn)
  {
      $sql = 'UPDATE produit SET image="'.$id->getimage().'",nom="'.$id->getnom().'", id_cat="'.$id->getid_cat().'",typee="'.$id->gettypee().'",prix="'.$id->getprix().'",dateC="'.$id->getdateC().'" WHERE codeProd="'.$id->getcodeprod().'"';
      $conn->exec($sql);
  }
function affichermen($conn)
  {
    $sql="SELECT * FROM produit WHERE id_cat = 1 ";
    $resultat=$conn->query($sql);
    return $resultat->fetchAll();
  }
   function triname($conn)
  {
    $sql="select * from produit ORDER BY nom ASC";
    $resultat=$conn->query($sql);
    return $resultat->fetchAll();
  }
  public function afficherhomme($conn)
  {
    $sql="SELECT * FROM produit where id_cat = 2 "; 
    $resultat=$conn->query($sql);
    return $resultat->fetchAll();
  }
    public function afficherfemme($conn)
  {
    $sql="SELECT * FROM produit where id_cat = 1 "; 
    $resultat=$conn->query($sql);
    return $resultat->fetchAll();
  }
    public function afficherenfant($conn)
  {
    $sql="SELECT * FROM produit where id_cat = 3 "; 
    $resultat=$conn->query($sql);
    return $resultat->fetchAll();
  }
   public function afficherbest($conn)
  {
    $sql="SELECT * FROM produit where prix >= 200 "; 
    $resultat=$conn->query($sql);
    return $resultat->fetchAll();
  }
  function affichercodeProd($ref,$conn){
    //$sql="SElECT * From produit e inner join formationphp.produit a on e.reference= a.reference";
    $sql="select * from produit where codeProd = $ref";
    $resultat=$conn->query($sql);
    return $resultat->fetchAll(); 
  }
   
}
 ?>