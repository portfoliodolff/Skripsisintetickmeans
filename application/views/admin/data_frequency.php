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
                <a class="navbar-brand" href="#">Data Frequency</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                  <!-- <li><a href="<?php echo base_url() ?>administrasi/data_frequency_add"><i class="fa fa-plus-circle"></i> Tambah Data</a></li>
                  <li><a href="<?php echo base_url() ?>administrasi/data_frequency_excel"><i class="fa fa-plus-circle"></i> Tambah Data Excel</a></li>
                  <li><a href="<?php echo base_url() ?>administrasi/data_frequency_delall"><i class="fa fa-trash-o" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')" class="fa fa-trash-o " rel="tooltip" data-original-title="Menghapus Semua Data ?" data-placement="top"></i> Clear All</a></p></li>   -->
                </ul>
                
                </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
              
            </div>
          </div>
          <div class="table-responsive">
            <table id="table_data" class="table table-bordered table-striped table-admin">
            <thead><tr><th>No</th><th>Kode Barang</th> <th>S</th> <th>M</th><th>L</th> <th>XL</th><th>XXL</th> <th>Total Size</th></tr></thead>
            <tbody>
            <?php
            $no = 1; 
            foreach ($data_frequency as $o): ?>    
            <tr>
           
            <td><?=$no++?></td>
            <td><?=$o['kodebarang'] ?></td>
            <td><?=$o['S'] ?></td>
            <td><?=$o['M'] ?></td>
            <td><?=$o['L'] ?></td>
            <td><?=$o['XL'] ?></td>
            <td><?=$o['XXL'] ?></td>
            <td><?=$o['total'] ?></td>
            </tr>
            <?php endforeach ?>
            </tbody>
            </table>

          </div>

        </div>

        
