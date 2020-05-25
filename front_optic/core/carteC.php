<?php 
/**
 * 
 */
 class carteC
{
	
	function ajouterCarte($cartefid){
		$sql="insert into cartefid values (:points,:type,:cin)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $points=$cartefid->getPoints();
        $type=$cartefid->getTypeclient();
        $cin=$cartefid->getCin();
		$req->bindValue(':points',$points);
		$req->bindValue(':type',$type);
		$req->bindValue(':cin',$cin);		
		$req->execute();
        }
        catch (Exception $e){
            die ('Erreur: ajouter carte'.$e->getMessage());
        }
	}
	function afficherCarte() {
		$db=config::getConnexion();
		$sql="select * from cartefid";
		try
		{
			$liste=$db->query($sql);
			return $liste;

		}
		catch(Exception $e){
			die ('erreur : '.$e->getMessage());

		}
	}

	function supprimerCarte($cin){
		$sql="delete from cartefid where cin=:cin";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		
		$req->execute();
        }
        catch (Exception $e){
            die ('Erreur: supprimer carte'.$e->getMessage());
        }
	}
	function recupererCarte($cin)
	    {
		$db=config::getConnexion();
		$sql="select * from cartefid where cin='$cin'";
		try
		{
			$liste=$db->query($sql);
			return $liste;

		}
		catch(Exception $e){
			die ('erreur : '.$e->getMessage());

		}
	}
	function modifierCarte($carte){
		$sql="UPDATE cartefid SET points=:points WHERE cin=:cin";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$cin=$carte->GetCin();
        $points=$carte->getPoints();
        
		$req->bindValue(':cin',$cin);
		$req->bindValue(':points',$points);	
		$req->execute();
        }
        catch (Exception $e){
            die ('Erreur: modifier carte'.$e->getMessage());
        }
	}
}
?>