<?php include('header.php'); ?>

<div class="row">

	<div class="col-sm-12">
		<h1 class="text-center">Tambah Data Paket</h1>
		<hr/>

		<?php if(! empty($this->session->flashdata('alert'))): ?>
			<div class="alert alert-warning text-center">
				<?=$this->session->flashdata('alert')?>
			</div>
		<?php endif; ?>


		<form action="<?=site_url('admin/paket/simpan')?>" method="POST" enctype="multipart/form-data" class="ui form">
			<div class="field">
				<label>Nama Paket</label>
				<input type="text" name="nama_paket" class="form-control" required>
			</div>

			<div class="field">
				<label>Gambar</label>
				<input type="file" name="gambar" class="form-control" required>
			</div>

			<div class="field">
				<label>Harga</label>
				<input type="number" name="harga" class="form-control" required>
			</div>

			<div class="field">
				<label>Keterangan</label>
				<textarea name="keterangan" class="form-control" required></textarea>
			</div>

			<div>
				<button class="ui button primary">SIMPAN</button>
				<a class="ui button" href="<?=site_url('admin/paket')?>">KEMBALI</a>
			</div>
			<br/>
		</form>
	</div>

</div>

<?php include('footer.php'); ?>