
<div class="container margin-b70">
      <div class="row">
        <div class="col-md-12">
        <?php error_reporting(0); ?>
        <!-- <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Hasil Keputusan Dari Algoritma K-Means</h3>
              </div>
              <div class="panel-body">
              
                
                
                
                Panel content
              </div>
            </div>

            </div> -->
          <h1>GRAFIK</h1>

            <div id="body">
            <a class="btn btn-primary" href="<?php echo base_url(); ?>managertoko/tampilan_iterasi">Mulai Awal</a>
            <a class="btn btn-info" href="<?php echo base_url(); ?>managertoko/iterasi_kmeans_hasil">Tampilan Hasil</a>
            <a class="btn btn-info" href="<?php echo base_url(); ?>managertoko/grafiksebar">Tampilan Diagram Scatter</a><br><br>
            <div class="container">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Tampilan Grafik</h3>
              </div>
             
              <div class="panel-body">
             
<!-- <link rel="stylesheet" href="<?php echo base_url().'assets/css/morris.css'?>"> -->
 
    <h2>Chart using Codeigniter and Morris.js</h2>

    <div id="graph"></div>

    <!-- <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/raphael-min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/morris.min.js'?>"></script> -->
    <script>
        Morris.Bar({
          element: 'graph',
          data: <?php echo $data1;?>,
          xkey: 'namabarang',
          ykeys: ['c1', 'c2', 'c3'],
          labels: ['Purchase', 'Sale', 'Profit']
        });
    </script>
 


<p> grafik </p>

          
          </div>
            </div>

            </div>      
            </div>
           

            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
        </div>
      </div>
    </div>
