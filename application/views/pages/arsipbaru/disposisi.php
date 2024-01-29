<?php error_reporting(0); ?>
<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Arsip Baru <small> Lembar Disposisi</small></h1>
			</div>
		</div>
	</div>
</header>

<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('arsip_baru'); ?>">Arsip Baru</a></li>
            <span>»</span>
			<li><a href="<?php echo base_url('arsip_baru'); ?>">Halaman Utama</a></li>
            <span>»</span>
            <li class="active">Lembar Disposisi</li>
        </ol>
    </div>
</section>

<section id="main">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<a href="<?php echo base_url(); ?>identitas" class="list-group-item">
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Identitas
					</a>
					<a href="<?php echo base_url(); ?>data_instansi" class="list-group-item">
						<span class="glyphicon glyphicon-file" aria-hidden="true"></span> Data Instansi
					</a>
					<a href="<?php echo base_url(); ?>data_unit" class="list-group-item">
						<span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Data Unit
					</a>
					<a href="<?php echo base_url(); ?>pokok_soal" class="list-group-item">
						<span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Data Pokok Soal
					</a>
					<a href="<?php echo base_url(); ?>arsip_baru" class="list-group-item active main-color-bg">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Arsip Baru
					</a>
					<a href="<?php echo base_url(); ?>pinjam_arsip" class="list-group-item">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Pinjam Arsip
					</a>
					<a href="<?php echo base_url(); ?>petugas" class="list-group-item">
						<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Petugas
					</a>
					<a href="<?php echo base_url(); ?>cari_arsip" class="list-group-item">
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span> Cari Arsip
					</a>
				</div>
			</div>
			<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title">Arsip Baru - Lembar Disposisi</h3>
					</div>
					<div class="panel-body">
                    <?php echo form_open_multipart(base_url('arsip_baru/getDisposisiUpdate')); ?>
                    <?php foreach ($arsip as $data) { ?>
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $data->id_arsip; ?>" />
						</div>
                        <div class="row">
                            <?php if($data->brsr == 'Rahasia') { ?>
                                <div class="form-group col-sm-4 col-md-4">
                                    <label>Rahasia</label>
                                    <input type="text" class="form-control" name="rahasia" id="rahasia" value="✓" readonly></input>
                                </div>
                                <div class="form-group col-sm-4 col-md-4">
                                    <label>Penting</label> 
                                    <input type="text" class="form-control" name="penting" id="penting" value=" " readonly></input>
                                </div>
                                <div class="form-group col-sm-4 col-md-4">
                                    <label>Rutin</label> 
                                    <input type="text" class="form-control" name="rutin" id="rutin" value=" " readonly></input>
                                </div>
                            <?php } else if($data->brsr == 'Penting') { ?>
                                <div class="form-group col-sm-4 col-md-4">
                                    <label>Rahasia</label>
                                    <input type="text" class="form-control" name="rahasia" id="rahasia" value=" " readonly></input>
                                </div>
                                <div class="form-group col-sm-4 col-md-4">
                                    <label>Penting</label> 
                                    <input type="text" class="form-control" name="penting" id="penting" value="✓" readonly></input>
                                </div>
                                <div class="form-group col-sm-4 col-md-4">
                                    <label>Rutin</label> 
                                    <input type="text" class="form-control" name="rutin" id="rutin" value=" " readonly></input>
                                </div>
                            <?php } else if($data->brsr == 'Rutin') { ?>
                                <div class="form-group col-sm-4 col-md-4">
                                    <label>Rahasia</label>
                                    <input type="text" class="form-control" name="rahasia" id="rahasia" value=" " readonly></input>
                                </div>
                                <div class="form-group col-sm-4 col-md-4">
                                    <label>Penting</label> 
                                    <input type="text" class="form-control" name="penting" id="penting" value=" " readonly></input>
                                </div>
                                <div class="form-group col-sm-4 col-md-4">
                                    <label>Rutin</label> 
                                    <input type="text" class="form-control" name="rutin" id="rutin" value="✓" readonly></input>
                                </div>
                            <?php } ?>
                        </div>                            
                        <div class="form-group">
                            <label>No. Agenda</label>
                            <input type="text" class="form-control" name="noAgenda" id="noAgenda" value="<?php echo $data->no_surat; ?>" readonly></input>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="tgl_surat" id="tgl_surat" value="<?php echo $data->tgl_surat; ?>" readonly></input>
                        </div>
                        <div class="form-group">
                            <label>Perihal</label>
                            <input type="text" class="form-control" name="perihal" id="perihal" value="<?php echo $data->perihal; ?>" readonly></input>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="tgl_diterima" id="tgl_diterima" value="<?php echo date('Y-m-d'); ?>" required></input>
                        </div>
                        <div class="form-group">
                            <label>Asal</label>
                            <input type="text" class="form-control" name="asal" id="asal" value="<?php echo $data->dari_kepada; ?> - <?php echo $data->kota; ?>" readonly></input>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-8 col-md-8">
                                <label>Instruksi / Informasi</label>
                                <input type="text" class="form-control" name="inin" id="inin" value="<?php echo $data->catatan; ?>" style="height:250px;" readonly></input>
                            </div>
                            <div class="form-group col-sm-4 col-md-4">
                                <label>Diteruskan Kepada</label>
                                <?php
                                        $teks = "$data->diteruskan_kepada"; 
                                        $potongan_teks = explode(",", $teks);
                                        $satu = $potongan_teks[0]; // data1
                                        $dua = $potongan_teks[1]; // data2
                                        $tiga = $potongan_teks[2]; // data3
                                        $empat = $potongan_teks[3]; // data4
                                        $lima = $potongan_teks[4]; // data5
                                ?>
                                <input type="text" class="form-control" name="diteruskan1" value="<?php echo $satu; ?>" id="diteruskan1" readonly></input><br>
                                <input type="text" class="form-control" name="diteruskan2" value="<?php echo $dua; ?>" id="diteruskan2" readonly></input><br>
                                <input type="text" class="form-control" name="diteruskan3" value="<?php echo $tiga; ?>" id="diteruskan3" readonly></input><br>
                                <input type="text" class="form-control" name="diteruskan4" value="<?php echo $empat; ?>" id="diteruskan4" readonly></input><br>
                                <input type="text" class="form-control" name="diteruskan5" value="<?php echo $lima; ?>" id="diteruskan5" readonly></input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Catatan (Penerima)</label>
                            <input type="text" class="form-control" name="penerima" id="penerima" value="<?php echo $data->penerima ?>" required></input>
                        </div>
                        <p>NB: Jika anda merupakan penerima dan baru saja menerima surat tersebut, maka klik simpan jika sudah mengisi kolom yang berwarna putih dengan benar.</p>
                        <input type="submit" class="btn btn-success" value="Simpan" />
                        <a href="<?php echo base_url(); ?>arsip_baru/intern" class="btn btn-success">Kembali</a>
                    <?php } ?>
                    <?php echo form_close(); ?>
					</div>
				</div>
			</div>