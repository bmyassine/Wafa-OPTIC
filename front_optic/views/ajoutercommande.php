<?PHP
session_start();
ob_start();

include "../config.php"; 
include "../entities/commande.php";
include "../core/commandeC.php";
include "../entities/panier.php";
include "../core/panierC.php";

if (isset($_POST['total']) and isset($_POST['idproduit'])and isset($_POST['quantite'])){
 $commande1=new commande($_POST['userid'],$_POST['total'],'non payée');
$commande1C=new commandeC();
 $x=$commande1C->ajoutercommande($commande1);


$_SESSION['product_ids'] = array_column($_SESSION['panier'],'codeProd');
foreach($x as $row) {$p= $row['i']; }
ob_clean();
$n=count($_SESSION['product_ids']);
$pdf="	<img src='../assets/images/logopdf.png'>

		<h1>Votre commande</h1>

	    <table  class='minimalistBlack'>
	    <thead>
	    <tr>
		<th>Produit</th>
 		<th>Prix</th>
		<th>Quantite</th>
		<th>Total produit</th>
		</tr>
		<thead>
		<tbody>


";
for ($i=0; $i < $n ; $i++) { 
	$panier1=new panier($p,$_SESSION['panier'][$i]['quantite'],$_SESSION['panier'][$i]['codeProd']);
	$panier1C=new panierC();	 
	$panier1C->ajouterpanier($panier1);	
	$pdf.="
	<tr>
	<td>".$_SESSION['panier'][$i]['nom']."</td>
 	<td>".$_SESSION['panier'][$i]['prix']."</td>
	<td>".$_SESSION['panier'][$i]['quantite']."</td>
	<td>".($_SESSION['panier'][$i]['prix']*$_SESSION['panier'][$i]['quantite'])."</td>
	</tr>"	;
}
$pdf.="		<tr><td colspan='4'>  </td></tr>
			<tr><td colspan='4'>   </td></tr>
			<tr>
				<td colspan='3'></td>
				<td><strong>TOTAL COMMANDE</strong></td>				
				
			</tr>
			<tr>
				<td colspan='3'></td>
				<td><strong>".$_POST['total']." DT</strong></td>				
				
			</tr>";



$pdf.="
</tbody>
</table>
";
 $_SESSION['pdf']=$pdf;
unset($_SESSION['panier']);
unset($_SESSION['total']);
unset($_SESSION['product_ids']);
unset($_SESSION['tot']);
header('Location: ../mail_commande.php');


}
else{echo "verifier les champs"; var_dump($_POST);}

?>