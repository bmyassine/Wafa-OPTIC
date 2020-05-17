<?php 
session_start();
 include"index_sub/header.php"; ?>


		<!-- Cart Overlay -->
        <div class="body_overlay"></div>
        <!-- Start Bradcaump area -->
        <div class="bradcaump_area bg_image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump_inner text-center">
                        	<h2 class="bradcaump-title">Shop</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Shop</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 


        <!-- Start Shop Area -->
        <div class="shop_area section-ptb-xl bg--white">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 order-2 order-lg-1 sm-mt--30 md-mt--30">
                        <div class="shop_sidebar">
                            <!-- Start Single Wedget -->
                            <div class="sidebar_widget search mb--60">
                                <h2 class="sidebar_title">Search</h2>
                                <div class="sidebar_search">
                                    <form action="#">
                                        <input type="text" placeholder="Search for:">
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- End Single Wedget -->

                            

                            <!-- Start Single Wedget -->
                            <div class="sidebar_widget widget_categories mb--60">
                                <h2 class="sidebar_title">Categories</h2>
                                <ul class="sidebar_categories">
                                <li><a href="shop.php">ALL</a></li>
                                    <li><a href="homme.php">MEN</a></li>
                                    <li><a href="femme.php">WOMEN</a></li>
                                    <li><a href="Enfant.php">KIDS</a></li>
                                    <li><a href="bestproduct.php">bestproduct</a></li>
                                 
                                </ul>
                            </div>
                            <!-- End Single Wedget -->

                            <!-- Start Single Wedget -->
                            <div class="sidebar_widget widget_banner mb--60">
                                <div class="sidebar_banner">
                                    <a href="#"><img src="assets/img/banner/sidebar-banner.png" alt="sidebar banner"></a>
                                </div>
                            </div>
                            <!-- End Single Wedget -->

                            <!-- Start Single Wedget -->
                            <div class="sidebar_widget widget_tag">
                                <h2 class="sidebar_title">Tags</h2>
                                <ul class="sidebar_tag">
                                    <li><a href="#">Anthologies</a></li>
                                    <li><a href="#">Art</a></li>
                                    <li><a href="#">Sports</a></li>
                                    <li><a href="#">Anthologies</a></li>
                                    <li><a href="#">Watch</a></li>
                                </ul>
                            </div>
                            <!-- End Single Wedget -->




                        </div>
					</div>
					
                    <div class="col-lg-9 col-12 order-1 order-lg-2">
						<div class="shop_product_area">
							<div class="shop-bar-area">
								<div class="shop-filter-tab">
									<div class="view_mode justify-content-center nav" role="tablist">
										<a class="active" href="#tab1" data-toggle="tab"> <i class="ti-layout-grid4-alt"></i></a>
										<a class="" href="#tab2" data-toggle="tab"><i class="ti-list"></i></a>
									</div>
								</div>
								<div class="shop-found-selector">
									<p>Showing 1–12 of 16 results</p>
									<select>
										<option>Sort by popularity</option>
										<option>Sort by average rating</option>
										<option>Sort by newness</option>
										<option>Sort by price: low to high</option>
										<option>Sort by price: high to low</option>
									</select>
								</div>
							</div>

							<div class="tab_content">

								<div class="row single_grid_product tab-pane fade show active" id="tab1" role="tabpanel">
                                    <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Afficher Produit</title>
  </head>
  <body>
   <?php
include"configz.php";
include"core/produit.php";
$c=new configz();
$conn=$c->getConnection();
$e=new produit(69,"aa","dell","noir","laptop",55,"1998-05-03");
$e1=new produit(252,"aa","hp","rouge","tel",22,"2015-09-01");
$resultat=$e->afficherenfant($conn);
$e1->afficherenfant($conn);

?>












          <?php
foreach ($resultat as $res) {

  ?>
									<!-- Start Single Product -->
									<div class="col-lg-3 col-xl-3 col-sm-6 col-12">
                        <div class="product">
                            <div class="thumb">
                                <a href="single-product.html">
                                    <img src="assets/images/<?php echo $res['image'];?>" alt="product img">
                                </a>
                                <div class="product_action">
                                    <h4>
                                        <a href="single-product.html"><?php echo $res['nom']; ?></a>
                                    </h4>
                                    <ul class="cart_action">
                                        <li>
                                            <a  class="addpanier" href="views/panier.php?codeProd=<?php echo $res['codeProd'] ;?>">
                                                <img src="assets/img/icons/add_to_cart.png" alt="icons">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/icons/compare_icon.png" alt="icons">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="assets/img/icons/wishlist_icon.png" alt="icons">
                                            </a>
                                        </li>
                                        <li>
                                            <a title="Quick View" class="quickview" href="#">
                                                <img src="assets/img/icons/quick_view.png" alt="icons">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h4>
                                        <a href="single-product.html"><?php echo $res['nom']; ?></a>
                                    </h4>
                                    <ul class="price">
                                        <li><?php echo $res['prix'].'$'; ?></li>
                                        <li class="old-price"><?php echo $res['prix'].'$'; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <?php
 }
 ?>
</html>
									</div>
									<!-- End Single Product -->
									
								</div>
							</div>
							<ul class="pagination_style">
								<li><a class="active" href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#"><i class="ti-angle-right"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
				
            </div>
        </div>
        <!-- End Shop Area -->

<?php  include"index_sub/footer.php"; ?>
