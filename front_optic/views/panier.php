<?php 
 session_start();

include "../configz.php"; 
include "../core/produit.php"; 
$produit=new produit(69,"aa","dell","noir","laptop",55,"1998-05-03");
$c=new configz();
$conn=$c->getConnection();


if (isset($_GET['codeProd'])) {
	$prod=$produit->affichercodeProd($_GET['codeProd'],$conn);
    foreach ($prod as $e) { 	
	if(isset($_SESSION['panier']))
	{
		$_SESSION['total']++;
		$count=count($_SESSION['panier']);        
		$_SESSION['product_ids'] = array_column($_SESSION['panier'],'codeProd');
		
		if (!in_array($e['codeProd'],$_SESSION['product_ids'] )) {
            

			$_SESSION['panier'][$count]= array
		(
			'codeProd' => $e['codeProd'],
			'nom' => $e['nom'],
			'prix' => $e['prix'],
			'image' => $e['image'],	
			'quantite' => 1 
			 
		);
		$q=1;
		$tp=$e['prix'];
		}
		else
		{
			
			for ($i=0; $i < count($_SESSION['product_ids']) ; $i++) { 
				if ($_SESSION['product_ids'][$i]==$e['codeProd'] ) {
					$_SESSION['panier'][$i]['quantite']++;
					$q=$_SESSION['panier'][$i]['quantite'];
					$tp=$q*$e['prix'];

					 
				}
			}
			

		}
			
	}	 
	
	else
	{
		$_SESSION['total']=1; 
		$_SESSION['panier'][0]= array
		(
			'codeProd' => $e['codeProd'],	
			'nom' => $e['nom'],
			'prix' => $e['prix'],
			'image' => $e['image'],	
			'quantite' => 1
			 
		);
		$q=1;
		$tp=$e['prix'];
	}

    
}
 
  echo json_encode([
'total' => $_SESSION['total'],
'q' => $q,
'ref' => $_GET['codeProd'],
'tp' => $tp
 ]);
}
?>