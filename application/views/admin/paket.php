<?php require('header.php'); ?>


<h1 class="">Kelola Pendaftaran Pernikahan</h1>

<hr/>

<div style="text-align: center;">
	<a href="<?=site_url('admin/paket/tambah')?>"><button class="ui primary basic button">Tambah Baru</button></a>
</div>

<table class="ui celled table" id="myTable">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nama</th>
			<th scope="col">Harga</th>
			<th scope="col">Gambar</th>
			<th scope="col">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $i=1;
		foreach($data as $key => $value): ?>
			<tr>
				<th scope="row"><?=$i++?></th>
				<td><?=$value['nama_paket']?></td>
				<td><?=$value['harga']?></td>
				<td><img src="<?=base_url('upload/paket/'.$value['gambar'])?>" class="ui image small" style="height: 50px; width: auto;"/></td>
				<td>
					<a href="<?=site_url('admin/paket/edit/'.$value['id'])?>"><button class="ui basic button green">edit</button></a>
					<a href="<?=site_url('admin/paket/hapus/'.$value['id'])?>"><button class="ui basic button red">hapus</button></a>
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