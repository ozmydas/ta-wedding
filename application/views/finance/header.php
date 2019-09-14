<!DOCTYPE html>
<html>
<head>
	<title>Weddings</title>


	<link rel="stylesheet" href="<?=base_url('assets/semantic/semantic.min.css')?>">
	<script src="<?=base_url('assets/jquery.min.js')?>"></script>
	<script src="<?=base_url('assets/semantic/semantic.min.js')?>"></script>

	<style type="text/css">
		.ui.large.menu{
			background: #141E30;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #243B55, #141E30);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #243B55, #141E30); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	color: gold;
		}

		.bodi{
			min-height: 100vh;
			background: #B24592;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #F15F79, #B24592);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #F15F79, #B24592); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

		}
	</style>

</head>
<body>
	<div class="bodi">

		<div class="ui sidebar inverted vertical menu">
			<a class="item" href="<?=site_url('finance/pesanan')?>">
				<span><i class="angle double right icon"></i> Semua Pemesanan</span>
			</a>
			<a class="item" href="<?=site_url('finance/pesanan/hutang')?>">
				<span><i class="angle double right icon"></i> Pemesanan Belum Bayar</span>
			</a>
			<a class="item" href="<?=site_url('finance/pesanan/lunas')?>">
				<span><i class="angle double right icon"></i> Pemesanan Sudah Lunas</span>
			</a>
			<a class="item" href="<?=site_url('finance/pesanan/laporan')?>">
				<span><i class="angle double right icon"></i> Download Laporan</span>
			</a>
		</div>
		
		<div class="pusher">

			<!-- Following Menu -->
			<div class="ui large menu">
			<div class="active item" id="muncul" style="cursor: pointer; background: gold !important;">MENU</div>
			<div style="flex: 1; text-align: center; font-size: 2em; line-height: 1.5;">FINANCE DASHBOARD</div>
				<div class="right menu">
					<div class="item">
						<a href="<?=site_url('login')?>" class="ui button">Logout</a>
					</div>
				</div>
			</div>

			<div class="ui container" style="background: #fff; padding: 20px; border-radius: 4px; box-shadow: 1px 1px 4px #aaa">
