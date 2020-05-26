<?PHP
 class produitC {	
	function afficherproduits(){
		//$sql="SElECT * From produit e inner join formationphp.produit a on e.reference= a.reference";
		$sql="select * from produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
}
?>

