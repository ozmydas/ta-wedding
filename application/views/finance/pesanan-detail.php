<?php include('header.php'); ?>

<div class="row">

	<div class="col-sm-12">
		<h1 class="text-center">Data Pengantin</h1>
		<hr/>

		<?php if(! empty($this->session->flashdata('alert'))): ?>
			<div class="alert alert-warning text-center">
				<?=$this->session->flashdata('alert')?>
			</div>
		<?php endif; ?>


		<form action="<?=site_url('finance/pesanan/bayar/'.$data['id'])?>" method="POST" enctype="multipart/form-data" class="ui form">
			<div class="field">
				<label>Nama Pelanggan</label>
				<?=$data['nama_user']?>
			</div>

			<div class="field">
				<label>Tanggal Pernikahan</label>
				<?php echo date('Y-m-d'); ?>
			</div>

			<div class="field">
				<label>Pilihan Paket</label>
				<?=$data['nama_paket']?>
			</div>

			<div class="field">
				<label>Harga</label>
				<?=$data['harga']?>
			</div>

			<div class="field">
				<label>Status</label>
				<?php if($data['is_lunas']): ?>
					LUNAS
				<?php else: ?>
					BELUM LUNAS (sisa : <?=$data['harga']-$data['bayar']?>)
				<?php endif; ?>
			</div>

			<div class="field">
				<label>Keterangan</label>
				<textarea name="keterangan" rows="3" <?=$data['is_lunas']?'readonly':'';?>><?=$data['keterangan']?></textarea>
			</div>

			<?php if( ! $data['is_lunas']):
				$max = $data['harga'] - $data['bayar'];
			?>
			<div class="field">
				<label>Jumlah Tagihan Dibayar</label>
				<input type="number" name="bayaran" max="<?=$max?>" placeholder="sisa <?=$max?>" required />
			</div>
			<?php endif; ?>

			<div>
			<?php if( ! $data['is_lunas']): ?>
				<button class="ui button green">UPDATE</button>
			<?php endif; ?>
				<a href="<?=site_url('finance/pesanan')?>" class="ui button">KEMBALI</a>
				<a href="<?=site_url('finance/pesanan/invoice/'.$data['id'])?>" class="ui orange button">Print Invoice</a>
			</div>
			<br/>
		</form>
	</div>

</div>

<?php include('footer.php'); ?>