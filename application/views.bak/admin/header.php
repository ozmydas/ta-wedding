<!DOCTYPE html>
<html>
<head>
	<title>Dashboad</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<style type="text/css">
		body{
			background: #FDC830;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #F37335, #FDC830);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #F37335, #FDC830); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}
	</style>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Dashboard Admin</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?=site_url('admin/dashboard')?>">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=site_url('admin/barang/lihat')?>">Data Barang</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=site_url('admin/member')?>">Data Member</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=site_url('admin/barang')?>">Penyewaan Barang</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=site_url('logout')?>">Logout</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container" style="background: #fff; margin-top: 20px; border-radius: 5px; padding-top: 20px; padding-bottom: 20px;">