<div class="container margin-b70">
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>Selamat Datang, Manager!</strong>.
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="panel panel-info">
            <?php foreach ($petunjuk as $p): ?>
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $p['title']?> </h3>
            </div>
            <div class="panel-body">  
                <H4 class = "text-justify"> <?php echo $p['ket']?> </H4>             
            </div>
            <?php endforeach ?>
          </div>
        </div>
      
      <div class="col-md-4">
          <div class="panel panel-info">
            <?php foreach ($datamanager as $p): ?>
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $p['title']?> </h3>
            </div>
            <div class="panel-body">  
                <H4 class = "text-justify"> 1. Manager Berwenang untuk dapat memproses data Clustering Kmeans menjadi sebuah kelompok. 
                <br>2. Manager Berwenang untuk dapat mencetak hasil Dari Data Barang, Data Proses dan Proses Kmeans Clustering. </H4>             
            </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info">
          <?php foreach ($datamanager as $w): ?>
            <div class="panel-heading">
              <h3 class="panel-title">DATA PROSES KMEANS </h3>
            </div>
            <BR>
            <div class="table-responsive">
            <table id="table_data" class="table table-bordered table-striped table-admin">
            <thead><tr><th>No Barang</th> <th>Kode Barang</th> <th>Nama Barang</th> <th>Recency</th> <th>Frequency</th> <th>Monetary</th> </tr></thead>
            
            <tbody>
            <?php foreach ($data_proses as $o): ?>    
            <tr>
            <td><?=$o['no_barang'] ?></td>
            <td><?=$o['kodebarang'] ?></td>
            <td><?=$o['namabarang'] ?></td>
            <td><?=$o['recency'] ?></td>
            <td><?=$o['frequency'] ?></td>
            <td><?=$o['klasifikasi'] ?></td>
           
          </tr>
            <?php endforeach ?>
            </tbody>
            </table>

          </div>
            <?php endforeach ?>
          </div>
        </div>
       
    </div>
    </div>
    </div>
