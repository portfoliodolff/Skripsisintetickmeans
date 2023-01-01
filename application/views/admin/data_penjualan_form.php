    
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
                  echo "</i> Tambah Data Barang</a>";
                  }
                  else {
                  echo "</i> Edit Data Barang</a>";
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
              <form class="form-horizontal" role="form" method="post" action="<?=base_url();?>administrasi/data_penjualan_save" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="id_penjualan" value="<?=$id_penjualan ?>" />
                <input type="hidden" class="form-control" name="status" value="<?=$status ?>" />
                <div class="form-group">
                  <label for="inputKK" class="col-sm-3 control-label">Kode barang</label>
                  <div class="col-sm-6">
                  <div class="left-inner-addon">
                  <i class="fa fa-plus-circle"></i>
                      <input type="text" name="kodeitem" readonly value="<?php echo $kodeitem ?>" required class="form-control" id="inputNama" placeholder="Number Code" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Nama Barang</label>
                  <div class="col-sm-6">
                  <div class="left-inner-addon">
                  <i class="fa fa-plus-circle"></i>
                      <input type="text" name="namaitem" required class="form-control" value="<?php echo $namaitem ?>"id="inputNama" placeholder="Kode Barang" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Size</label>
                  <div class="col-sm-6">
                  <div class="left-inner-addon">
                  <i class="fa fa-plus-circle"></i>
                      <input type="text" name="size" required class="form-control"  value="<?php echo $size ?>" id="inputNama" placeholder="Nama Barang" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Jenis</label>
                  <div class="col-sm-6">
                  <div class="left-inner-addon">
                  <i class="fa fa-plus-circle"></i>
                      <input name="jenis" required type="text" class="form-control" id="inputNama" value="<?php echo $jenis ?>" placeholder="Jenis barang" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputKK" class="col-sm-3 control-label">Merk</label>
                  <div class="col-sm-6">
                  <div class="left-inner-addon">
                  <i class="fa fa-plus-circle"></i>
                      <input type="text" name="merk" value="<?php echo $merk ?>" required class="form-control" id="inputNama" placeholder="Number Code" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Jumlah Barang</label>
                  <div class="col-sm-6">
                  <div class="left-inner-addon">
                  <i class="fa fa-plus-circle"></i>
                      <input type="text" name="jumlahbarang" required class="form-control" value="<?php echo $jumlahbarang ?>"id="inputNama" placeholder="Kode Barang" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Satuan </label>
                  <div class="col-sm-6">
                  <div class="left-inner-addon">
                  <i class="fa fa-plus-circle"></i>
                      <input type="text" name="satuan" required class="form-control"  value="<?php echo $satuan ?>" id="inputNama" placeholder="Nama Barang" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Total Pendapatan</label>
                  <div class="col-sm-6">
                  <div class="left-inner-addon">
                  <i class="fa fa-plus-circle"></i>
                      <input name="totalpendapatan" required type="text" class="form-control" id="inputNama" value="<?php echo $totalpendapatan ?>" placeholder="Jenis barang" />
                       </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputth" class="col-sm-3 control-label">Pilih Barang</label>
                  <div class="col-sm-6">
                    <select name="no_barang" class="select2" required>
                      <option value=""> -- Pilih Barang- </option>
                      <?php foreach ($no_barang as $pt): ?>
                          <option value="<?=$pt['no_barang']?>"><?=$pt['no_barang']?> - <?=$pt['namabarang']?></option>
                      <?php endforeach ?>
                    </select>
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
                    </button>&nbsp;&nbsp;<a href="<?php echo base_url() ?>administrasi/data_penjualan_view" class="btn btn-default"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>