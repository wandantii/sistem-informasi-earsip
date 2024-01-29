<?php

	header("Content-type: application/vnd-ms-excel");
 
  	header("Content-Disposition: attachment; filename=arsip.xls");
 
?>

<?php foreach ($identitas as $ide) { ?>

	<table>
		<tr>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th><img src="<?php echo base_url('assets/img/'.$ide->logo); ?>" width="100" height="100" /></th>
		</tr>
		<tr>
			<th colspan="20">
				<?php echo $ide->nama; ?>
			</th>
		</tr>
		<tr>
			<th colspan="20">
				<?php echo $ide->alamat; ?>
			</th>
		</tr>
		<tr>
			<th colspan="20">
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
			<th colspan="20">Rekap Surat Masuk dan Keluar</th>
		</tr>
		<tr>
			<th>ID Arsip</th>
			<th>Dari/Kepada</th>
			<th>Alamat</th>
			<th>Kota</th>
			<th>Indeks</th>
            <th>No. Surat</th>
			<th>No. Urut</th>
			<th>Tgl. Surat</th>
			<th>Lampiran</th>
			<th>Perihal</th>
			<th>Tgl. Simpan</th>
            <th>File</th>
			<th>Unit</th>
			<th>B/R/SR</th>
			<th>Sistem Simpan</th>
			<th>Kode Pokok Soal</th>
			<th>Kode Simpan</th>
            <th>Isi Rigkas</th>
			<th>Arsiparis</th>
			<th>Catatan</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($arsip as $arsip) { ?>
		<tr>
			<td style="text-align:center"><?php echo $arsip->id_arsip; ?></td>
			<td><?php echo $arsip->dari_kepada; ?></td>
			<td><?php echo $arsip->alamat; ?></td>
			<td><?php echo $arsip->kota; ?></td>
            <td style="text-align:center"><?php echo $arsip->indeks; ?></td>
            <td style="text-align:center"><?php echo $arsip->no_surat; ?></td>
            <td style="text-align:center"><?php echo $arsip->no_urut; ?></td>
            <td style="text-align:center"><?php echo $arsip->tgl_surat; ?></td>
            <td style="text-align:center"><?php echo $arsip->lampiran; ?></td>
            <td><?php echo $arsip->perihal; ?></td>
            <td style="text-align:center"><?php echo $arsip->tgl_simpan; ?></td>
            <td><?php echo $arsip->file; ?></td>
            <td><?php echo $arsip->unit; ?></td>
            <td style="text-align:center"><?php echo $arsip->brsr; ?></td>
            <td><?php echo $arsip->sistem_simpan; ?></td>
			<?php if ($arsip->sistem_simpan != 'Pokok Soal') { ?>
				<td>&nbsp;</td>
			<?php } else { ?>
				<td><?php echo $arsip->pokok_soal; ?></td>
			<?php } ?>
            <td style="text-align:center"><?php echo $arsip->kode_simpan; ?></td>
            <td><?php echo $arsip->isi_ringkas; ?></td>
            <td><?php echo $arsip->arsiparis; ?></td>
            <td><?php echo $arsip->catatan; ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>