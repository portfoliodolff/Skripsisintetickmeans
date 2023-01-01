    
    <div class="container margin-b50 margin-t50">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <nav class="navbar navbar-default navbar-utama nav-admin-data" role="navigation">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <a class="navbar-brand" href="#"><i class="fa fa-plus-circle"></i> Tambah Data Monetary</a>"
            
              </div>
              
              </div><!-- /.container-fluid -->
            </nav>
            <div class="row">
        <div class="col-md-7 ">
            <?php echo $this->session->flashdata('notif') ?>
            <form method="POST" action="<?php echo base_url('administrasi/importExcelmonetary') ?>" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInputEmail1">UNGGAH FILE EXCEL</label>
                <input type="file" name="file" class="form-control">
              </div>

              <button type="submit" class="btn btn-success">UPLOAD</button>
           

           
                    
                    </button>&nbsp;&nbsp;<a href="<?php echo base_url() ?>administrasi/data_monetary_view" class="btn btn-default"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
                  </div>
                </div>
                </form>
        </div>
    </div>
    <br>
              </form>
            </div>
          </div>
        </div>
      </div>