
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
            <a class="btn btn-info" href="<?php echo base_url(); ?>managertoko/iterasi_kmeans_hasil">Tampilan Hasil</a><br>
            <!-- <a class="btn btn-info" href="<?php echo base_url(); ?>managertoko/grafikbatang">Tampilan Diagram Batang</a><br><br> -->
            <!-- <a class="btn btn-info" href="<?php echo base_url(); ?>managertoko/grafiksebar">Tampilan Diagram Scatter</a><br><br> -->
            <br>
            <div class="container">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Tampilan Grafik</h3>
              </div>
             
              <div class="panel-body" >
    <canvas id="myChart"></canvas>
  </div>
 
  <script src="<?=base_url(); ?>assets/chart/chart.js"></script>
  <!-- <script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
    // type: 'bar',
    type: 'line',
    data: {
        labels: [
          <?php
            if (count($graph)>0) {
              foreach ($graph as $data) {
                echo "'" .$data->c1 ."',";
              }
            }
          ?>
        ],
        datasets: [{
            label: 'Rata Rata ',
            backgroundColor: '#ADD8E6',
            borderColor: '##93C3D2',
            data: [
              <?php
                if (count($graph)>0) {
                   foreach ($graph as $data) {
                    echo $data->rata_rata . ", ";
                  }
                }
              ?>
            ]
            
        }]
        
    },
});
 
  </script> -->

  <script type="text/javascript">
   var dataCanvas = document.getElementById('myChart').getContext('2d');

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 14;

var c1Data = {
  label: 'C1',
  data: [ 
    <?php
                if (count($graph)>0) {
                   foreach ($graph as $data) {
                    echo $data->c1 . ", ";
                  }
                }
              ?>
              ],
  backgroundColor: '#ffd700',
  borderWidth: 0,
  yAxisID: "y-axis-c1"
};

var c2Data = {
  label: 'C2',
  data: [<?php
                if (count($graph)>0) {
                   foreach ($graph as $data) {
                    echo $data->c2 . ", ";
                  }
                }
              ?>],
  backgroundColor: '#b22222',
  borderWidth: 0,
  // yAxisID: "y-axis-c2"
};
var c3Data = {
  label: 'C3',
  data: [<?php
                if (count($graph)>0) {
                   foreach ($graph as $data) {
                    echo $data->c3 . ", ";
                  }
                }
              ?>],
  backgroundColor: '#00080',
  borderWidth: 0,
  // yAxisID: "y-axis-c3"
};

var barangData = {
  labels: [<?php
            if (count($graph)>0) {
              foreach ($graph as $data) {
                echo "'" .$data->namabarang ."',";
              }
            }
          ?>],
  datasets: [c1Data, c2Data, c3Data]
};

var chartOptions = {
  scales: {
    xAxes: [{
      barPercentage: 1,
      categoryPercentage: 0.6
    }],
    yAxes: [{
      id: "y-axis-c1"
    }
    ]
    // }, {
    //   id: "y-axis-c2"
    // }, {
    //   id: "y-axis-c3"
    // }]
  }
};

var barChart = new Chart(dataCanvas, {
  // type: 'horizontalBar',
  type: 'bar',
  data: barangData,
  options: chartOptions
});

    </script>





          
          </div>
            </div>

            </div>      
            </div>
           

            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
        </div>
      </div>
    </div>
