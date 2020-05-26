 <?php include 'header.php'; ?>
        <!-- page content -->
          <!-- top tiles -->
        
          <!-- /top tiles -->

    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Produits</h3>
              </div>

              <div class="title_right">
               
              </div>
            </div>

            

            
                  

              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                 
                  <div class="x_content">
                                       <?php
  include "../configz.php";
  include "../core/produit.php";
  $c=new configz();
  $conn=$c->getConnection();
  $e=new produit(2486,"aa","IBM","noir","ordinateur",55,"2019-05-20");
  $resultat=$e->afficher($conn);
  
?>
<center>
<form name="Form2" method="POST" onsubmit="chercher.php">
</centre>

  <fieldset>

    
    <h4>Rechercher <input type="number" name="recherch" >
    <button type="submit" name="chercher" value="chercher" class="btn btn-danger">chercher</button></h4>
    
    <div align="center" >
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
      <th> Supprimer Produit</th>
      <th> Modifier Produit</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      
if((!isset($_POST['chercher'])) || ((isset($_POST['chercher']) && (!isset($_POST['recherch']))
   ))) {

      foreach ($resultat as $res){
      ?>
      <tr>
        <td><?php echo $res['codeProd'];?></td>
        <td><a><img class="" src="../images/product/<?php echo $res['image'];?>" style="width: 100px; height:100px;"></a></td>
        <td><?php echo $res['nom'];?></td>
        <td><?php echo $res['id_cat'];?></td>
        <td><?php echo $res['typee'];?></td>
        <td><?php echo $res['prix'];?></td>
        <td><?php echo $res['dateC'];?></td>
       <td><a href="sprod1.php">Supprimer</a></td>
       <td><a href="mprod1.php">Modifier</a></td>

      
      </tr>
      <?php
      }
    }
    else
    {
      if(($_POST['recherch'])!=null){
      $Yacine=$e->rechercher($_POST['recherch'],$conn);
      foreach ($Yacine as $res){
      ?>
      <tr>
        <td><?php echo $res['codeProd'];?></td>
        <td><a><img class="" src="../images/product/<?php echo $res['image'];?>" style="width: 100px; height:100px;"></a></td>
        <td><?php echo $res['nom'];?></td>
        <td><?php echo $res['id_cat'];?></td>
        <td><?php echo $res['typee'];?></td>
        <td><?php echo $res['prix'];?></td>
        <td><?php echo $res['dateC'];?></td>
       <td><a href="sprod1.php">Supprimer</a></td>
       <td><a href="mprod1.php">Modifier</a></td>
        
      </tr>
      <?php
    }
    }
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
      <!-- /page content -->
 



            
            
                  
          
            



          
             

            
             

                <!-- Start to do list -->
               
                <!-- End to do list -->
                
                <!-- start of weather widget -->
               
        <!-- /page content -->

        <!-- footer content -->
      
          
         
    </div>

<?php include 'footer.php' ?>
  