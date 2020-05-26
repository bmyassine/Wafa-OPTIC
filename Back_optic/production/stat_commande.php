<?php

include "config.php"; 

 include "core/commandeC.php";
$commande=new commandeC();
$liste1=$commande->afficherstat(date('y'));
$liste2=$commande->afficherstat(date('y')-1);
$month = array_column($liste1, 'month');
$total = array_column($liste1, 'total');
$total2 = array_column($liste2, 'total');



$dataPoints1 = array( 
    array("label"=> $month[0], "y"=>  $total[0] ),
    array("label"=> $month[1], "y"=>  $total[1] ),  
    array("label"=> $month[2], "y"=>  $total[2] ),  
    array("label"=> $month[3], "y"=>  $total[3] ),
    array("label"=> $month[4], "y"=>  $total[4] ),
    array("label"=> $month[5], "y"=>  $total[5] ),
    array("label"=> $month[6], "y"=>  $total[6] ),
    array("label"=> $month[7], "y"=>  $total[7] ),
    array("label"=> $month[8], "y"=>  $total[8] ),
    array("label"=> $month[9], "y"=>  $total[9] ),
    array("label"=> $month[10], "y"=>  $total[10] ),
    array("label"=> $month[11], "y"=>  $total[11] ) 

);
$dataPoints2 = array(
    array("label"=> $month[0], "y"=>  $total2[0] ),
    array("label"=> $month[1], "y"=>  $total2[1] ), 
    array("label"=> $month[2], "y"=>  $total2[2] ), 
    array("label"=> $month[3], "y"=>  $total2[3] ),
    array("label"=> $month[4], "y"=>  $total2[4] ),
    array("label"=> $month[5], "y"=>  $total2[5] ),
    array("label"=> $month[6], "y"=>  $total2[6] ),
    array("label"=> $month[7], "y"=>  $total2[7] ),
    array("label"=> $month[8], "y"=>  $total2[8] ),
    array("label"=> $month[9], "y"=>  $total2[9] ),
    array("label"=> $month[10], "y"=>  $total2[10] ),
    array("label"=> $month[11], "y"=>  $total2[11] )  
);
  
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

 
                       
<div id="chartContainer" style="height: 370px; width: 100%; "></div>
                      
               
            
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
    <script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2",
  title:{
    text: "comparaison des revenues entre 2019 et 2020"
  },
  legend:{
    cursor: "pointer",
    verticalAlign: "center",
    horizontalAlign: "right",
    itemclick: toggleDataSeries
  },
  data: [{
    type: "column",
    name: "2019",
    indexLabel: "{y}",
    yValueFormatString: "$#0.##",
    showInLegend: true,
    dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
  },{
    type: "column",
    name: "2020",
    indexLabel: "{y}",
    yValueFormatString: "$#0.##",
    showInLegend: true,
    dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
function toggleDataSeries(e){
  if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
    e.dataSeries.visible = false;
  }
  else{
    e.dataSeries.visible = true;
  }
  chart.render();
}
 
}
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

  </body>
</html>
