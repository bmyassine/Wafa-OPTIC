<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['id']))
{ 
include "config.php";

}

else { 
  header('login-register.php');

}  
 
?>
<?php include 'index_sub/header.php'; ?>

        <!-- Start Bradcaump area -->
        <div class="bradcaump_area bg_image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump_inner text-center">
                            <h2 class="bradcaump-title">Garantie</h2>
                            <nav class="bradcaump-content">
                               
                                <span class="brd-separetor"></span>
                             
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <?php include "core/garantieC.php";
$garantieC = new garantieC();

$listeidclient = $garantieC->afficheridclient();
?>


        <!-- Start My Account Area -->
        <div class="my-account-area pt--120 pb--90">
            <div class="container">
                <div class="row">
                    <div class="ml-auto mr-auto col-lg-12">
                        <div class="checkout-wrapper">
                            <div id="faq" class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                       
                                    </div>
                                    <div id="my-account-1" class="panel-collapse collapse show">
                                        <div class="panel-body">
                                            <div class="billing-information-wrapper">
                                                <div class="account-info-wrapper">
                                                    <h4>Bénéfice de la garantie </h4>
                                               
                                                </div>
                                      
                                                <form method="post" name="formular" action="ajoutergarantie3.php">
                                                    <p class="form-row">
                                        
                                           
                                           <select name="userid" >

	<?PHP
	foreach($listeidclient as $client){	
	?>
	<option value="<?php echo $client['id']; ?>"><?PHP echo $client['id']; ?></option>
	<?PHP } ?> 

</select>
                                           
                                              <label id="userid" style="color:#b7a868;" ></label>
                                           </p>
                                            <!--<p class="form-row">
                                           <input type="num" placeholder="Numéro de Tel°"name="num"id="num" onblur="CheckNum()">
                                                <label id="ip" style="color:#b7a868;" ></label>
           
                                           </p>-->
                                              
                                          
                                                               
                                           <div class="shop-select">
                                       <label>Type de Panne <span class="required"></span></label>
                                           <select name="subject" id="subject">
                                           <option value="echanger un article">echanger un article</option>
                                        
                                           <option value="reparation">reparation </option>
                                           
                                           </select>                                       
                                           </div>  
                                             <!-- <p class="required">Ajouter une description </p>
                                       <p class="form-row order-notes">
                                       <textarea placeholder="Details" name="message" id="message"></textarea>
                                        </p>-->
                                        <p class="required">Date d'Achat :</p>
                                          <input type="Date" placeholder="Date demande" id="date" name="date" required>
                                           </p>
                                 
                             
                                           <div class="p-t-20">
                                     <input type="submit" value="Envoyez" class="btn btn-primary">
                                   </div>
                                        <!--<input type="submit"  id ="envoyer" name="envoyer" class="fa fa-chevron-right" value="  Envoyer">-->
                                         
                                       
                                   
                                       </form>
                                                <div class="billing-back-btn">
                                                    <div class="billing-back">
                                                        <a href="#">
                                                            <i class="fa fa-long-arrow-up"></i> back</a>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             

<?php include 'index_sub/footer.php'; ?>