    
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
                  echo "</i> Tambah Data Frequency</a>";
                  }
                  else {
                  echo "</i> Edit Data Frequency</a>";
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
              <form class="form-horizontal" role="form" method="post" action="<?=base_url();?>administrasi/data_frequency_save" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="id_frequency" value="<?=$id_frequency ?>" />
                <input type="hidden" class="form-control" name="status" value="<?=$status ?>" />
                <div class="form-group">
                  <label for="inputth" class="col-sm-3 control-label">Number Code</label>
                  <div class="col-sm-6">
                    <select name="no_barang" class="select2" required>
                      <option value=""> -- Pilih Kode- </option>
                      <?php foreach ($no_barang as $pt): ?>
                          <option value="<?=$pt['no_barang']?>"><?=$pt['no_barang']?> - <?=$pt['kodebarang']?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label for="inputKK" class="col-sm-3 control-label">Number Code</label>
                  <div class="col-sm-6">
                  <div class="left-inner-addon">
                  <i class="fa fa-plus-circle"></i>
                      <input type="text" name="no_barang" value="<?php echo $no_barang ?>" required class="form-control" id="inputNama" placeholder="Number Code" />
                      </div>
                  </div>
                </div> -->
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Kode Barang</label>
                  <div class="col-sm-6">
                  <div class="left-inner-addon">
                  <i class="fa fa-plus-circle"></i>
                      <input type="text" name="kodebarang" required class="form-control" value="<?php echo $kodebarang ?>"id="inputNama" placeholder="Kode Barang" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">S</label>
                  <div class="col-sm-6">
                  <div class="left-inner-addon">
                  <i class="fa fa-plus-circle"></i>
                      <input type="text" name="s" required class="form-control"  value="<?php echo $s ?>" id="inputNama" placeholder="S" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">M</label>
                  <div class="col-sm-6">
                  <div class="left-inner-addon">
                  <i class="fa fa-plus-circle"></i>
                      <input name="m" required type="text" class="form-control" id="inputNama" value="<?php echo $m ?>" placeholder="M" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">L</label>
                  <div class="col-sm-6">
                  <div class="left-inner-addon">
                  <i class="fa fa-plus-circle"></i>
                      <input type="text" name="l" required class="form-control"  value="<?php echo $l ?>" id="inputNama" placeholder="L" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">XL</label>
                  <div class="col-sm-6">
                  <div class="left-inner-addon">
                  <i class="fa fa-plus-circle"></i>
                      <input name="xl" required type="text" class="form-control" id="inputNama" value="<?php echo $xl ?>" placeholder="XL" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">XXL</label>
                  <div class="col-sm-6">
                  <div class="left-inner-addon">
                  <i class="fa fa-plus-circle"></i>
                      <input type="text" name="xxl" required class="form-control"  value="<?php echo $xxl ?>" id="inputNama" placeholder="XXL" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Total Size</label>
                  <div class="col-sm-6">
                  <div class="left-inner-addon">
                  <i class="fa fa-plus-circle"></i>
                      <input name="totalsize" required type="text" class="form-control" id="inputNama" value="<?php echo $totalsize ?>" placeholder="Total Size" />
                      </div>
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
                    </button>&nbsp;&nbsp;<a href="<?php echo base_url() ?>administrasi/data_frequency_view" class="btn btn-default"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>