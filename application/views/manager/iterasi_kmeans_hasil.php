    <div class="container margin-b70">
      <div class="row">
        <div class="col-md-12">
        <?php error_reporting(0); ?>
          <h1>Data Hasil Iterasi</h1>
            <div id="body">
            <a class="btn btn-primary" href="<?php echo base_url(); ?>managertoko/tampilan_iterasi">Mulai Awal</a>
            <a class="btn btn-info" href="<?php echo base_url(); ?>managertoko/grafik">Tampilan Grafik</a><br><br>
            <div class="panel-body">
            <?php
              foreach($q->result_array() as $hq)
              {
            ?>
            <center><h3>Iterasi ke-<?php echo $hq['iterasi']; ?></h3></center>
            
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Tampilan Hasil K-Means</h3>
              </div>
           
            <div class="table-responsive">
            <table  id="table_data" class="table table-bordered table-admin">
              <tr align="center"><td>C1</td><td>C2</td><td>C3</td></tr>
              <?php
                $q2 = $this->db->query('select * from centroid_temp where iterasi='.$hq['iterasi'].'');
                foreach($q2->result() as $tq)
                {
                $warna1="";
                $warna2="";
                $warna3="";
                if($tq->c1==1){$warna1='#00BFFF';} else{$warna1='#FFD700';}
                if($tq->c2==1){$warna2='#00BFFF';} else{$warna2='#FFD700';}
                if($tq->c3==1){$warna3='#00BFFF';} else{$warna3='#FFD700';}
              ?>
              <tr align="center"><td bgcolor="<?php echo $warna1; ?>"><?php echo $tq->c1; ?></td><td bgcolor="<?php echo $warna2; ?>"><?php echo $tq->c2; ?></td><td bgcolor="<?php echo $warna3; ?>"><?php echo $tq->c3; ?></td></tr>
              <?php
                }
              ?>
            </table>
            </div>
            <?php
              }
            ?>
            </div>
            </div>
            </div>
            </div>
           
            <?php
              foreach($q->result_array() as $hq)
              {
            ?>
            <center><h3>Iterasi ke-<?php echo $hq['iterasi']; ?></h3></center>
            
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Tampilan Hasil K-Means</h3>
              </div>
              
            <div class="table-responsive">
            <table  id="table_data" class="table table-bordered table-admin">
              <tr align="center"><td>Kode Barang</td><td>Nama Barang</td><td>C1</td><td>C2</td><td>C3</td><td>Klasifikasi Tingkat Penjualan</td></tr>
              <?php
                $q2 = $this->db->query('select * from hasilkmeans INNER JOIN view_proses on hasilkmeans.namabarang = view_proses.namabarang where iterasi='.$hq['iterasi'].'');
                foreach($q2->result() as $tq)
                {
                $warna1="";
                $warna2="";
                $warna3="";

                $predikat="";
              

                if($tq->c1<=$tq->c2 and $tq->c1<=$tq->c3){$warna1='#00BFFF';} else{$warna1='#FFD700';}
                if($tq->c2<=$tq->c1 and $tq->c2<=$tq->c3  ){$warna2='#00BFFF';} else{$warna2='#FFD700';}
                if($tq->c3<=$tq->c1 and $tq->c3<=$tq->c2 ){$warna3='#00BFFF';} else{$warna3='#FFD700';}

                if($tq->c1<=$tq->c2){$predikat='Tertinggi(C1)';}
                elseif($tq->c2<=$tq->c1 and $tq->c2<=$tq->c3  ){$predikat='Sedang(C2)';}
                elseif($tq->c3<=$tq->c1 and $tq->c3<=$tq->c2 ){$predikat='Rendah(C3)';} else{$predikat='';}

              ?>
              <tr align="center"> 
              <td><?php echo $tq->kodebarang; ?></td><td><?php echo $tq->namabarang; ?></td><td bgcolor="<?php echo $warna1; ?>"><?php echo $tq->c1; ?></td><td bgcolor="<?php echo $warna2; ?>"><?php echo $tq->c2; ?></td><td bgcolor="<?php echo $warna3; ?>"><?php echo $tq->c3; ?></td><td><?php echo $predikat; ?></td> </tr>
              <?php
                }
              ?>
            </table>
            </div>
            <?php
              }
            ?>
            </div>
            </div>
            </div>
            </div>

