<?php

	header("Content-type: application/vnd-ms-excel");
 
  	header("Content-Disposition: attachment; filename=arsip_keluar.xls");
 
?>

<?php foreach ($identitas as $ide) { ?>

	<table>
		<tr>
			<th></th>
			<th><img src="<?php echo base_url('assets/img/'.$ide->logo); ?>" width="100" height="100" /></th>
		</tr>
		<tr>
			<th colspan="7">
				<?php echo $ide->nama; ?>
			</th>
		</tr>
		<tr>
			<th colspan="7">
				<?php echo $ide->alamat; ?>
			</th>
		</tr>
		<tr>
			<th colspan="7">
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
			<th colspan="7">AGENDA SURAT KELUAR</th>
		</tr>
		<tr>
			<th>No Urut</th>
			<th>Tanggal Kirim</th>
			<th>Nomor Surat</th>
			<th>Tanggal Surat</th>
			<th>Kepada</th>
			<th>Isi Ringkas</th>
			<th>Keterangan</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($arsip as $arsip) { ?>
            <?php if ($arsip->jenis_surat == 'K'){?>
		<tr>
			<td style="text-align:center"><?php echo $arsip->id_arsip; ?></td>
			<td><?php echo $arsip->tgl_simpan; ?></td>
			<td><?php echo $arsip->no_surat; ?></td>
			<td><?php echo $arsip->tgl_surat; ?></td>
			<td style="text-align:center"><?php echo $arsip->dari_kepada; ?></td>
			<td><?php echo $arsip->isi_ringkas; ?></td>
			<td><?php echo $arsip->catatan; ?></td>
		</tr>
		<?php } } ?>
	</tbody>
</table>