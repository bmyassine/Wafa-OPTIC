<?PHP
include "config.php"; 

include "Core/commandeC.php";
include "Core/panierC.php";

$commandeC=new commandeC();
$panier=new panierC();

if (isset($_POST["supprimer"])){
            $liste=$panier->supprimerpanier($_POST["reference"]);
            $commandeC->supprimer($_POST["reference"]);

             
        }
        if (isset($_POST["modifier"])){
            $commandeC->modifier($_POST["reference"]);
             
        }
if(isset($_GET['recherche']) and !empty($_GET['recherche']))
{
  
     $liste=$commandeC->recherche($_GET['recherche']);

}
else if(isset($_GET['tri'])){
  if($_GET['tri']=='date')
  {
      $liste=$commandeC->tri_date();
  }
  else if($_GET['tri']=='total')
  {
      $liste=$commandeC->tri_total();

  }
  else if($_GET['tri']=='reference')
  {
      $liste=$commandeC->tri_reference();

  }

}
else
{
    $liste=$commandeC->affichercommandes();

}
?>
<?php include 'header.php' ?>

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
  <thead>
    <tr>
      <th >reference</th>
      <th>Total</th>
      <th >Etat</th>
      <th >Date</th>
      <th >Modifier</th>
      <th>Supprimer </th>
      <th >DETAIL</th>
    </tr>
  </thead>
  <tbody >
    
  <?PHP
        foreach($liste  as $row){
            ?>        
<tr>
  <td id="reference"><?PHP echo $row['reference']; ?> </td>
  <td><a><?PHP echo $row['total']; ?></a></td>
  <td><?PHP echo $row['etat']; ?> </td>
  <td> <?PHP echo $row['date']; ?> </td>
  <td> 
    <form action="afficher_commande.php" METHOD="POST">
    <input type="hidden" value="<?PHP echo $row['reference']; ?>" name="reference">
<button type="submit" name="modifier" value="modifier" class="btn btn-success">Modifier</button>
    </form>
   
  </td>
  <td>
<form action="afficher_commande.php" METHOD="POST">
    <input type="hidden" value="<?PHP echo $row['reference']; ?>" name="reference">
    <button type="submit" name="supprimer"  class="btn btn-danger">Supprimer</button>
    </form>
   </td>
    <td>
      <form action="detail_commande.php" method="POST">
        <input type="hidden" value="<?PHP echo $row['reference']; ?>" name="reference">
        <button type="submit" class="btn btn-info">Detail</button>
      </form>

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
