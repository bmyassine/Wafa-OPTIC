<?php 
/**
 * 
 */


class compteC 
{
	public function Logedin($compte)
	{   $conn=$compte->getConn();
		$mot_de_passe=$compte->GetMot_de_passe();
		$id=$compte->GetId();
		$req="select * from compte where id='$id' && motdepasse='$mot_de_passe'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}
	function ajouterCompte($compte){
		$sql="insert into compte values (:id,:motdepasse,:type)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$compte->GetId();
        $motdepasse=$compte->GetMot_de_passe();
        $type=$compte->GetType();
		$req->bindValue(':id',$id);
		$req->bindValue(':motdepasse',$motdepasse);
		$req->bindValue(':type',$type);		
		$req->execute();
        }
        catch (Exception $e){
            die ('Erreur: ajouter compte'.$e->getMessage());
        }
	}
	function modifierCompte($id,$motdepasse,$type){
		$sql="UPDATE compte SET motdepasse=:motdepasse, type=:type WHERE id=:id";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		$req->bindValue(':motdepasse',$motdepasse);
		$req->bindValue(':type',$type);		
		$req->execute();
        }
        catch (Exception $e){
            die ('Erreur: modifier compte'.$e->getMessage());
        }
	}
function afficherCompte()
	    {
		$db=config::getConnexion();
		$sql="select * from compte";
		try
		{
			$liste=$db->query($sql);
			return $liste;

		}
		catch(Exception $e){
			die ('erreur : '.$e->getMessage());

		}
	}
	function supprimerCompte($id){
		$sql="delete from compte where id=:id";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		
		$req->execute();
        }
        catch (Exception $e){
            die ('Erreur: supprimer compte'.$e->getMessage());
        }
	}
	function recupererCompte($id)
	    {
		$db=config::getConnexion();
		$sql="select * from compte where id='$id'";
		try
		{
			$liste=$db->query($sql);
			return $liste;

		}
		catch(Exception $e){
			die ('erreur : '.$e->getMessage());

		}
	}
	
}
?>