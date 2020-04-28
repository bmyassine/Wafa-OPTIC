<?php
include "../configa.php";


   function ajouter($e,$conn)
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
  function supprimer($id,$conn)
  {
    $sql="DELETE FROM  categorie WHERE nom_cat=".$id;
    $conn->exec($sql);
  }
   function modifier($id,$conn)
  {
      $sql = 'UPDATE categorie SET nom_cat="'.$id->getnom_cat().'",date_d="'.$id->getdate_d().'"';
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

   function rechercher($e,$conn){
  $sql="SELECT * FROM categorie WHERE nom_cat=".$e;
  $resultat=$conn->query($sql);
  return $resultat->fetchALL();
}
 function recupererid()
   {
    $sql="select id from categorie ";
    $c = configa::getConnexion();
    return ($c->query($sql));
    }
    
 ?>
