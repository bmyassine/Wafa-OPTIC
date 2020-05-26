      <?php include 'header.php'; ?>

        <!-- page content -->
          <!-- top tiles -->
        
  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>statistique de prix</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group" >
                    
                  </div>
                </div>
              </div>
            </div>
        

  <?php 
$connect = mysqli_connect("localhost", "root", "", "bij","3308");
$query = "SELECT * FROM produit";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ codeProd:'".$row["codeProd"]."', prix:".$row["prix"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>
 

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

  <div class="container" style="width:1360px;">
     <br /><br />
   <div id="chart"></div>

 
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'codeProd',
 ykeys:['nom', 'prix'],
 labels:['codeProd', 'prix' ],
 hideHover:'auto',
 stacked:true
});
</script>
  
            



          
             



     <?php include 'footer.php'; ?>

     
















































