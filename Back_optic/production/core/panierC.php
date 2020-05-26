<?PHP
  class panierC {	
	function afficherpanier($r){
		$sql="SElECT *,a.reference as id From panier a inner join produit p on a.IDproduit= p.codeProd inner join commande c on a.IDcommande=c.reference where c.reference=$r ";
		//$sql="select * from panier";
		$db = config::getConnexion();
		
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function ajouterpanier($panier){
		$sql="insert into panier (IDproduit,quantite,IDcommande) values (:idproduit,:quantite,:idcommande)";
		 

		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $idproduit=$panier->getidproduit();
        $quantite=$panier->getquantite();
        $idcommande=$panier->getidcommande();



		 
		$req->bindValue(':idproduit',$idproduit);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':idcommande',$idcommande);
		
		
            $req->execute();
     
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function supprimerpanier($reference){
		$sql="DELETE FROM panier where IDcommande= :reference";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':reference',$reference);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}
?>

