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
                <a class="navbar-brand" href="#">Data Penjualan</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                  <li><a href="<?php echo base_url() ?>administrasi/data_penjualan_add"><i class="fa fa-plus-circle"></i> Tambah Data</a></li>
                  <li><a href="<?php echo base_url() ?>administrasi/data_penjualan_excel"><i class="fa fa-plus-circle"></i> Tambah Data Excel</a></li>
                  <!-- <li><a href="<?php echo base_url() ?>administrasi/data_penjualan_delall"><i class="fa fa-trash-o" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')" class="fa fa-trash-o " rel="tooltip" data-original-title="Menghapus Semua Data ?" data-placement="top"></i> Clear All</a></p></li>   -->
                  
                </ul>
                
                </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
              
            </div>
          </div>
          <div class="table-responsive">
            <!-- <table id="table_data" class="table table-bordered table-striped table-admin">
            <thead><tr> <th>NO</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Size</th>
                    <th>Jenis</th>
                    <th>Merk</th>
                    <th>Jumlah Barang</th>
                    <th>Satuan</th>
                    <th>Total Pendapatan</th>
                    <th>Aksi</th></tr></thead>
            
            <tbody>
            <?php foreach ($data_penjualan as $o): ?>    
            <tr>
            <td><?=$o['id_penjualan'] ?></td>
            <td><?=$o['kodeitem'] ?></td>
            <td>(<?=$o['id_barang'] ?>) <?=$o['namaitem'] ?></td>
         
            <td><?=$o['size'] ?></td>
            <td><?=$o['jenis'] ?></td>
            <td><?=$o['merk'] ?></td>
            <td><?=$o['jumlahbarang'] ?></td>
            <td><?=$o['satuan'] ?></td>
            <td><?=$o['totalpendapatan'] ?></td>
            <td>
            <p><a href="<?=base_url();?>administrasi/data_penjualan_edit/<?=$o['id_penjualan'] ?>" class="btn btn-success" rel="tooltip" data-original-title="Mengubah data pada baris ini" data-placement="top"><i class="fa fa-pencil"></i> Edit</a></p>

            <p><a href="<?=base_url();?>administrasi/data_penjualan_del/<?=$o['id_penjualan'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')" class="btn btn-danger " rel="tooltip" data-original-title="Menghapus Data pada baris ini" data-placement="top"><i class="fa fa-trash-o"></i> Hapus</a></p></td>
            </tr>
            <?php endforeach ?>
            </tbody>
            </table> -->
            <table id="table_data" class="table table-bordered table-striped table-admin">
            <thead><tr> <th>NO</th>
            <th>Date</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Size</th>
            
           
                    <th>Jumlah Barang</th>
                    <th>Satuan</th>
                    <th>Total Pendapatan</th>
                    <th>Aksi</th></tr></thead>
            
            <tbody>
            <?php foreach ($data_transaksi as $o): ?>    
            <tr>
            <td><?=$o['id_transaksi'] ?></td>
            <td><?=$o['date'] ?></td>
            <td><?=$o['codebarang'] ?></td>
            <!-- <td>(<?=$o['id_barang'] ?>) <?=$o['namaitem'] ?></td> -->
            <td><?=$o['namabarang'] ?></td>
            <td><?=$o['size'] ?></td>
         
            <td><?=$o['jumlahsize'] ?></td>
            <td><?=$o['satuan'] ?></td>
            <td><?=$o['totalpendapatan'] ?></td>
            <td>
            <p><a href="<?=base_url();?>administrasi/data_penjualan_edit/<?=$o['id_transaksi'] ?>" class="btn btn-success" rel="tooltip" data-original-title="Mengubah data pada baris ini" data-placement="top"><i class="fa fa-pencil"></i> Edit</a></p>

            <p><a href="<?=base_url();?>administrasi/data_penjualan_del/<?=$o['id_transaksi'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')" class="btn btn-danger " rel="tooltip" data-original-title="Menghapus Data pada baris ini" data-placement="top"><i class="fa fa-trash-o"></i> Hapus</a></p></td>
            </tr>
            <?php endforeach ?>
            </tbody>
            </table>

          </div>

        </div>
        </div>
        
        </div>