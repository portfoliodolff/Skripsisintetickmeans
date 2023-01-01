<h2><center>Data Penjualan</center></h2>
<hr/>
<table border="1" width="100%" style="text-align:center;">
<thead><tr><th>No</th><th>Kode Barang</th><th>Nama Barang</th><th>Size</th><th>Jenis</th><th>Merk</th><th>Jumlah Barang</th><th>Satuan</th><th>Total Pendapatan</th></tr></thead>
           
<?php

                foreach($data_penjualan->result() as $h)
                {
              ?>
              <tr >
              <td><?php echo $h->id_penjualan; ?></td>
              <td><?php echo $h->kodeitem; ?></td>
              <td><?php echo $h->namaitem; ?></td>
              <td><?php echo $h->size; ?></td>
              <td><?php echo $h->jenis; ?></td>
              <td><?php echo $h->merk; ?></td>
              <td><?php echo $h->jumlahbarang; ?></td>
              <td><?php echo $h->satuan; ?></td>
              <td><?php echo $h->totalpendapatan; ?></td>
              </tr>
              <?php
                }
              ?>
</table>
