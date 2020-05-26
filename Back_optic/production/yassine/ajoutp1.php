    <?php include 'header.php'; ?>
  
 
        <!-- page content -->
         <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Form Validation</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 form-group pull-right top_search">
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

          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Form validation <small>sub title</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                          class="fa fa-wrench"></i></a>
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
    <fieldset >
      <form name="f1"  method="POST" action="ajoutp.php" onSubmit="return verif()" >
 <center><legend><h2> Ajout Produit </h2></legend></center>
         <table id="example1" class="table table-striped">
          <tr>
            <th> Code Produit </th>
            <th><input type="number" name="codeProd" value=""/></th>
          </tr>
          <tr>
            <th> Image </th>
            <th><input type="file" name="image" value=""/></th>
          </tr>
          <tr>
          <th> nom </th>
          <th><input type="text" name="nom" value=""/></th>
        </tr>
       
        <tr>

            <th> id_cat </th>
            <th><select name="id_cat" onchange="changeSelect(this)">
          <?php
        foreach ($resultat as $res) {
  ?>
<option value=<?php echo $res['id'];?> > <?php echo $res['id']." ".$res['nom_cat']; ?>           <?php
}
 ?></option>

  </select></td></th>

          </tr>
 
         <tr>
<td>type</td>
<td>
  <select name="typee" >
<option value="Lunettes de soleil">Lunettes de soleil</option>
<option value="Lunettes de vue">Lunettes de vue</option>
<option value="Lentilles">Lentilles</option>
<option value="Liquide nettoyant">Liquide nettoyant</option>
  </select></td>
</tr>
            <th> Prix </th>
            <th><input type="number" name="prix" value=""/></th>
          </tr>

       
        </table>
        <center>
        <td><button type="submit" name="Ajouter" value="Ajouter" class="btn btn-danger">Ajouter</button></td>
      </center>
      </form>
    </fieldset>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->
          <!-- top tiles -->
        
          <!-- /top tiles -->

 
                  
          
            



          
             

            
             

                <!-- Start to do list -->
               
                <!-- End to do list -->
                
                <!-- start of weather widget -->
               
        <!-- /page content -->

        <!-- footer content -->
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
  
         
    <script type="text/javascript">
    function verif()
    {
      var i=0;
      if(f1.codeProd.value=="")
      {
        alert("saisir votre code de produit");
        i--;
        return false;
      }
      if(f1.image.value=="")
      {
        alert("saisir votre image");
        i--;
        return false;
      }
      if(f1.nom.value=="")
      {
        alert("saisir votre nom");
        i--;
        return false;
      }
      if(f1.id_cat.value=="")
      {
        alert("saisir votre id_cat");
        i--;
        return false;
      }
      if(f1.typee.value=="")
      {
        alert("saisir votre type");
        i--;
        return false;
      }
      if(f1.dateC.value=="")
      {
        alert("saisir votre date de Creation");
        i--;
        return false;
      }
      if(i==6)
      {
        return true;
      }
    }

    </script>     
    <?php include 'footer.php'; ?>