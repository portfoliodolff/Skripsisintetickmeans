<div class="container margin-b70">
      <div class="row">
        <div class="col-md-12">
        <?php
        if($msg = $this->session->flashdata('sukses')){
        echo $msg;
        }
        ?>
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
                <a class="navbar-brand" href="#">Data Proses</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                  <!-- <li><a href="<?php echo base_url() ?>administrasi/data_proses_add"><i class="fa fa-plus-circle"></i> Tambah Data</a></li>
                  <li><a href="<?php echo base_url() ?>administrasi/data_proses_excel"><i class="fa fa-plus-circle"></i> Tambah Data Excel</a></li>
                  <li><a href="<?php echo base_url() ?>administrasi/data_proses_delall"><i class="fa fa-trash-o" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')" class="fa fa-trash-o " rel="tooltip" data-original-title="Menghapus Semua Data ?" data-placement="top"></i> Clear All</a></p></li>   -->
                </ul>
                
                </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
              
            </div>
          </div>
          <div class="table-responsive">
            <table id="table_data" class="table table-bordered table-striped table-admin">
            <thead><tr><th>Kode Barang</th> <th>Nama Barang</th> <th>Recency</th> <th>Frequency</th> <th>Monetary</th> </tr></thead>
            
            <tbody>
            <?php foreach ($data_proses as $o): ?>    
            <tr>
       
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

        </div>
        </div>
        </div>
        
