<?php include('header.php'); ?>

<div class="row">

	<div class="col-sm-12">
		<h1 class="text-center">Tambah Data galeri</h1>
		<hr/>

		<?php if(! empty($this->session->flashdata('alert'))): ?>
			<div class="alert alert-warning text-center">
				<?=$this->session->flashdata('alert')?>
			</div>
		<?php endif; ?>


		<form action="<?=site_url('admin/galeri/simpan')?>" method="POST" enctype="multipart/form-data" class="ui form">
			<div class="field">
				<label>Gambar</label>
				<input type="file" name="gambar[]" class="form-control" multiple="multiple" required>
			</div>

			<div class="field">
				<label>Info</label>
				<select name="info">
					<option value="wedding">Wedding</option>
					<option value="fasilitas">Fasilitas</option>
					<option value="dekorasi">Dekorasi</option>
				</select>
			</div>

			<div>
				<button class="ui button">SIMPAN</button>
			</div>
			<br/>
		</form>
	</div>

</div>

<?php include('footer.php'); ?>