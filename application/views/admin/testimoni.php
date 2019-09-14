<?php require('header.php'); ?>


<h1 class="">Kelola Testimoni</h1>

<hr/>

<div style="text-align: center;">
	<a href="<?=site_url('admin/testimoni/tambah')?>"><button class="ui primary basic button">Tambah Baru</button></a>
</div>

<table class="ui celled table" id="myTable">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nama</th>
			<th scope="col">Testimoni</th>
			<th scope="col">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $i=1;
		foreach($data as $key => $value): ?>
			<tr>
				<th scope="row"><?=$i++?></th>
				<td><?=$value['nama']?></td>
				<td><?=$value['testimoni']?></td>
				<td><a href="<?=site_url('admin/testimoni/hapus/'.$value['id'])?>" class="ui button basic red">hapus</a></td>
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