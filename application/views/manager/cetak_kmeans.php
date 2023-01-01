  
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
                <a class="navbar-brand" href="#">Data Proses Kmeans</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                  <li><a href="<?php echo base_url() ?>managertoko/kmeanspdf" target="_blank"><i class="fa fa-print"></i> CETAK DATA </a></li>
                </ul>
                
                </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
              
            </div>
          </div>
          <div class="table-responsive">
            <table id="table_data" class="table table-bordered table-striped table-admin">
            <thead><tr align="center"><td>No Barang</td><td>Kode Barang</td><td>Nama Barang</td><td>C1</td><td>C2</td><td>C3</td><td>Predikat</td></tr>
             <tbody>
             <?php
                $q2 = $this->db->query('select * from hasilkmeans INNER JOIN view_proses on hasilkmeans.namabarang = view_proses.namabarang INNER JOIN hasil on hasilkmeans.no_barang = hasil.no_barang where iterasi = 2');
                foreach($q2->result() as $tq)
                {
                $warna1="";
                $warna2="";
                $warna3="";

                $predikat="";
              

                // if($tq->c1<=$tq->c2){$warna1='#00BFFF';} else{$warna1='#FFD700';}
                // if($tq->c2<=$tq->c1 and $tq->c2<=$tq->c3  ){$warna2='#00BFFF';} else{$warna2='#FFD700';}
                // if($tq->c3<=$tq->c1 and $tq->c3<=$tq->c2 ){$warna3='#00BFFF';} else{$warna3='#FFD700';}

                if($tq->c1<=$tq->c2){$predikat='Tertinggi(C1)';}
                elseif($tq->c2<=$tq->c1 and $tq->c2<=$tq->c3  ){$predikat='Sedang(C2)';}
                elseif($tq->c3<=$tq->c1 and $tq->c3<=$tq->c2 ){$predikat='Rendah(C3)';} else{$predikat='';}

              ?>
              <tr align="center"> <td><?php echo $tq->no_barang; ?></td>
              <td><?php echo $tq->kodebarang; ?></td><td><?php echo $tq->namabarang; ?></td><td bgcolor="<?php echo $warna1; ?>"><?php echo $tq->c1; ?></td><td bgcolor="<?php echo $warna2; ?>"><?php echo $tq->c2; ?></td><td bgcolor="<?php echo $warna3; ?>"><?php echo $tq->c3; ?></td><td><?php echo $predikat; ?></td> </tr>
              <?php
                }
              ?>
            </tbody>
            </table>

          </div>

        </div>

      

        
