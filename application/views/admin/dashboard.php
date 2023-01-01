    <div class="container margin-b70">
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>Selamat Datang, Administrator!</strong>.
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
            <?php foreach ($petunjuk as $p): ?>
            <div class="panel-heading">
              <h3 class="panel-title">WEWENANG ADMIN </h3>
            </div>
            <div class="panel-body">  
            <H4 class = "text-justify"> 1. Admin Berwenang untuk dapat memasukkan data untuk keperluan proses Clustering Kmeans. 
                <br>2. Admin Berwenang untuk dapat mengatur semua data yang akan digunakan dalam semua proses pada website ini. </H4>             
            </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info">
        
            <div class="panel-heading">
              <h3 class="panel-title">DATA BARANG </h3>
            </div>
            <BR>
            <div class="table-responsive">
            <table id="table_data" class="table table-bordered table-striped table-admin">
            <thead><tr><th>No</th> <th>Kode Barang</th> <th>Nama Barang</th> <th>Jenis</th></tr></thead>
           
            <tbody>
            <?php foreach ($data_barang as $o): ?>    
            <tr>
            <td><?=$o['id_barang'] ?></td>
          
            <td><?=$o['kodebarang'] ?></td>
            <td><?=$o['namabarang'] ?></td>
            <td><?=$o['jenis'] ?></td>
           
          </tr>
            <?php endforeach ?>
            </tbody>
            </table>

          </div>
         
          </div>
        </div>
       
    </div>
    </div>
    </div>
    </div>
