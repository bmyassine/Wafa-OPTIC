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
                       <?php

include"../configz.php";
include"../core/categorie.php";

$c=new configz();
$conn=$c->getConnection();
$e=new categorie(69,255,"aa",22);
$e1=new categorie(252,55,"zz",14);
$resultat=$e->recupererid($conn);
$e1->recupererid($conn);

?>
      <form name="f1"  method="POST" action="scategorie.php" onSubmit="return verif()" >
        <center><legend><h2> Supprimer categorie </h2></legend></center>
        <table id="example1" class="table table-striped">
          <tr>

            <th> id_cat </th>
            <th><select name="nom_cat">
          <?php
        foreach ($resultat as $res) {
  ?>
<option value=<?php echo $res['id']; ?>><?php echo $res['id']; ?>           <?php
}
 ?></option>
          </tr>
        </table>
        <br>
        <center>
        <td><button type="submit" name="Supprimer" value="Supprimer" class="btn btn-danger">Supprimer</button></td>
      </center>
      </form>
    </fieldset>
 
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

  
