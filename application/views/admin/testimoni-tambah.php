<?php include('header.php'); ?>

<div class="row">

	<div class="col-sm-12">
		<h1 class="text-center">Tambah Data Testimoni</h1>
		<hr/>

		<?php if(! empty($this->session->flashdata('alert'))): ?>
			<div class="alert alert-warning text-center">
				<?=$this->session->flashdata('alert')?>
			</div>
		<?php endif; ?>


		<form action="<?=site_url('admin/testimoni/simpan')?>" method="POST" enctype="multipart/form-data" class="ui form">
			<div class="field">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control" required>
			</div>

			<div class="field">
				<label>Gambar</label>
				<input type="file" name="gambar" class="form-control" required>
			</div>

			<div class="field">
				<label>Testimoni</label>
				<input type="text" name="testimoni" class="form-control" required>
			</div>

			<div>
				<button class="ui button">SIMPAN</button>
			</div>
			<br/>
		</form>
	</div>

</div>

<?php include('footer.php'); ?>