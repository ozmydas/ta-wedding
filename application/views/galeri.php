<?php require('header.php'); ?>
<div style="min-height: 100vh">

	<div class="ui raised segment">

		<h1>Galeri Lizza Wedding</h1>

		<hr/>

		<h3>Wedding Foto</h3>
		<div style="max-height: 800px; overflow-y: auto; overflow-x: hidden;">
		<div class="ui grid">
			<?php foreach ($wedding as $key => $value): ?>
			<div class="four wide column"><img src="<?=base_url('upload/galeri/'.$value['gambar'])?>" class="ui image fluid"></div>
			<?php endforeach; ?>
		</div>
		</div>

		<hr/>
		
		<h3>Dekorasi Foto</h3>
		<div style="max-height: 800px; overflow-y: auto; overflow-x: hidden;">
		<div class="ui grid">
			<?php foreach ($dekorasi as $key => $value): ?>
			<div class="four wide column"><img src="<?=base_url('upload/galeri/'.$value['gambar'])?>" class="ui image fluid"></div>
			<?php endforeach; ?>
		</div>
		</div>

		<hr/>
		
		<h3>Fasilitas Foto</h3>
		<div style="max-height: 800px; overflow-y: auto; overflow-x: hidden;">
		<div class="ui grid">
			<?php foreach ($fasilitas as $key => $value): ?>
			<div class="four wide column"><img src="<?=base_url('upload/galeri/'.$value['gambar'])?>" class="ui image fluid"></div>
			<?php endforeach; ?>
		</div>		</div>


	</div>

</div>
<?php require('footer.php'); ?>