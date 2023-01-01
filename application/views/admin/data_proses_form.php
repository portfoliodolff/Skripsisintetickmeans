    
    <div class="container margin-b50 margin-t50">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <nav class="navbar navbar-default navbar-utama nav-admin-data" role="navigation">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <a class="navbar-brand" href="#"><i class="fa fa-plus-circle">
                <?php
                  if($status == 'baru'){
                  echo "</i> Tambah Data Proses</a>";
                  }
                  else {
                  echo "</i> Edit Data Proses</a>";
                  }
                ?>
              </div>
              
              </div><!-- /.container-fluid -->
            </nav>
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="well">
              <form class="form-horizontal" role="form" method="post" action="<?=base_url();?>administrasi/data_proses_save" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="no_barang" value="<?=$no_barang ?>" />
                <input type="hidden" class="form-control" name="status" value="<?=$status ?>" />
               
                <div class="form-group">
                  <label for="inputKK" class="col-sm-3 control-label">Kode barang</label>
                  <div class="col-sm-6">
                  <div class="left-inner-addon">
                  <i class="fa fa-plus-circle"></i>
                      <input type="text" name="kodebarang" value="<?php echo $kodebarang ?>" required class="form-control" id="inputNama" placeholder="Number Code" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Nama Barang</label>
                  <div class="col-sm-6">
                  <div class="left-inner-addon">
                  <i class="fa fa-plus-circle"></i>
                      <input type="text" name="namabarang" required class="form-control" value="<?php echo $namabarang ?>"id="inputNama" placeholder="Kode Barang" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Recency</label>
                  <div class="col-sm-6">
    
                      <p>Data digenerate oleh data variable Jumlah Recency</p>
                      </div>
                      </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Frequency</label>
                  <div class="col-sm-6">
    
                      <p>Data digenerate oleh data variable Jumlah Frequency</p>
                      </div>
                      </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Monetary</label>
                  <div class="col-sm-6">
    
                      <p>Data digenerate oleh data variable Jumlah Monetary</p>
                      </div>
                      </div>
                
                <hr class="hr1">
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary bold"><i class="fa fa-save"></i>
                      <?php
                        if($status == 'baru'){
                          echo "Simpan";
                        }
                        else {
                          echo "Update";
                        }
                      ?>
                    </button>&nbsp;&nbsp;<a href="<?php echo base_url() ?>administrasi/data_proses_view" class="btn btn-default"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>