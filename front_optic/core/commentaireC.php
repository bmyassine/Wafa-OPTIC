<?php 
/**
 * 
 */
include_once ("config.php");

class commentaireC 
{
	
function ajoutercommentaire($commentaire){
	$sql="insert into commentaire values (:id,:id_compte,:texte)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id=$commentaire->getid();
        $id_compte=$commentaire->getid_compte();
        $texte=$commentaire->gettexte();
		$req->bindValue(':id',$id);
		$req->bindValue(':id_compte',$id_compte);
		$req->bindValue(':texte',$texte);		
		$req->execute();
        }
        catch (Exception $e){
            die ('Erreur: ajouter commentaire'.$e->getMessage());
        }
}
function affichercommentaire(){
	$db=config::getConnexion();
		$sql="select * from commentaire";
		try
		{
			$liste=$db->query($sql);
			return $liste;

		}
		catch(Exception $e){
			die ('erreur : '.$e->getMessage());

		}
}
function supprimer($id){
	$sql="delete from commentaire where id_commentaire=:id";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		
		$req->execute();
        }
        catch (Exception $e){
            die ('Erreur: supprimer commentaire'.$e->getMessage());
        }
}
function total()
	    {
		$db=config::getConnexion();
		$sql="select *,count(*) as total from commentaire group by id_compte";
		try
		{
			$liste=$db->query($sql);
			return $liste;

		}
		catch(Exception $e){
			die ('erreur total commentaire: '.$e->getMessage());

		}
	}
}
?>