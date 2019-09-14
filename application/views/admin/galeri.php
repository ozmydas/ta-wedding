<?php require('header.php'); ?>


<h1 class="">Kelola galeri</h1>

<hr/>

<div style="text-align: center;">
	<a href="<?=site_url('admin/galeri/tambah')?>"><button class="ui primary basic button">Tambah Baru</button></a>
</div>

<table class="ui celled table" id="myTable">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Gambar</th>
			<th scope="col">Info</th>
			<th scope="col">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $i=1;
		foreach($data as $key => $value): ?>
			<tr>
				<th scope="row"><?=$i++?></th>
				<td><img src="<?=base_url('upload/galeri/'.$value['gambar'])?>" class="ui image small" style="height: 50px; width: auto;"></td>
				<td><?=$value['info']?></td>
				<td>
					<a href="<?=site_url('admin/galeri/hapus/'.$value['id'])?>"><button class="ui button red">hapus</button></a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>



<link rel="stylesheet" type="text/css" href="<?=base_url('assets/datatables/datatables.min.css')?>">
<script type="text/javascript" src="<?=base_url('assets/datatables/datatables.min.js')?>"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#myTable').DataTable();
	} );
</script>


<?php require('footer.php'); ?>