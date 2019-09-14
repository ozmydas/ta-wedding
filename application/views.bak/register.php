<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Koperasi</title>

	<link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">

	<script src="<?=base_url('assets/jquery.min.js')?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="<?=base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>

	<style type="text/css">

		::selection { background-color: #E13300; color: white; }
		::-moz-selection { background-color: #E13300; color: white; }

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
	</style>
</head>
<body>

	<div id="container">
		<h1>Welcome to Koperasi!</h1>

		<div id="body">
			<?php if(! empty($this->session->flashdata('alert'))): ?>
				<div class="alert alert-danger text-center">
					<?=$this->session->flashdata('alert')?>
				</div>
			<?php endif; ?>

			<form action="#" method="POST">
				<div class="form-group">
					<label>Username:</label>
					<input type="text" class="form-control" id="username" name="username" required>
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="password" class="form-control" id="password" name="password" required>
				</div>

				<div class="form-group">
					<label>Nama:</label>
					<input type="text" class="form-control" id="name" name="nama" required>
				</div>

				<div class="form-group">
					<label>Jenis Kelamin:</label>
					<select class="form-control" name="jkel" required>
						<option value="pria" selected>Pria</option>
						<option value="wanita">Wanita</option>
					</select>
				</div>

				<div class="form-group">
					<label>Telp:</label>
					<input type="number" class="form-control" id="telp" name="telp" required>
				</div>

				<div class="form-group">
					<label>Alamat:</label>
					<input type="text" class="form-control" id="alamat" name="alamat" required>
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>

		</div>

		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</div>

</body>
</html>