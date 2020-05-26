  <?php include 'header.php'; ?>


        <!-- page content -->
          <!-- top tiles -->
        
          <!-- /top tiles -->

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

    <?php
include"../configz.php";
include"../core/produit.php";
$c=new configz();
$conn=$c->getConnection();
$e=new produit(69,"aa","dell","noir","laptop",55,"1998-05-03");
$e1=new produit(252,"aa","hp","rouge","tel",22,"2015-09-01");
$resultat=$e->afficher($conn);
$e1->afficher($conn);

?>

                    <div class="table-responsive">
                      <div>
                        <form name="f1"  method="POST" action="pdf.php" onSubmit="return verif()" >

                        <table   id="example1" class="table table-striped">
  <thead>
    <tr>
      <th >Code Produit</th>
      <th> Image </th>
      <th >nom</th>
      <th >id categorie</th>
      <th >Type</th>
      <th> Prix </th>
      <th >Date</th>
    </tr>
  </thead>
 <tbody>
          <?php
foreach ($resultat as $res) {

  ?>
<tr>
  <td><?php echo $res['codeProd']; ?></td>
  <td><a><img class="" src="../images/product/<?php echo $res['image'];?>" style="width: 100px; height:100px;"></a></td>
  <td><?php echo $res['nom']; ?></td>
  <td><?php echo $res['id_cat']; ?></td>
  <td><?php echo $res['typee']; ?></td>
  <td><?php echo $res['prix']; ?></td>
  <td><?php echo $res['dateC']; ?></td>


</tr>
<?php
}
?>
    </tbody>
</table>
<br>
        <center>
        <td><button type="submit" name="Imprimer" value="Imprimer" class="btn btn-danger">Imprimer</button></td>
      </center>
    </form>
                      </div>
                    </div>
              
            
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
  

<?php include 'footer.php' ?>
  