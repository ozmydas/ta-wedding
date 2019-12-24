<?php require('header.php'); ?>
<div style="min-height: 100vh">

	<div class="ui raised segment">

		<h1>Galeri Lizza Wedding</h1>

		<hr/>

		<h3 style="display: block; background: purple; color: #fff; padding: 10px; text-align: center; border-radius: 10px 10px 0 0">Wedding Foto</h3>
		<div style="max-height: 800px; overflow-y: auto; overflow-x: hidden;">
			<div class="ui grid">
				<?php foreach ($wedding as $key => $value): ?>
					<div class="four wide column"><a data-fancybox="satu" href="<?=base_url('upload/galeri/'.$value['gambar'])?>" data-caption=""><img src="<?=base_url('upload/galeri/'.$value['gambar'])?>" class="ui image fluid"></a></div>
				<?php endforeach; ?>
			</div>
		</div>

		<hr/>
		
		<h3 style="display: block; background: purple; color: #fff; padding: 10px; text-align: center; border-radius: 10px 10px 0 0">Dekorasi Foto</h3>
		<div style="max-height: 800px; overflow-y: auto; overflow-x: hidden;">
			<div class="ui grid">
				<?php foreach ($dekorasi as $key => $value): ?>
					<div class="four wide column"><a data-fancybox="dua" href="<?=base_url('upload/galeri/'.$value['gambar'])?>" data-caption=""><img src="<?=base_url('upload/galeri/'.$value['gambar'])?>" class="ui image fluid"></a></div>
				<?php endforeach; ?>
			</div>
		</div>

		<hr/>
		
		<h3 style="display: block; background: purple; color: #fff; padding: 10px; text-align: center; border-radius: 10px 10px 0 0">Fasilitas Foto</h3>
		<div style="max-height: 800px; overflow-y: auto; overflow-x: hidden;">
			<div class="ui grid">
				<?php foreach ($fasilitas as $key => $value): ?>
					<div class="four wide column"><a data-fancybox="tiga" href="<?=base_url('upload/galeri/'.$value['gambar'])?>" data-caption=""><img src="<?=base_url('upload/galeri/'.$value['gambar'])?>" class="ui image fluid"></a></div>
				<?php endforeach; ?>
			</div>		</div>


		</div>

	</div>


	<link rel="stylesheet" href="<?=base_url('assets/fancybox/dist/jquery.fancybox.min.css')?>">
	<script src="<?=base_url('assets/fancybox/dist/jquery.fancybox.min.js')?>"></script>

	<script type="text/javascript">
		$('[data-fancybox]').fancybox({
			buttons: [
			"zoom",
            //"share",
            "slideShow",
            "fullScreen",
            //"download",
            "thumbs",
            "close"
            ],
        });
    </script>

    <?php require('footer.php'); ?>