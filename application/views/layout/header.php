<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>E Arsip</title>
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" />
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/datatables/css/dataTables.bootstrap.min.css" />
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/custom/css/style.css" type="text/css">

		<script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery/jquery.js"></script>
		
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<?php if (!$this->session->userdata('logged_in')) : ?>
							<li>
								<a href="<?php echo base_url(); ?>users/login">
									<span class="glyphicon glyphicon-log-in"></span>
									Masuk
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>users/register">
									<span class="glyphicon glyphicon-pencil"></span>
									Daftar
								</a>
							</li>
						<?php endif; ?>
						<?php if ($this->session->userdata('logged_in')) : ?>
							<li>
								<a href="<?php echo base_url(); ?>">
									<span class="glyphicon glyphicon-user"></span>
									Selamat Datang, <?php echo $this->session->userdata('username'); ?>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>users/cari">
									<span class="glyphicon glyphicon-search"></span>
									Cari Arsip
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>users/logout">
									<span class="glyphicon glyphicon-log-out"></span>
									Keluar
								</a>
							</li>
						<?php endif;?>
					</ul>
				</div>
			</div>
		</nav>
		