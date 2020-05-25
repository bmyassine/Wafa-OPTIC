<?php 
/**
 * 
 */
 
class clientC
{
	function ajouterClient($id_compte,$client){
		$sql="insert into client values (:id_compte,:cin,:photo,:nom,:prenom,:email,:adresse,:dateN)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $cin=$client->GetCin();
        $photo=$client->GetPhoto();
        $nom=$client->GetNom();
        $prenom=$client->GetPrenom();
        $email=$client->GetEmail();
        $adresse=$client->GetAdresse();
        $dateN=$client->GetDateN();

		$req->bindValue(':id_compte',$id_compte);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':photo',$photo);	
		$req->bindValue(':nom',$nom);		
		$req->bindValue(':prenom',$prenom);	
		$req->bindValue(':email',$email);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':dateN',$dateN);		

		
	


		$req->execute();
        }
        catch (Exception $e){
            die ('Erreur: ajouter client'.$e->getMessage());
        }
	}
	function afficherClient() {
		$db=config::getConnexion();
		$sql="select * from client";
		try
		{
			$liste=$db->query($sql);
			return $liste;

		}
		catch(Exception $e){
			die ('erreur : '.$e->getMessage());

		}
	}
	function supprimerClient($cin){
		$sql="delete from client where cin=:cin";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		
		$req->execute();
        }
        catch (Exception $e){
            die ('Erreur: supprimer client'.$e->getMessage());
        }
	}
	function recupererClient($cin)
	    {
		$db=config::getConnexion();
		$sql="select * from client where cin='$cin'";
		try
		{
			$liste=$db->query($sql);
			return $liste;

		}
		catch(Exception $e){
			die ('erreur : '.$e->getMessage());

		}
	}
	function modifierClient($client){
		$sql="UPDATE client SET nom=:nom, prenom=:prenom, email=:email, adresse=:adresse, dateN=:dateN WHERE cin=:cin";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$cin=$client->GetCin();
        $nom=$client->GetNom();
        $prenom=$client->GetPrenom();
        $email=$client->GetEmail();
        $adresse=$client->GetAdresse();
        $dateN=$client->GetDateN();

		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);		
		$req->bindValue(':prenom',$prenom);	
		$req->bindValue(':email',$email);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':dateN',$dateN);		

		$req->execute();
        }
        catch (Exception $e){
            die ('Erreur: modifier client'.$e->getMessage());
        }
	}
	function chercherClient($chercher,$champs,$ordre) {
		$db=config::getConnexion();
		$sql="select * from client where $champs like '%$chercher%' ORDER BY $champs $ordre ";
		try
		{
			$liste=$db->query($sql);
			return $liste;

		}
		catch(Exception $e){
			die ('erreur chercherclient: '.$e->getMessage());

		}
	}
}
?>