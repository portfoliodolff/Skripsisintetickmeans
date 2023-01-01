<h2><center>Data Barang</center></h2>
<hr/>
<table border="1" width="100%" style="text-align:center;">
<thead><tr><th>No</th><th>Number Code</th><th>Kode Barang</th><th>Nama Barang</th><th>Jenis</th></tr></thead>
           
	<?php 

	foreach($data_barang->result() as $row)
	{
		?>
		<tr>
			<td><?php echo $row->id_barang ?></td>
			<td><?php echo $row->no_barang; ?></td>
			<td><?php echo $row->kodebarang; ?></td>
			<td><?php echo $row->namabarang; ?></td>
			<td><?php echo $row->jenis; ?></td>
		</tr>
		<?php
	}
	?>
</table>