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
function afficherstat($x){
         $db = config::getConnexion();
        try{
        $q = $db->prepare("SELECT IFNULL(SUM(u.total),0) AS total, DATE_FORMAT(merge_date,'%b') AS month, YEAR(m.merge_date) AS year FROM ( SELECT '$x-01-01' AS merge_date UNION SELECT '$x-02-01' AS merge_date UNION SELECT '$x-03-01' AS merge_date UNION SELECT '$x-04-01' AS merge_date UNION SELECT '$x-05-01' AS merge_date UNION SELECT '$x-06-01' AS merge_date UNION SELECT '$x-07-01' AS merge_date UNION SELECT '$x-08-01' AS merge_date UNION SELECT '$x-09-01' AS merge_date UNION SELECT '$x-10-01' AS merge_date UNION SELECT '$x-11-01' AS merge_date UNION SELECT '$x-12-01' AS merge_date ) AS m LEFT JOIN commande u ON MONTH(m.merge_date) = MONTH(u.date) AND YEAR(m.merge_date) = YEAR(u.date) GROUP BY m.merge_date ORDER BY MONTH(m.merge_date)");
        //$q->bindValue(':r', $r);
        $q->execute();
        if ($q->rowCount() > 0){
        $check = $q->fetchAll(); 
        return $check;
        }
        else {
            return null ;
        }
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function recherche($r){
         $db = config::getConnexion();
        try{
        $q = $db->prepare("SELECT * FROM commande WHERE etat LIKE CONCAT( '%',:r, '%') OR reference LIKE CONCAT( '%',:r, '%') OR date LIKE CONCAT( '%',:r, '%')");
        $q->bindValue(':r', $r);
        $q->execute();
        if ($q->rowCount() > 0){
        $check = $q->fetchAll(); 
        return $check;
        }
        else {
            return array() ;
        }
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
 function tri_total(){
         $db = config::getConnexion();
        try{
        $q = $db->prepare("SELECT * FROM commande ORDER BY total");
        //$q->bindValue(':r', $r);
        $q->execute();
        if ($q->rowCount() > 0){
        $check = $q->fetchAll(); 
        return $check;
        }
        else {
            return null ;
        }
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function tri_date(){
         $db = config::getConnexion();
        try{
        $q = $db->prepare("SELECT * FROM commande ORDER BY date");
        //$q->bindValue(':r', $r);
        $q->execute();
        if ($q->rowCount() > 0){
        $check = $q->fetchAll(); 
        return $check;
        }
        else {
            return null ;
        }
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function tri_reference(){
         $db = config::getConnexion();
        try{
        $q = $db->prepare("SELECT * FROM commande ORDER BY reference");
        //$q->bindValue(':r', $r);
        $q->execute();
        if ($q->rowCount() > 0){
        $check = $q->fetchAll(); 
        return $check;
        }
        else {
            return null ;
        }
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	function ajoutercommande($commande){
		$sql="insert into commande (total,etat) values (:total,:etat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $total=$commande->gettotal();
        $etat=$commande->getetat();



		 
		$req->bindValue(':total',$total);
		$req->bindValue(':etat',$etat);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function supprimer($reference){
		$sql="DELETE FROM commande where reference= :reference";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':reference',$reference);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifier($reference){
		$sql="UPDATE commande SET etat='livrée' where reference= :reference";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':reference',$reference);
		try{
            $req->execute();
            
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}
?>

