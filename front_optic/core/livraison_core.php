<?PHP
 
class livraison_core {

	function ajouter_livraison($livraison){
		$sql="insert into livraison (telephone,client,cmd,date,adresselivraison) values (:telephone,:client,:cmd,:date,:adresselivraison)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$telephone=$livraison->get_telephone();
        $cmd=$livraison->get_cmd();
        $client=$livraison->get_client();
  		$date=$livraison->get_date();
  		$adresselivraison=$livraison->get_adresselivraison();
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':cmd',$cmd);
		$req->bindValue(':client',$client);	
		$req->bindValue(':date',$date);		
		$req->bindValue(':adresselivraison',$adresselivraison);		
		$req->execute();
		    
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	 function afficher(){
		$sql="SElECT * From livraison";

		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
         }
	}
	 
	function supprimer_livraison($telephone){
		$sql="DELETE FROM livraison where telephone= :telephone";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':telephone',$telephone);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recuperer_livraison($telephone){
		$sql="SELECT * from livraison where telephone=$telephone";

		$db = config::getConnexion();
		try{
		$livraison=$db->query($sql);
		return $livraison;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
    
	function modifier_livraison($livraison){
		


		$sql="UPDATE livraison SET  cmd=:cmd,client=:client,date=:date,adresselivraison=:adresselivraison WHERE telephone=:telephone";

		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$telephone=$livraison->get_telephone();
        $cmd=$livraison->get_cmd();
        $client=$livraison->get_client();
        $date=$livraison->get_date();
        $adresselivraison=$livraison->get_adresselivraison();
		$datas = array( ':telephone'=>$telephone, ':cmd'=>$cmd,':client'=>$client,':date'=>$date,':adresselivraison'=>$adresselivraison);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':cmd',$cmd);
		$req->bindValue(':client',$client);
		$req->bindValue(':date',$date);
		$req->bindValue(':adresselivraison',$adresselivraison);
		
		
            $s=$req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
}

?>