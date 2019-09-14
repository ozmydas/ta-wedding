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
		<a class="item" href="<?=site_url('')?>">
			<span><i class="angle double right icon"></i> Home</span>
		</a>
		<a class="item" href="<?=site_url('home/galeri')?>">
			<span><i class="angle double right icon"></i> Galeri</span>
		</a>
		<a class="item" href="<?=site_url('home/sejarah')?>">
			<span><i class="angle double right icon"></i> Sejarah</span>
		</a>
		<a class="item" href="<?=site_url('home/visimisi')?>">
			<span><i class="angle double right icon"></i> Visi Misi</span>
		</a>
		<a class="item" href="<?=site_url('home/kontak')?>">
			<span><i class="angle double right icon"></i> Kontak</span>
		</a>
	</div>
	<div class="pusher">

		<!-- Following Menu -->
		<div class="ui large menu">
			<div class="active item" id="muncul" style="cursor: pointer; background: gold !important;">MENU</div>
			<div style="flex: 1; text-align: center; font-size: 2em; line-height: 1.5;">LIZZA WEDDING</div>
			<div class="right menu">
				<div class="item">
					<a href="<?=site_url('login')?>" class="ui button">login</a>
				</div>
			</div>
		</div>

		<div class="ui container">