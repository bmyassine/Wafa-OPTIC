<?php 
session_start();
 include"index_sub/header.php";  
  include"config.php"; ?>

        <!-- Cart Overlay -->
        <div class="body_overlay"></div>

        <!-- Start Bradcaump area -->
        <div class="bradcaump_area bg_image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump_inner text-center">
                            <h2 class="bradcaump-title">Checkout</h2>
                            <nav class="bradcaump-content">
                                <a class="breadcrumb_item" href="index.html">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb_item active">Checkout</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->

        <!-- Checkout Page Start -->
        <div class="checkout_area pt--120 pb--80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        
                        <!-- Checkout Form s-->
                        <form action="views/ajouter_livraison.php" method="POST" class="checkout-form">
                            <div class="row">
                                
                                <div class="col-lg-9 mb--20">
                                    
                                    <!-- Billing Address -->
                                    <div id="billing-form" class="mb--40">
                                        <h4 class="checkout-title">Addresse de livraison</h4>

                                        <div class="row">

                                         
                                            <div class="col-md-6 col-12 mb--20">
                                                <label>identifiant</label>
                                                <input type="text" value="<?php echo $_SESSION['id']; ?>" readonly>
                                            </div>

                                            <div class="col-md-6 col-12 mb--20">
                                                <label>telephone* (vous recevrer un sms de confirmantion)</label>
                                                <input type="telephone" name="telephone">
                                            </div>
 

                                            <div class="col-12 mb--20">
                                                <label>Address*</label>
                                                <input type="text" placeholder="Addresse ..." name="adresselivraison">
                                             </div>
                                             <div class="col-12 mb--20">
                                                <button type="submit" style="padding: 10px 50px;" class="btn btn-dark ">Enregister l'adresse de la livraison</button>
                                             </div>
                                             

                                  


                                        </div>
                                    </div>
                                    
                                     

                                    </div>
                                    
                                </div>
                                
                                 
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Checkout Page End --> 


        <?php  include"index_sub/footer.php"; ?>
