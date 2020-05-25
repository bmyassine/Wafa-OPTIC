<?php 
include "core/commentaireC.php";
include "core/compteC.php";
include "core/clientC.php";

session_start();
?>
<?php include 'index_sub/header.php' ?>
		<!--// Header -->
		<!-- Start Slider Area -->
		<div class="slider_area slide_active">

			<!-- Start Single Slide -->
			<div class="slide slide_fixed_height bg_image--1 d-flex align-items-center poss_relative animation__style01">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-12">

							<div class="slide_text">
								<h3>Unbelievable low prices</h3>
								<h1>GLASSES FOR
									<br> MEN & WOMEN</h1>
								<a href="#">Buy Now</a>
							</div>

							<div class="rotate_titlE">
								<h2>GET UP TO
									<span>65%</span> Off</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slide -->
			<!-- Start Single Slide -->
			<div class="slide slide_fixed_height bg_image--8 d-flex align-items-center poss_relative animation__style01">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-12">

							<div class="slide_text">
								<h3>Unbelievable low prices</h3>
								<h1>GLASSES FOR
									<br> MEN & WOMEN</h1>
								<a href="#">Buy Now</a>
							</div>

							<div class="rotate_titlE">
								<h2>GET UP TO
									<span>65%</span> Off</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slide -->
			<!-- Start Single Slide -->
			<div class="slide slide_fixed_height bg_image--1 d-flex align-items-center poss_relative animation__style01">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-12">

							<div class="slide_text">
								<h3>Unbelievable low prices</h3>
								<h1>GLASSES FOR
									<br> MEN & WOMEN</h1>
								<a href="#">Buy Now</a>
							</div>

							<div class="rotate_titlE">
								<h2>GET UP TO
									<span>65%</span> Off</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slide -->
			
		</div>
		
	<table class="table" style="height: 60%; width: 80%; margin-top: 5%; margin-bottom: 5%; margin-left: 10%;">
				<thead class="thead" style="background-color: black; color: white; font-size: 20px;" >
					<tr><th colspan="2">Discussion générale</th> </tr>
				</thead>
				<tr>
					<td style="color:black; font-size: 15px;" colspan="2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare tortor nisl, vel maximus turpis scelerisque sed. In pulvinar condimentum arcu, sit amet convallis quam pretium sollicitudin. Nunc vel nibh a sapien venenatis cursus. Maecenas iaculis urna scelerisque mattis sollicitudin. Vivamus id imperdiet augue, nec vestibulum turpis. Curabitur venenatis, urna condimentum pulvinar posuere, augue odio varius arcu, vitae aliquam mauris tortor eu purus. Nunc suscipit dictum lectus, vel consectetur orci lobortis ut. Fusce lobortis, augue non rhoncus eleifend, quam erat pulvinar risus, sit amet aliquam ex enim vitae ipsum. Praesent et metus quis lorem vulputate scelerisque eu non turpis. Quisque posuere bibendum augue et rhoncus. Proin at dolor ornare, pretium urna ut, euismod tortor.
					tincidunt odio. Sed ut viverra ante. Nam ac elit velit. Duis at egestas nunc. Aenean sem massa, venenatis maximus suscipit ac, accumsan vitae diam. Vivamus eros nibh, tempus ac blandit sit amet, maximus nec ante. Donec mauris dui, maximus et lorem et, lacinia lacinia ex. Donec at metus velit. Cras vitae ultricies arcu, a molestie felis. Vivamus et risus mauris. Integer ut dui id lectus tempor iaculis nec vulputate erat. Donec mollis gravida commodo. Nullam malesuada congue nisl, nec vehicula felis interdum quis. Morbi risus dolor, tincidunt id velit eget, dignissim scelerisque nisi.

				</td>

				</tr>
			
				<?php 

			    $gestion_commentaire= new commentaireC();

                $liste_commentaire=$gestion_commentaire->affichercommentaire();
                 foreach ($liste_commentaire as $commentaire) {
                  //recuperer compte 
              $gestion_compte = new compteC();
              $compte=$gestion_compte->recupererCompte($commentaire['id_compte']);
              foreach ($compte as $champcompte ) {
              	if($_SESSION['type']=='admin'){
              if($champcompte['type']=='client'){

                  //recuperer client 
              $gestion_client = new clientC();
              $client=$gestion_client->chercherClient($commentaire['id_compte'],'id','asc');
              foreach ($client as $champclient ) {
?>               <tr>
                 	<td  style="border:0;" rowspan="2"><img style="width: 350px;" src="<?php echo '../front/'.$champclient['photo']; ?>"></td> 
                 	<td style="border:0;"><?php echo $commentaire['texte'];?></td>
                 	<td style="border:0;"><a href="supprimercommentaire.php?id_commentaire=<?php echo $commentaire['id_commentaire']; ?>"><i class="far fa-trash-alt"></i></a></td>
                 </tr>
                 <tr>
                 	<td  style="text-align: right; border:0;"><?php echo $commentaire['id_compte'];?></td></tr>
               
				
<?php
                 }} else {?>
                 	<tr>
                 	<td  style="border:0;" rowspan="2"><i class="fas fa-user-shield fa-10x"></i></td> 
                 	<td style="border:0;"><?php echo $commentaire['texte'];?></td>
                 	                 	<td style="border:0;"><a href="supprimercommentaire.php?id_commentaire=<?php echo $commentaire['id_commentaire']; ?>"><i class="far fa-trash-alt"></i></a></td>

                 </tr>
                 <tr>
                 	<td  style="text-align: right; border:0;"><?php echo $commentaire['id_compte'];?></td></tr>
                <?php
                 }}else{
                 	//session client 
                 	if($champcompte['type']=='client'){

                  //recuperer client 
              $gestion_client = new clientC();
              $client=$gestion_client->chercherClient($commentaire['id_compte'],'id','asc');
              foreach ($client as $champclient ) {
?>               <tr>
                 	<td  style="border:0;" rowspan="2"><img style="width: 350px;" src="<?php echo '../front/'.$champclient['photo']; ?>"></td> 
                 	<td style="border:0;"><?php echo $commentaire['texte'];?></td>
                 </tr>
                 <tr>
                 	<td  style="text-align: right; border:0;"><?php echo $commentaire['id_compte'];?></td></tr>
               
				
<?php
                 }} else {?>
                 	<tr>
                 	<td  style="border:0;" rowspan="2"><i class="fas fa-user-shield fa-10x"></i></td> 
                 	<td style="border:0;"><?php echo $commentaire['texte'];?></td>

                 </tr>
                 <tr>
                 	<td  style="text-align: right; border:0;"><?php echo $commentaire['id_compte'];?></td></tr>

                 <?php
                 }} }}
				?>
						
				<tr>
					<td colspan="2">
				 <div class="contact_form">
                            <h3 class="ct_title">Ajouter un commentaire</h3>
                            <form  action="ajoutercommentaire.php" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input_box">
                                            <textarea name="commentaire" placeholder="commentaire"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit">Ajouter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>
				
			</table>
				
		<!-- End Shipping Service -->
		<?php include 'index_sub/footer.php' ?>