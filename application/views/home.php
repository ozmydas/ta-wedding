
<?php require('header.php'); ?>

			<h1 class="ui aligned header" style="background: #555; color: #fff; padding: 10px 40px;">TESTIMONI</h1>
			<div class="ui two column stackable grid">
				<div class="three column row">


				<?php foreach($testimoni as $key => $value): ?>
					<div class="column">
						<div class="ui raised segment">
							<a class="ui red ribbon label"><?=$value['nama']?></a>
							<br/><br/>
							<div style="width: 100%; text-align: center;">
							<img src="<?=base_url('upload/testimoni/'.$value['gambar'])?>" class="ui img rounded center" style="height: 100px;">
							</div>
							<p style="background: #FBD786; margin-top: 10px; border-radius: 5px; padding: 8px 20px"><?=$value['testimoni']?></p>
						</div>
					</div>
				<?php endforeach; ?>

				</div>
				


			<h1 class="ui aligned header" style="background: #555; color: #fff; padding: 10px 40px;">PAKET PERNIKAHAN</h1>
				<div class="two column row">
					
				<?php foreach($paket as $key => $value): ?>
					<div class="column" style="margin-bottom: 20px">
						<div class="ui segment">
							<h1 style="text-align: center;"><?=$value['nama_paket']?></h1>
							<div><img class="ui fluid image" src="<?=base_url('upload/paket/'.$value['gambar'])?>"></div>
							<div style="border: 1px solid #ccc; padding: 5px 10px;">
								<?=nl2br($value['keterangan'])?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>

				</div>

			</div>

<?php require('footer.php'); ?>