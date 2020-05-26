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
   function modifier($id,$conn){
    $sql="UPDATE categorie set date_d = :d ,description = :des where nom_cat = :n ";
                 echo 'fffffffffff';


    
    try{
        $req=$conn->prepare($sql);
    
        
        $desc=$id->getdesc();
        $date_d=$id->getdate_d();
        $nom_cat=$id->getnom_cat();



     
    $req->bindValue(':des',$desc);
    $req->bindValue(':d',$date_d);
    $req->bindValue(':n',$nom_cat);
    
    
            $req->execute();
            echo 'fffffffffff';
     
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    
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
