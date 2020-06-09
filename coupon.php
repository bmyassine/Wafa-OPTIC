<?PHP
include "../../entities/coupon.php";
include "../../core/couponC.php";
include "mailing.php";
$coupon1C=new couponC();
$listecoupons=$coupon1C->affichercoupons();


//var_dump($listecoupons->fetchAll());
?>
<?php require_once('header.php'); ?>
<div class="right_col" role="main">
<HTML>
<body>
  <!-- SEARCH FORM -->
  <form class="form-inline ml-3" method="GET" action="recherche.php">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" name="recherche" value="search"> 
        <div class="input-group-append">
          <select class="form-control form-control-navbar" name="champs">
             <option value="idcoupon">id_coupon</option> 
             <option value="idc">id_client</option>
             <option value="code">code</option>
            
          </select>
           <input type="radio" name="tri"  value="decroissant" class="form-control form-control-navbar" > <p> ordre decroissant </p>
           <input type="radio" name="tri"  value="croissant" class="form-control form-control-navbar" checked="checked" > <p> ordre croissant </p>
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
	</form>
	<form method="POST">
<select name="cin" onchange="window.location.href = this.value">
	<option disabled selected value>selectionner un id </option>
	<?PHP $listeclient=$coupon1C->affichercoupon_client();
	foreach($listeclient as $client){	
	?>
	<option value="coupon.php?cin=<?php echo $client['cin']; ?>"><?PHP echo $client['cin']; ?></option>
	<?PHP } ?> 

</select>
<?php 
$total= 0;
if(isset($_GET['cin'])){
	$totalcommande=$coupon1C->affichercoupon_somme_commande($_GET['cin']);
	foreach($totalcommande as $commande){
		$total=$commande['total'];
}}
?>

<input type="text" value="<?php echo $total?>" disabled>
<input type="hidden" name="totalprix" value="<?php echo $total?>">
<input type="submit"  name="affecter" value="Affecter un coupon">
</form>
<table border="1">
<tr>
<td>ID coupon</td>
<td>ID client</td>
<td>Code</td>
<td>Date_fin</td>
<td>Pourcentage</td>
<td>utiliser</td>
<td>supprimer</td>


</tr>

<?PHP
foreach($listecoupons as $row){
	?>
	<tr>
	<td><?PHP echo $row['idcoupon']; ?></td>
	<td><?PHP echo $row['idc']; ?></td>
	<td><?PHP echo $row['code']; ?></td>
	<td><?PHP echo $row['date_fin']; ?></td>
    <td><?PHP echo $row['pourcentage']; ?></td>
	<td><?PHP
	
	if ($row['utiliser']==1){ ?> <?PHP 
		$x1="coupon utilise";
	echo "<button class='btn btn-danger'> $x1</button> "?><?php }else{?> <a href="modifiercoupon.php?idcoupon=<?php echo $row['idcoupon']; ?>"> <?PHP
	$x2="coupon non-utilise";  
	echo "<button class='btn btn-success'>$x2</button>" ?></a><?php } ?></td>
	
	<td><form method="POST" action="supprimercoupon.php">
	<input type="submit" name="supprimer" value="supprimer" class="btn btn-dark">
	<input type="hidden" value="<?PHP echo $row['idcoupon']; ?>" name="idcoupon">
	</form>
	</td>
	<!--<td><form method="POST" action="mailenvoi.php">
	<input type="submit" name="envoyer" value="envoyer" class="btn btn-warning">
	</form>
	</td>-->
	<td>

	</body>
</HTML>
</td>

	</tr>
	<?PHP
}
if(isset($_POST['affecter'])){

				
	date_default_timezone_set('Africa/Tunis');
	$date = date('m/d/Y', time());
	if($_POST['totalprix']>=1000){
		$pourcentage=20;
		$upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
		   $lower_case = "abcdefghijkmnpqrstuvwxyz";
		   $numbers = "123456789";


		   $generated_upper_case = substr(str_shuffle($upper_case),0,2);
		   $generated_lower_case = substr(str_shuffle($lower_case),0,2);
		   $generated_numbers = substr(str_shuffle($numbers),0,2);

		   $code = "$generated_upper_case$generated_lower_case$generated_numbers";
	}
	else if($_POST['totalprix']>=500){
		$pourcentage=10;
		$upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
		$lower_case = "abcdefghijkmnpqrstuvwxyz";
		   $numbers = "123456789";


		  $generated_upper_case = substr(str_shuffle($upper_case),0,2);
		  $generated_lower_case = substr(str_shuffle($lower_case),0,2);
		   $generated_numbers = substr(str_shuffle($numbers),0,2);

		   $code = "$generated_upper_case$generated_lower_case$generated_numbers";
	}
	else{
		$pourcentage=0;
	}
	if($pourcentage>0){
	$coupon= new coupon(NULL,$_GET['cin'],$code,$date,0,$pourcentage);
	$coupon1C->ajoutercoupon($coupon);
	$message="votre code coupon est ";
	$message.=$code;
	$listeclient=$coupon1C->affichercoupon_client();
	foreach($listeclient as $client)
	{	
	$adresse=$client['email'];
	$m=new mailing($adresse,'code coupon',$message);
	$m->envoyer();
	}
	
	}
}
?>
 </HTMl>
</div>
<?php require_once('footer.php'); ?>
</table>


