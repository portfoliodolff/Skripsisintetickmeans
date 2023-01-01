  
    <div class="container margin-b70">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-default navbar-utama nav-admin-data" role="navigation">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Data Penjualan</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                  <li><a href="<?php echo base_url() ?>managertoko/penjualanpdf" target="_blank"><i class="fa fa-print"></i> CETAK DATA</a></li>
                </ul>
                
                </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
              
            </div>
          </div>
          <div class="table-responsive">
            <table id="table_data" class="table table-bordered table-striped table-admin">
            <thead><tr> <th>NO</th><th>Kode Barang</th><th>Nama Barang</th><th>Size</th><th>Jenis</th><th>Merk</th><th>Jumlah Barang</th><th>Satuan</th><th>Total Pendapatan</th></tr></thead>
            <tbody>
             
          
            <?php foreach ($data_penjualan as $o): ?>   
              <tr> 
              <td><?=$o['id_penjualan'] ?></td>
            <td><?=$o['kodeitem'] ?></td>
            <td><?=$o['namaitem'] ?></td>
            <td><?=$o['size'] ?></td>
            <td><?=$o['jenis'] ?></td>
            <td><?=$o['merk'] ?></td>
            <td><?=$o['jumlahbarang'] ?></td>
            <td><?=$o['satuan'] ?></td>
            <td><?=$o['totalpendapatan'] ?></td>
            
            
            </tr>
            <?php endforeach ?>
            </tbody>
            </table>

          </div>

        </div>
        
