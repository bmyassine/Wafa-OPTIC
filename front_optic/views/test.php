<?php 
session_start();
$type='refresh';
$new=0;
 include"../config.php";
 if (isset($_GET['codeProd'])) {
 	if(isset($_SESSION['panier']) and ($_SESSION['panier'] > 0) )
	{  
		$_SESSION['total']--;
		$count=count($_SESSION['panier']);        
		$_SESSION['product_ids'] = array_column($_SESSION['panier'],'codeProd');
			foreach ($_SESSION['panier'] as $key => $row){
			    
				if ($row['codeProd']==$_GET['codeProd'] ) {
					 
					if ($row['quantite']==1) {
						 
						    $tp=0;
						    unset($_SESSION['panier'][$key]);
						    $_SESSION['panier'] = array_values($_SESSION['panier']);
					}
					else
					{
						 
						$_SESSION['panier'][$key]['quantite']--;
						$new=$_SESSION['panier'][$key]['quantite'];
						$type='yup';
						 $tp=$new*$row['prix'];
					}										 
				}
			}
		}
echo json_encode([
 			'type' => $type,
 			'q' => $new,
 			'total' => $_SESSION['total'],
			'ref' => $_GET['codeProd'],
			'tp' => $tp
 		]);}
 ?>