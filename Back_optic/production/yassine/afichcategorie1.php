<?php include 'header.php'; ?>

        <!-- page content -->
          <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Commande</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group" >
                    <form action="afficher_commande.php" method="GET">
                    <input type="text" name="recherche" class="form-control" placeholder="Search ...">
                    <span class="input-group-btn">
                      <button id="affichercommandes" class="btn btn-default" type="submit">Go!</button>
                    </span>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            

            
                  

              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                     <ul class="nav navbar-right panel_toolbox">
                     
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-sort"></i> Trier</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item "  href="afficher_commande.php?tri=date">trier par date</a>
                            <a class="dropdown-item" href="afficher_commande.php?tri=total">trier par total</a>
                            <a class="dropdown-item" href="afficher_commande.php?tri=reference">trier par reference</a>
                          </div>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

 
                    <div class="table-responsive">
                      <div>
                        <table   id="example1" class="table table-striped">
                        <body>
    <?php
include"../configz.php";
include"../core/categorie.php";
$c=new configz();
$conn=$c->getConnection();
$e=new categorie(69,255,"aa",22);
$e1=new categorie(252,55,"zz",14);
$resultat=$e->afficher($conn);
$e1->afficher($conn);

?>


    <table id="example1" class="table table-striped jambo_table bulk_action">
     <thead>
    <tr>
        <td>ID</td>
        <td>Nom de categorie</td>
        <td>Date de création</td>
        <td>Description de categorie</td>
      </tr>
  </thead>
   <tbody>  
      <tr>
        <?php
foreach ($resultat as $res) {

  ?>

<tr>

  
  <td><?php echo $res['id']; ?></td>
  <td><?php echo $res['nom_cat']; ?></td>
  <td><?php echo $res['date_d']; ?></td>
  <td><?php echo $res['description']; ?></td>
</tr>
<?php
}
 ?>
      </tr>
      </tbody> 

                        </table>
                      </div>
                    </div>
              
            
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        <!-- /page content -->
          <!-- top tiles -->
        
          <!-- /top tiles -->

         
        <!-- /page content -->

        <!-- footer content -->
      
          
         
    </div>

   <?php include 'footer.php' ?>