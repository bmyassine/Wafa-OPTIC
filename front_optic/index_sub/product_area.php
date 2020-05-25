<?php 
include"configz.php";
include"core/produit.php";
$c=new configz();
$conn=$c->getConnection();
$e=new produit(69,"aa","dell","noir","laptop",55,"1998-05-03");
$resultat=$e->affichermen($conn);

?>
<div class="product_area section-pt-xl section-pb-xl bg-white">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section_title text-center">
							<h2>LATEST EYE GLASSES</h2>
							<p>Eye chasmish are very important for thos whos have some difficult in their eye to see every hing clearly and perfectly</p>
						</div>
					</div>
				</div>
				<div class="row mt--20">
					<?php foreach ($resultat as $row) { 
						 
					 ?>
					<!-- Start Single Product -->
					<div class="col-lg-3 col-xl-3 col-sm-6 col-12">
						<div class="product">
							<div class="thumb">
								<a href="assets/single-product.html">
									<img src="assets/images/<?php echo $row['image'] ; ?>" alt="<?php echo $row['image'] ; ?>">
								</a>
								<div class="product_action">
									<h4>
										<a href="assets/single-product.html"><?php echo $row['nom'] ; ?></a>
									</h4>
									<ul class="cart_action">
											<li>
												<a class="addpanier" href="views/panier.php?codeProd=<?php echo $row['codeProd'] ;?>">
													<img src="assets/img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="assets/#">
													<img src="assets/img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="assets/wishlist.html">
													<img src="assets/img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="assets/#">
													<img src="assets/img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
								</div>
								<div class="content">
									<h4>
										<a href="assets/single-product.html"><?php echo $row['nom'] ; ?></a>
									</h4>
									<ul class="price">
										<li><?php echo $row['prix'] ; ?></li>
										<li class="old-price"><?php echo $row['prix'] ; ?></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
					<!-- End Single Product -->
				</div>
			</div>
		</div>



  
   
