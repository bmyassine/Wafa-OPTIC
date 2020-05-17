<?php 
session_start();
 include"index_sub/header.php";  
  include"config.php"; ?>


        <!-- Mini Cart Wrap Start -->
        <div class="mini-cart-wrap">

            <!-- Mini Cart Top -->
            <div class="mini-cart-top">
                <button class="close-cart">Close Cart
                    <i class="icofont icofont-close"></i>
                </button>
            </div>

            <!-- Mini Cart Products -->
            <ul class="mini-cart-products">
                <li>
                    <a class="image">
                        <img src="img/product/product-1.jpg" alt="Product">
                    </a>
                    <div class="content">
                        <a href="single-product.html" class="title">Simple Silacon Glasses</a>
                        <span class="price">Price: $59</span>
                        <span class="qty">Qty: 01</span>
                    </div>
                    <button class="remove">
                        <i class="fa fa-trash-o"></i>
                    </button>
                </li>
                <li>
                    <a class="image">
                        <img src="img/product/product-2.jpg" alt="Product">
                    </a>
                    <div class="content">
                        <a href="single-product.html" class="title">Simple Easin Glasses</a>
                        <span class="price">Price: $20</span>
                        <span class="qty">Qty: 02</span>
                    </div>
                    <button class="remove">
                        <i class="fa fa-trash-o"></i>
                    </button>
                </li>
                <li>
                    <a class="image">
                        <img src="img/product/product-3.jpg" alt="Product">
                    </a>
                    <div class="content">
                        <a href="single-product.html" class="title">Simple Macrox Glasses</a>
                        <span class="price">Price: $320</span>
                        <span class="qty">Qty: 03</span>
                    </div>
                    <button class="remove">
                        <i class="fa fa-trash-o"></i>
                    </button>
                </li>
            </ul>
            <!-- Mini Cart Bottom -->
            <div class="mini-cart-bottom">
                <h4 class="sub-total">Total:
                    <span>$120</span>
                </h4>
                <div class="button">
                    <a href="checkout.html">CHECKOUT</a>
                </div>
            </div>

        </div>
        <!-- Mini Cart Wrap End -->

        <!-- Cart Overlay -->
        <div class="body_overlay"></div>

        <!-- Start Bradcaump area -->
        <div class="bradcaump_area bg_image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump_inner text-center">
                            <h2 class="bradcaump-title">Cart</h2>
                            <nav class="bradcaump-content">
                                <a class="breadcrumb_item" href="index.html">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb_item active">Cart</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->

        <!-- Cart Page Start -->
        <div class="cart_area pt--120 pb--80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                         			
                            <!-- Cart Table -->
                            <div class="cart-table table-responsive mb--40">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">Image</th>
                                            <th class="pro-title">Product</th>
                                            <th class="pro-price">Price</th>
                                            <th class="pro-quantity">Quantity</th>
                                            <th class="pro-subtotal">Total</th>
                                            <th class="pro-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                      foreach ($_SESSION['panier'] as $keys => $row) {  
                                     if (isset($tot)) {
                        $tot+=($row['quantite'] * $row['prix'])  ;
                      }
                      else $tot=($row['quantite'] * $row['prix'])  ;
                      ?> 
                                        <form action="views/test.php"  method="POST">
                                            <input type="hidden" name="codeProd" value="<?php echo $row['codeProd'] ; ?>">
                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img src="assets/images/<?php echo $row['image'];?>" alt="Product"></a></td>
                                            <td class="pro-title"><a href="#"><?php echo $row['nom'];?></a></td>
                                            <td class="pro-price"><span><?php echo $row['prix'];?></span></td>
                                            <td class="pro-quantity"><div class="pro-qty"><input type="text" value="<?php echo $row['quantite'];?>"></div></td>
                                            <td class="pro-subtotal"><span><?php echo ($row['prix'] * $row['quantite']) ;?></span></td>
                                            <td class="pro-remove">                                            
                                            <button type="submit"><i class="fa fa-trash-o"></i></button>
                                            </td>       
                                        </tr>
                                        </form> 
                        <?php } ?>           
                                    </tbody>
                                </table>
                            </div>
                            
                        </form>	
                            
                        <div class="row">

                            <div class="col-lg-6 col-12 mb--15">
                                <!-- Calculate Shipping -->
                                <div class="calculate-shipping">
                                    <h4>Calculate Shipping</h4>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb--25">
                                                <select class="nice-select">
                                                    <option>Bangladesh</option>
                                                    <option>China</option>
                                                    <option>country</option>
                                                    <option>India</option>
                                                    <option>Japan</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-12 mb--25">
                                                <select class="nice-select">
                                                    <option>Dhaka</option>
                                                    <option>Barisal</option>
                                                    <option>Khulna</option>
                                                    <option>Comilla</option>
                                                    <option>Chittagong</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-12 mb--25">
                                                <input type="text" placeholder="Postcode / Zip">
                                            </div>
                                            <div class="col-md-6 col-12 mb--25">
                                                <input type="submit" value="Estimate">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Discount Coupon -->
                                <div class="discount-coupon">
                                    <h4>Discount Coupon Code</h4>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb--25">
                                                <input type="text" placeholder="Coupon Code">
                                            </div>
                                            <div class="col-md-6 col-12 mb--25">
                                                <input type="submit" value="Apply Code">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Cart Summary -->
                            <div class="col-lg-6 col-12 mb--40 d-flex">
                                <div class="cart-summary">
                                    <div class="cart-summary-wrap">
                                        <h4>Cart Summary</h4>
                                        <p>Sub Total <span> <?php echo $tot  ; ?></span></p>
                                        <p>Shipping Cost <span>$00.00</span></p>
                                        <h2>Grand Total <span><?php echo $tot  ; ?></span></h2>
                                    </div>
                                    <div class="cart-summary-button">
                                        <form action="views/ajoutercommande.php" method="POST">
                                        <input type="hidden" value="<?php echo $tot  ; ?>" name="total">
                                        <input type="hidden" value="no" name="userid">
                                         <?php  foreach ($_SESSION['panier'] as $keys => $row) {  ?>
                      
                      <input type="hidden" value="<?php echo $row['codeProd'] ; ?>" name="idproduit[]">
                      <input type="hidden" value="<?php echo $row['quantite'] ; ?>" name="quantite[]">

                <?php } ?>
                                        <input type="hidden" value="non livrée" name="etat">
                                        <button class="checkout-btn">Checkout</button>                
                                         </form>
                                       
                                        <button class="update-btn">Update Cart</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Page End --> 

<?php  include"index_sub/footer.php"; ?>
      