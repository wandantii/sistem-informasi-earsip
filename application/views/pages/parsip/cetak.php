<?php

	$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);

	$pdf->setPrintHeader(false);

	$pdf->setPrintFooter(false);

	$pdf->SetTitle('Kartu Bukti Pinjam - '.$data->id_pinjam);

	if ($arsip->jenis_surat == 'M'){
		$jenis = 'Dari';
	}
	else if ($arsip->jenis_surat == 'K'){
		$jenis = 'Kepada';
	}

	$pdf->AddPage();

	$html='
		<table border="1" cellpadding="5" style="font-size:10px;">
			<tr>
				<th colspan="4" style="text-align:center;font-size:12px;font-weight:bold;">KARTU BUKTI PINJAM ARSIP/BERKAS</th>
			</tr>
			<tr>
				<td rowspan="4">Peminjam</td>
				<td>Nama</td>
				<td colspan="2" style="font-weight:bold;">'.$data->nama_peminjam.'</td>
			</tr>
			<tr>
				<td>Unit Kerja</td>
				<td colspan="2" style="font-weight:bold;"></td>
			</tr>
			<tr>
				<td rowspan="2">Tanda Tangan</td>
				<td rowspan="2" colspan="2"></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;font-weight:bold;font-size:11px;">Arsip/Berkas yang dipinjam</th>
			</tr>
			<tr>
				<td>Pokok Surat</td>
				<td colspan="3" style="font-weight:bold;">'.$arsip->perihal.'</td>
			</tr>
			<tr>
				<td>Tanggal Surat</td>
				<td style="font-weight:bold;">'.$arsip->tgl_surat.'</td>
				<td>No. Surat</td>
				<td style="font-weight:bold;">'.$arsip->no_surat.'</td>
			</tr>
			<tr>
				<td>'.$jenis.'</td>
				<td colspan="3">
					<table cellpadding="2">
						<tr>
							<td style="font-weight:bold;">'.$arsip->dari_kepada.'</td>
						</tr>
						<tr>
							<td>'.$arsip->alamat.'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>Tanggal Pinjam</td>
				<td style="font-weight:bold;">'.$data->tanggal_pinjam.'</td>
				<td>Tanggal Kembali</td>
				<td style="font-weight:bold;">'.$data->batas_waktu.'</td>
			</tr>
			<tr>
				<td style="height:60px;">Paraf Petugas Arsip</td>
				<td colspan="3" style="height:60px;">
					<div style="height: 45px;"></div>
					<p style="font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( '.$data->petugas.' )</p>
				</td>
			</tr>
		</table>
	';

	$html2='
		<table border="1" cellpadding="5" style="font-size:10px;background-color:#e6f2ff">
			<tr>
				<th colspan="4" style="text-align:center;font-size:12px;font-weight:bold;">KARTU BUKTI PINJAM ARSIP/BERKAS</th>
			</tr>
			<tr>
				<td rowspan="4">Peminjam</td>
				<td>Nama</td>
				<td colspan="2" style="font-weight:bold;">'.$data->nama_peminjam.'</td>
			</tr>
			<tr>
				<td>Unit Kerja</td>
				<td colspan="2" style="font-weight:bold;"></td>
			</tr>
			<tr>
				<td rowspan="2">Tanda Tangan</td>
				<td rowspan="2" colspan="2"></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;font-weight:bold;font-size:11px;">Arsip/Berkas yang dipinjam</th>
			</tr>
			<tr>
				<td>Pokok Surat</td>
				<td colspan="3" style="font-weight:bold;">'.$arsip->perihal.'</td>
			</tr>
			<tr>
				<td>Tanggal Surat</td>
				<td style="font-weight:bold;">'.$arsip->tgl_surat.'</td>
				<td>No. Surat</td>
				<td style="font-weight:bold;">'.$arsip->no_surat.'</td>
			</tr>
			<tr>
				<td>'.$jenis.'</td>
				<td colspan="3">
					<table cellpadding="2">
						<tr>
							<td style="font-weight:bold;">'.$arsip->dari_kepada.'</td>
						</tr>
						<tr>
							<td>'.$arsip->alamat.'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>Tanggal Pinjam</td>
				<td style="font-weight:bold;">'.$data->tanggal_pinjam.'</td>
				<td>Tanggal Kembali</td>
				<td style="font-weight:bold;">'.$data->batas_waktu.'</td>
			</tr>
			<tr>
				<td style="height:60px;">Paraf Petugas Arsip</td>
				<td colspan="3" style="height:60px;">
					<div style="height: 45px;"></div>
					<p style="font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( '.$data->petugas.' )</p>
				</td>
			</tr>
		</table>
	';

	$pdf->WriteHTML($html, true, false, true, false, '');

	$pdf->WriteHTML($html2, true, false, true, false, '');

	$pdf->AddPage();

	$html3='
		<table border="1" cellpadding="5" style="font-size:10px;background-color:#ffe6ff;">
			<tr>
				<th colspan="4" style="text-align:center;font-size:12px;font-weight:bold;">KARTU BUKTI PINJAM ARSIP/BERKAS</th>
			</tr>
			<tr>
				<td rowspan="4">Peminjam</td>
				<td>Nama</td>
				<td colspan="2" style="font-weight:bold;">'.$data->nama_peminjam.'</td>
			</tr>
			<tr>
				<td>Unit Kerja</td>
				<td colspan="2" style="font-weight:bold;"></td>
			</tr>
			<tr>
				<td rowspan="2">Tanda Tangan</td>
				<td rowspan="2" colspan="2"></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;font-weight:bold;font-size:11px;">Arsip/Berkas yang dipinjam</th>
			</tr>
			<tr>
				<td>Pokok Surat</td>
				<td colspan="3" style="font-weight:bold;">'.$arsip->perihal.'</td>
			</tr>
			<tr>
				<td>Tanggal Surat</td>
				<td style="font-weight:bold;">'.$arsip->tgl_surat.'</td>
				<td>No. Surat</td>
				<td style="font-weight:bold;">'.$arsip->no_surat.'</td>
			</tr>
			<tr>
				<td>'.$jenis.'</td>
				<td colspan="3">
					<table cellpadding="2">
						<tr>
							<td style="font-weight:bold;">'.$arsip->dari_kepada.'</td>
						</tr>
						<tr>
							<td>'.$arsip->alamat.'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>Tanggal Pinjam</td>
				<td style="font-weight:bold;">'.$data->tanggal_pinjam.'</td>
				<td>Tanggal Kembali</td>
				<td style="font-weight:bold;">'.$data->batas_waktu.'</td>
			</tr>
			<tr>
				<td style="height:60px;">Paraf Petugas Arsip</td>
				<td colspan="3" style="height:60px;">
					<div style="height: 45px;"></div>
					<p style="font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( '.$data->petugas.' )</p>
				</td>
			</tr>
		</table>
	';

	$pdf->WriteHTML($html3, true, false, true, false, '');

	$pjm = 'kbpinjam-'.$data->id_pinjam.'.pdf';

	$pdf->Output($pjm, 'I');

?>

