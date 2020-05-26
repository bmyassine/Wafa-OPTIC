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
                    <fieldset >
      <form name="f1"  method="POST" action="ajouts.php" onSubmit="return verif()">
        <center><legend><h2>Ajouter categorie</h2></legend></center>
        <table id="example1" class="table table-striped">
          <tr>
            <th> nom_cat </th>
            <th><input type="text" name="nom_cat" value=""/></th>
          </tr>
            <tr>
            <th> description </th>
            <th><input type="text" name="desc_cat" value=""/></th>
          </tr>
         
        </table>
        <br>
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

  