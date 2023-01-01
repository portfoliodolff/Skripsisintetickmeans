<h2><center>Data Kmeans</center></h2>
<hr/>
<table border="1" width="100%" style="text-align:center;">
              <tr align="center"><td>No</td><td>No Barang</td><td>Kode Barang</td><td>Nama Barang</td><td>C1</td><td>C2</td><td>C3</td><td>Predikat</td></tr>
              <?php
                $q2 = $this->db->query('select * from hasilkmeans INNER JOIN view_proses on hasilkmeans.namabarang = view_proses.namabarang INNER JOIN hasil on hasilkmeans.no_barang = hasil.no_barang  ');
                $no =1;
                foreach($q2->result() as $tq)
                {
                $warna1="";
                $warna2="";
                $warna3="";

                $predikat="";
              

                if($tq->c1<=$tq->c2){$warna1='#00BFFF';} else{$warna1='#FFD700';}
                if($tq->c2<=$tq->c1 and $tq->c2<=$tq->c3  ){$warna2='#00BFFF';} else{$warna2='#FFD700';}
                if($tq->c3<=$tq->c1 and $tq->c3<=$tq->c2 ){$warna3='#00BFFF';} else{$warna3='#FFD700';}

                if($tq->c1<=$tq->c2){$predikat='Tertinggi(C1)';}
                elseif($tq->c2<=$tq->c1 and $tq->c2<=$tq->c3  ){$predikat='Sedang(C2)';}
                elseif($tq->c3<=$tq->c1 and $tq->c3<=$tq->c2 ){$predikat='Rendah(C3)';} else{$predikat='';}

              ?>
              <tr> <td><?php echo $no++; ?></td>
              <td><?php echo $tq->no_barang; ?></td>
              <td><?php echo $tq->kodebarang; ?></td><td><?php echo $tq->namabarang; ?></td><td bgcolor="<?php echo $warna1; ?>"><?php echo $tq->c1; ?></td><td bgcolor="<?php echo $warna2; ?>"><?php echo $tq->c2; ?></td><td bgcolor="<?php echo $warna3; ?>"><?php echo $tq->c3; ?></td><td><?php echo $predikat; ?></td> </tr>
              <?php
                }
              ?>
            </table>
            </div>
           
            </div>
            </div>
            </div>
            </div>