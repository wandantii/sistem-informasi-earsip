<?php

	header("Content-type: application/vnd-ms-excel");
 
  	header("Content-Disposition: attachment; filename=ekspedisi_intern.xls");
 
?>

<?php foreach ($identitas as $ide) { ?>

	<table>
		<tr>
			<th><img src="<?php echo base_url('assets/img/'.$ide->logo); ?>" width="100" height="100" /></th>
		</tr>
		<tr>
			<th colspan="5">
				<?php echo $ide->nama; ?>
			</th>
		</tr>
		<tr>
			<th colspan="5">
				<?php echo $ide->alamat; ?>
			</th>
		</tr>
		<tr>
			<th colspan="5">
				Telp. <?php echo $ide->no_telp; ?>, email: <?php echo $ide->email; ?>, website: <?php echo $ide->web; ?>
			</th>
		</tr>
		<tr>
			<th></th>
		</tr>
	</table>

<br><br>

<table border="1" style="border-collapse:collapse;">
	<thead>
         <tr>
			<th colspan="5">BUKU EKSPEDISI INTERN</th>
		</tr>
		<tr>
			<th>No Urut</th>
			<th>Tanggal Kirim</th>
			<th>Tanggal dan Nomor Surat</th>
			<th>Dikirim Kepada</th>
			<th>Penerima</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($arsip as $arsip) { ?>
            <?php if (($arsip->jenis_surat == 'M')){?>
		<tr>
			<td style="text-align:center"><?php echo $arsip->id_arsip; ?></td>
			<td><?php echo $arsip->tgl_simpan; ?></td>
			<td><?php echo $arsip->tgl_surat; ?> | <?php echo $arsip->no_surat; ?></td>
			<td style="text-align:center"><?php echo  $arsip->unit; ?></td>
			<td style="text-align:center">
				(<?php if($arsip->penerima == '') {
					echo "Belum diterima";
				} else {
					echo $arsip->penerima;
				} ?>)
			</td>
		</tr>
		<?php } } ?>
	</tbody>
</table>

<?php } ?>