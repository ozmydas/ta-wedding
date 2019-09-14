<?php include('header.php'); ?>

<div class="row">

	<div class="col-sm-12 col-md-4 col-lg-3" style="background: #666; padding-top: 20px;">
		<h2 style="color: #fff">Kategori Alat</h2>
		<div class="list-group">
			<a href="<?=site_url('home/etalase/')?>" class="list-group-item">Semua Kategori</a>
			<?php foreach($kategori as $key => $value): ?>
			<a href="<?=site_url('home/etalase/'.$value['id'])?>" class="list-group-item"><?=$value['kategori']?></a>
			<?php endforeach; ?>
		</div>
	</div>

	<div class="col-sm-12 col-md-8 col-lg-9" style="padding-top: 20px">
		<h2 class="text-center">Alat Tersedia</h2>
		<hr/>

		<div class="alert alert-warning text-center">
			Hanya Member Terdaftar Yang Dapat Memesan Alat<br/>
			<a href="<?=site_url('login')?>">Login Sekarang</a>
		</div>

		<div class="row" style="min-height: 250px">
			
			<?php foreach($barang as $key => $value): ?>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="card">
						<img class="card-img-top" src="<?=base_url('upload/barang/'.$value['gambar'])?>" alt="Card image cap">
						<div class="card-body">
							<h6 class="card-title"><?=$value['nama_barang']?></h6>
							<p class="card-text"><?=$value['keterangan']?></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>

		</div>

	</div>

</div>

<?php include('footer.php'); ?>