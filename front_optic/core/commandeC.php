<?PHP
 class commandeC {	
	function affichercommandes(){
		//$sql="SElECT * From commande e inner join formationphp.commande a on e.reference= a.reference";
		$sql="select * from commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function ajoutercommande($commande){

		$sql="insert into commande (userid,total,etat) values (:userid,:total,:etat)";
		$sqll="SELECT LAST_INSERT_ID() as i";
        
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $total=$commande->gettotal();
        $etat=$commande->getetat();
        $userid=$commande->getuserid();



		 
		$req->bindValue(':total',$total);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':userid',$userid);
		
		
            $req->execute();
            $liste=$db->query($sqll);
			return $liste;
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
}
?>

