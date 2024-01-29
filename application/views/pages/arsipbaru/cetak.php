<?php

	$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);

	$pdf->setPrintHeader(false);

	$pdf->setPrintFooter(false);

	$pdf->SetTitle('Kartu Kendali - '.$data->id_arsip);

	$pdf->AddPage();

	if ($data->jenis_surat == 'M'){
		$jenis = 'Dari / <del>Kepada</del>';
		$pilih = '
			<table>
				<tr>
					<td width="20px" style="text-align:center;border:1px solid black;">
						<div style="font-weight:bold;">M</div>
					</td>	
				</tr>
			</table>
		';
	}
	else {
		$pilih = '
			<table>
				<tr>
					<td width="20px" style="text-align:center;">
						<div>M</div>
					</td>	
				</tr>
			</table>
		';
	}

	if ($data->jenis_surat == 'K'){
		$jenis = '<del>Dari</del> / Kepada';
		$pilih2 = '
			<table>
				<tr>
					<td width="20px" style="text-align:center;border:1px solid black;">
						<div style="font-weight:bold;">K</div>
					</td>	
				</tr>
			</table>
		';
	}
	else {
		$pilih2 = '
			<table>
				<tr>
					<td width="20px" style="text-align:center;">
						<div>K</div>
					</td>	
				</tr>
			</table>
		';
	}

	if ($data->catatan == ''){
		$catatan = '-';
	}
	else {
		$catatan = $data->catatan;
	}
	
	$html = '
		<table border="1" cellpadding="5" style="font-size:10px;">
			<tr>
				<th colspan="3" style="text-align:center;font-size:12px;font-weight:bold;">KARTU KENDALI</th>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td width="75px;" style="color:black;">Indeks/Subyek:</td>
							<td style="font-weight:bold;font-size:11px;">'.$data->indeks.'</td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td width="35px;" style="color:black;">Kode:</td>
							<td style="font-weight:bold;font-size:11px;width:73%;">'.$data->kode_simpan.'</td>
						</tr>
					</table>
				</td>
				<td>
					<table cellpadding="2">
						<tr>
							<td width="25px;" style="color:black;">Tgl.</td>
							<td style="font-weight:bold;width:70%;">'.$data->tgl_simpan.'</td>
							<td width="22px">'.$pilih.'</td>
						</tr>
						<tr>
							<td width="50px;" style="color:black;">No. Urut:</td>
							<td style="font-weight:bold;width:55%;">'.$data->id_arsip.'</td>
							<td width="22px">'.$pilih2.'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table>
						<tr>
							<td width="27px;" style="color:black;">Hal:</td>
							<td style="font-weight:bold;width:92%;">'.$data->perihal.'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table>
						<tr>
							<td width="60px;" style="color:black;">Isi Ringkas:</td>
							<td style="width:87%;text-align:justify;">'.$data->isi_ringkas.'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table cellpadding="2">
						<tr>
							<td style="color:black;width:67px;">Lampiran</td>
							<td style="width:15px;color:black;">:</td>
							<td style="font-weight:bold;width:82%;">'.$data->lampiran.'</td>
						</tr>
						<tr>
							<td rowspan="2" style="color:black;width:67px;">'.$jenis.'</td>
							<td rowspan="2" style="width:15px;color:black;">:</td>
							<td style="font-weight:bold;width:82%;">'.$data->dari_kepada.'</td>
						</tr>
						<tr>
						<td style="width:82%;">'.$data->alamat.'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td width="45px" style="color:black;">Tgl. Surat</td>
							<td width="15px" style="color:black;">:</td>
							<td style="font-weight:bold;width:57%;">'.$data->tgl_surat.'</td>
						</tr>
					</table>
				</td>
				<td colspan="2">
					<table>
						<tr>
							<td width="45px" style="color:black;">No. Surat</td>
							<td width="15px" style="color:black;">:</td>
							<td style="font-weight:bold;width:79%;">'.$data->no_surat.'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td rowspan="2" colspan="2">
					<table>
						<tr>
							<td width="45px" style="color:black;">Pengolah</td>
							<td width="15px" style="color:black;">:</td>
							<td style="font-weight:bold;width:80%;">'.$data->arsiparis.'</td>
						</tr>
					</table>
				</td>
				<td rowspan="2" style="color:black;">Paraf:</td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td colspan="3">
					<table>
						<tr>
							<td width="45px" style="color:black;">Catatan</td>
							<td width="15px" style="color:black;">:</td>
							<td style="bold;width:87%;text-align:justify;">'.$catatan.'</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	';

	$html2 = '
		<table border="1" cellpadding="5" style="font-size:10px;background-color:#e6f2ff">
			<tr>
				<th colspan="3" style="text-align:center;font-size:12px;font-weight:bold;">KARTU KENDALI</th>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td width="75px;" style="color:black;">Indeks/Subyek:</td>
							<td style="font-weight:bold;font-size:11px;">'.$data->indeks.'</td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td width="35px;" style="color:black;">Kode:</td>
							<td style="font-weight:bold;font-size:11px;width:73%;">'.$data->kode_simpan.'</td>
						</tr>
					</table>
				</td>
				<td>
					<table cellpadding="2">
						<tr>
							<td width="25px;" style="color:black;">Tgl.</td>
							<td style="font-weight:bold;width:70%;">'.$data->tgl_simpan.'</td>
							<td width="22px">'.$pilih.'</td>
						</tr>
						<tr>
							<td width="50px;" style="color:black;">No. Urut:</td>
							<td style="font-weight:bold;width:55%;">'.$data->no_urut.'</td>
							<td width="22px">'.$pilih2.'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table>
						<tr>
							<td width="27px;" style="color:black;">Hal:</td>
							<td style="font-weight:bold;width:92%;">'.$data->perihal.'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table>
						<tr>
							<td width="60px;" style="color:black;">Isi Ringkas:</td>
							<td style="width:87%;text-align:justify;">'.$data->isi_ringkas.'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table cellpadding="2">
						<tr>
							<td style="color:black;width:67px;">Lampiran</td>
							<td style="width:15px;color:black;">:</td>
							<td style="font-weight:bold;width:82%;">'.$data->lampiran.'</td>
						</tr>
						<tr>
							<td rowspan="2" style="color:black;width:67px;">'.$jenis.'</td>
							<td rowspan="2" style="width:15px;color:black;">:</td>
							<td style="font-weight:bold;width:82%;">'.$data->dari_kepada.'</td>
						</tr>
						<tr>
						<td style="width:82%;">'.$data->alamat.'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td width="45px" style="color:black;">Tgl. Surat</td>
							<td width="15px" style="color:black;">:</td>
							<td style="font-weight:bold;width:57%;">'.$data->tgl_surat.'</td>
						</tr>
					</table>
				</td>
				<td colspan="2">
					<table>
						<tr>
							<td width="45px" style="color:black;">No. Surat</td>
							<td width="15px" style="color:black;">:</td>
							<td style="font-weight:bold;width:79%;">'.$data->no_surat.'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td rowspan="2" colspan="2">
					<table>
						<tr>
							<td width="45px" style="color:black;">Pengolah</td>
							<td width="15px" style="color:black;">:</td>
							<td style="font-weight:bold;width:80%;">'.$data->arsiparis.'</td>
						</tr>
					</table>
				</td>
				<td rowspan="2" style="color:black;">Paraf:</td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td colspan="3">
					<table>
						<tr>
							<td width="45px" style="color:black;">Catatan</td>
							<td width="15px" style="color:black;">:</td>
							<td style="bold;width:87%;text-align:justify;">'.$catatan.'</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	';

	$pdf->WriteHTML($html, true, false, true, false, '');

	$pdf->WriteHTML($html2, true, false, true, false, '');

	$pdf->AddPage();

	$html3 = '
		<table border="1" cellpadding="5" style="font-size:10px;background-color:#ffe6ff;">
			<tr>
				<th colspan="3" style="text-align:center;font-size:12px;font-weight:bold;">KARTU KENDALI</th>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td width="75px;" style="color:black;">Indeks/Subyek:</td>
							<td style="font-weight:bold;font-size:11px;">'.$data->indeks.'</td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td width="35px;" style="color:black;">Kode:</td>
							<td style="font-weight:bold;font-size:11px;width:73%;">'.$data->kode_simpan.'</td>
						</tr>
					</table>
				</td>
				<td>
					<table cellpadding="2">
						<tr>
							<td width="25px;" style="color:black;">Tgl.</td>
							<td style="font-weight:bold;width:70%;">'.$data->tgl_simpan.'</td>
							<td width="22px">'.$pilih.'</td>
						</tr>
						<tr>
							<td width="50px;" style="color:black;">No. Urut:</td>
							<td style="font-weight:bold;width:55%;">'.$data->no_urut.'</td>
							<td width="22px">'.$pilih2.'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table>
						<tr>
							<td width="27px;" style="color:black;">Hal:</td>
							<td style="font-weight:bold;width:92%;">'.$data->perihal.'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table>
						<tr>
							<td width="60px;" style="color:black;">Isi Ringkas:</td>
							<td style="width:87%;text-align:justify;">'.$data->isi_ringkas.'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table cellpadding="2">
						<tr>
							<td style="color:black;width:67px;">Lampiran</td>
							<td style="width:15px;color:black;">:</td>
							<td style="font-weight:bold;width:82%;">'.$data->lampiran.'</td>
						</tr>
						<tr>
							<td rowspan="2" style="color:black;width:67px;">'.$jenis.'</td>
							<td rowspan="2" style="width:15px;color:black;">:</td>
							<td style="font-weight:bold;width:82%;">'.$data->dari_kepada.'</td>
						</tr>
						<tr>
						<td style="width:82%;">'.$data->alamat.'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td width="45px" style="color:black;">Tgl. Surat</td>
							<td width="15px" style="color:black;">:</td>
							<td style="font-weight:bold;width:57%;">'.$data->tgl_surat.'</td>
						</tr>
					</table>
				</td>
				<td colspan="2">
					<table>
						<tr>
							<td width="45px" style="color:black;">No. Surat</td>
							<td width="15px" style="color:black;">:</td>
							<td style="font-weight:bold;width:79%;">'.$data->no_surat.'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td rowspan="2" colspan="2">
					<table>
						<tr>
							<td width="45px" style="color:black;">Pengolah</td>
							<td width="15px" style="color:black;">:</td>
							<td style="font-weight:bold;width:80%;">'.$data->arsiparis.'</td>
						</tr>
					</table>
				</td>
				<td rowspan="2" style="color:black;">Paraf:</td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td colspan="3">
					<table>
						<tr>
							<td width="45px" style="color:black;">Catatan</td>
							<td width="15px" style="color:black;">:</td>
							<td style="bold;width:87%;text-align:justify;">'.$catatan.'</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	';

	$pdf->WriteHTML($html3, true, false, true, false, '');

	$pjm = 'kkendali-'.$data->id_arsip.'.pdf';

	$pdf->Output($pjm, 'I');

?>

