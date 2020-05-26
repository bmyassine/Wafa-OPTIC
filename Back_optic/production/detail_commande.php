 <?PHP
 include "config.php"; 

include "Core/panierC.php";


if (isset($_POST["reference"])){
           
        
$panier=new panierC();
$liste=$panier->afficherpanier($_POST["reference"]);
}
else {
  header('Location: afficher_commande.php');
}
?>
<?php include 'header.php' ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tables <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            

            
                  

              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Table design <small>Custom design</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

 
                    <div class="table-responsive">
                      <div>
                        
                      <table   id="example1" class="table table-striped">
  <thead>
    <tr>
      <th>Client</th>
        <th>ID commande</th>
        <th>Photo</th>
        <th>Produit</th>
        <th>Quantité</th>
        <th>Date</th>
        <th>total</th>
        <th>Etat</th>
        
    </tr>
  </thead>
  <tbody>
   <?PHP
        foreach($liste  as $row){
            ?>       
<tr>
  <td class="txt-dark"><?php echo $row['userid']; ?></td>
    <td class="txt-dark"><?php echo $row['IDcommande']; ?></td>
    <td>
      <img src="images/product/<?php echo $row['image']; ?>" alt="iMac" width="80">
    </td>
    <td><?php echo $row['nom']; ?></td>
    <td><?php echo $row['quantite']; ?></td>
    <td><?php echo $row['date']; ?></td>
    <td><?php echo $row['total']; ?></td>
    <td>
                              
      <span><?php echo $row['etat']; ?></span>
    </td>
</tr>
  <?PHP
        }
        ?>
 
    </tbody>
</table>
                      </div>
                    </div>
              
            
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
