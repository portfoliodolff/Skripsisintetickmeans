<div class="container margin-b70">
      <div class="row">
        <div class="col-md-12">
        <?php error_reporting(0); ?>
          <h1>Data Awal</h1>

            <div id="body">
         
            <a class="btn btn-primary" href="<?php echo base_url(); ?>managertoko/iterasi_kmeans">Proses K-means</a><br><br>
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Tampilan Data Awal K-Means</h3>
              </div>
              <div class="panel-body">
            <div class="table-responsive">
            <table  id="table_data" class="table table-bordered table-admin">
              <tr align="center"><td rowspan="2">Kode Barang</td><td rowspan="2">Nama Barang</td><td rowspan="2">Recency</td><td rowspan="2">Monetary</td><td rowspan="2">Frequency</td>
              <tbody>
              <?php foreach($data_proses->result_array() as $s){ ?>
              <tr><td><?php echo $s['kodebarang']; ?></td><td><?php echo $s['namabarang']; ?></td><td><?php echo $s['recency']; ?><td><?php echo $s['klasifikasi']; ?></td><td><?php echo $s['frequency']; ?></td></tr>
              <?php } ?>
            </table>
            </div>
            </div>
                
              
              
            </table>
            </div>
            </div>
              </div>
            </div>
            </div>

            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
        </div>
      </div>
    </div>
