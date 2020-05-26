<?php include 'header.php'; ?>

      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Categorie</h3>
            </div>

             
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="x_panel">
                
                <div class="x_content">
                       <center><legend><h2>tri categorie</h2></legend></center>
 <?PHP
include "../configz.php";
include "../core/categorie.php";

$categorie1=new categorie(22,255,"aa",14);
 $listeclient1=$categorie1->afficherASC();
 $listeclient2=$categorie1->afficherDESC();

?>

<center>
<form method="POST" action="tri1.php">
    
       
       
        
 
<center>
    <button type="submit" name="asc" value="ascendant" class="btn btn-danger">Ascendant</button>
    <button type="submit" name="desc" value="descendant" class="btn btn-danger">Descendant</button>
</center>




<?php

if (isset($_POST['asc'])) {
    ?>
   <table   id="example1" class="table table-striped">
  <thead>
    <tr>
      <th >ID</th>
      <th >Nom de categorie</th>

    </tr>
  </thead>
<?php
foreach($listeclient1 as $row)
{
    ?>
    <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['nom_cat']; ?></td>

    </tr>
    <?php
}
?>
    </table>
    
    <?PHP
}
 


if (isset($_POST['desc'])) {
    ?>
   <table   id="example1" class="table table-striped">
  <thead>
    <tr>
      <th >ID</th>
      <th >nom de categorie</th>

    </tr>
  </thead>

<?php
foreach($listeclient2 as $row){
    ?>
       <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['nom_cat']; ?></td>
    </tr>
    <?php
}
?>
</thead>
    </table>

    </form>
     </center>
    
    <?PHP
}
 

?>
 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
         
 
    <script type="text/javascript">
    function verif()
    {
      var i=0;
      if(f1.nom_cat.value=="")
      {
        alert("saisir votre nom_cat");
        i--;
        return false;
      }
      
      if(i==1)
      {
        return true;
      }
    }
</script>
<?php include 'footer.php'; ?>

  



 