<!-- 
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Hasil Keputusan Dari Algoritma K-Means</h3>
              </div>
              <div class="panel-body">
              <?php
                $q2 = $this->db->query('select * from hasilkmeans INNER JOIN view_proses on hasilkmeans.namabarang = view_proses.namabarang INNER JOIN hasil on hasilkmeans.no_barang = hasil.no_barang where iterasi= 2 order by c1 limit 2 ');
                foreach($q2->result() as $tq)
                {
          

                $predikat1="";
                $predikat2="";
                $predikat3="";
              
                $predikatt1="";
                $predikatt2="";
                $predikatt3="";
                $predikatt12="ANGGOTA C1 :";
                $predikatt22="ANGGOTA C2";
                $predikatt32="ANGGOTA C3";
               

                if($tq->c1<=$tq->c2){$predikat1='Tertinggi(C1)';if($predikat1=='Tertinggi(C1)'){
                  $predikatt1=$tq->namabarang;
                } else{$predikat='';}
              }
                elseif($tq->c2<=$tq->c1 and $tq->c2<=$tq->c3  ){$predikat2='Sedang(C2)';}
                elseif($tq->c3<=$tq->c1 and $tq->c3<=$tq->c2 ){$predikat3='Rendah(C3)';} else{$predikat='';}

                if($predikat1=='Tertinggi(C1)'){$predikatt1=$tq->namabarang;}else{$predikatt1='';}


              ?>
          

              <p><?php echo $predikatt12,$predikatt1; ?></p>
    
      
              <?php
                }
              ?>
              <br>
                <?php
                $q2 = $this->db->query('select * from hasilkmeans INNER JOIN view_proses on hasilkmeans.namabarang = view_proses.namabarang INNER JOIN hasil on hasilkmeans.no_barang = hasil.no_barang where iterasi= 2 order by c2  ');
                foreach($q2->result() as $tq)
                {
          

                $predikat1="";
                $predikat2="";
                $predikat3="";
              
                $predikatt1="";
                $predikatt2="";
                $predikatt3="";
                $predikatt12="ANGGOTA C1";
                $predikatt22="ANGGOTA C2";
                $predikatt32="ANGGOTA C3";
               

                if($tq->c1<=$tq->c2){$predikat1='Tertinggi(C1)';}
                elseif($tq->c2<=$tq->c1 and $tq->c2<=$tq->c3  ){$predikat2='Sedang(C2)';if($predikat2=='Sedang(C2)'){
                  $predikatt2=$tq->namabarang;
                } else{$predikat='';}
              }
                elseif($tq->c3<=$tq->c1 and $tq->c3<=$tq->c2 ){$predikat3='Rendah(C3)';} else{$predikat='';}

                if($predikat2=='Sedang(C2)'){$predikatt2=$tq->namabarang;}else{$predikatt1='';}


              ?>
          

              <p><?php echo$predikatt22,$predikatt2; ?></p>
    
      
              <?php
                }
              ?>
                 <?php
                $q2 = $this->db->query('select * from hasilkmeans INNER JOIN view_proses on hasilkmeans.namabarang = view_proses.namabarang INNER JOIN hasil on hasilkmeans.no_barang = hasil.no_barang where iterasi= 2 order by c3 limit 9');
                foreach($q2->result() as $tq)
                {
          

                $predikat1="";
                $predikat2="";
                $predikat3="";
              
                $predikatt1="";
                $predikatt2="";
                $predikatt3="";
                $predikatt12="ANGGOTA C1";
                $predikatt22="ANGGOTA C2";
                $predikatt32="ANGGOTA C3";
               

                if($tq->c1<=$tq->c2){$predikat1='Tertinggi(C1)';}
                elseif($tq->c2<=$tq->c1 and $tq->c2<=$tq->c3  ){$predikat2='Sedang(C2)';}
                elseif($tq->c3<=$tq->c1 and $tq->c3<=$tq->c2 ){$predikat3='Rendah(C3)';} else{$predikat='';}

                if($predikat3=='Rendah(C3)'){$predikatt3=$tq->namabarang;}else{$predikatt1='';}


              ?>
          

              <p><?php echo 'ANGGOTA C3 : ',$predikatt3; ?></p>
    
      
              <?php
                }
              ?>
            
         
              
              
             
                
                
              </div>
            </div> -->
            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
            </div>
            </div>
            </div>
            </div>
            </div>
            
        </div>
        
      </div>
    </div>
