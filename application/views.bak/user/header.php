<!DOCTYPE html>
<html>
<head>
	<title>Dashboad</title>

	<link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">

	<script src="<?=base_url('assets/jquery.min.js')?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="<?=base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>

	<style type="text/css">
		body{
			background: #ee9ca7;
			font-family: 'Noto Sans', sans-serif;
		}

		.navbar.bg-dark a{
			color: #eee !important;
		}

		.navbar{
			background-color: #F506A9 !important;
			background-image: url('<?=base_url('upload/gambar/bunga.png')?>');
			background-position: top right;
			background-repeat: no-repeat;
			background-size: contain;
			box-shadow: 0px 0px 5px rgba(0,0,0,0.3);
		}

		a.navbar-brand{
			background: #fff; padding-left: 10px; padding-right: 10px; border-radius: 4px
		}
	</style>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">WELCOME</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?=site_url('member/profil')?>">Profil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=site_url('member/barang')?>">Sewa Barang</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=site_url('member/barang/keranjang')?>">Keranjang</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=site_url('member/barang/transaksi')?>">Transaksi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=site_url('logout')?>">Logout</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container" style="background: #fff; margin-top: 20px; border-radius: 5px; padding-top: 20px; padding-bottom: 20px;">