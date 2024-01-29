<?php

	header("Content-type: application/vnd-ms-excel");
 
  	header("Content-Disposition: attachment; filename=kembali_arsip.xls");
 
?>

<?php foreach ($identitas as $ide) { ?>

	<table>
		<tr>
			<th colspan="9">
				<?php echo $ide->nama; ?>
			</th>
		</tr>
		<tr>
			<th colspan="9">
				<?php echo $ide->alamat; ?>
			</th>
		</tr>
		<tr>
			<th colspan="9">
				Telp. <?php echo $ide->no_telp; ?>, email: <?php echo $ide->email; ?>, website: <?php echo $ide->web; ?>
			</th>
		</tr>
		<tr>
			<th></th>
		</tr>
	</table>
	
<?php } ?>

<br><br>

<table border="1" style="border-collapse:collapse;">
	<thead>
		<tr>
			<th colspan="9">Rekap Data Pengembalian Arsip</th>
		</tr>
		<tr>
			<th>ID Pinjam</th>
			<th>ID Arsip</th>
			<th>Nama Peminjam</th>
			<th>Tanggal Pinjam</th>
			<th>Batas Waktu</th>
            <th>Petugas</th>
			<th>Kondisi Pinjam</th>
			<th>Tanggal Kembali</th>
			<th>Kondisi Kembali</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($pinjam as $p) {
			if (($p->tanggal_kembali != '') && ($p->kondisi_kembali != '')){
		?>
		<tr>
			<td style="text-align:center"><?php echo $p->id_pinjam; ?></td>
			<td style="text-align:center"><?php echo $p->id_arsip; ?></td>
			<td><?php echo $p->nama_peminjam; ?></td>
			<td><?php echo $p->tanggal_pinjam; ?></td>
            <td><?php echo $p->batas_waktu; ?></td>
            <td><?php echo $p->petugas; ?></td>
            <td><?php echo $p->kondisi_pinjam; ?></td>
			<td><?php echo $p->tanggal_kembali; ?></td>
            <td><?php echo $p->kondisi_kembali; ?></td>
		</tr>
		<?php } } ?>
	</tbody>
</table>