<?php include('header.php'); ?>

<div class="row">

	<div class="col-sm-12">
		<h1 class="text-center">Edit Data Barang</h1>
		<hr/>

		<?php if(! empty($this->session->flashdata('alert'))): ?>
			<div class="alert alert-warning text-center">
				<?=$this->session->flashdata('alert')?>
			</div>
		<?php endif; ?>


		<form action="<?=site_url('admin/barang/update')?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama Barang</label>
				<input type="hidden" name="id" value="<?=$barang['id']?>">
				<input type="text" name="nama_barang" class="form-control" value="<?=@$barang['nama_barang']?>" required>
			</div>

			<div class="form-group">
				<label>Gambar</label>
				<img src="<?=base_url('upload/barang/'.$barang['gambar'])?>" class="img img-responsive" style="display: block; height: 200px;">
				<input type="file" name="gambar" class="form-control">
			</div>

			<div class="form-group">
				<label>Harga</label>
				<input type="number" name="harga" class="form-control" value="<?=@$barang['harga']?>" required>
			</div>

			<div class="form-group">
				<label>Keterangan</label>
				<input type="text" name="keterangan" class="form-control" value="<?=@$barang['keterangan']?>" required>
			</div>

			<div>
				<button class="btn btn-success">UPDATE</button>
			</div>
			<br/>
		</form>
	</div>

</div>

<?php include('footer.php'); ?>