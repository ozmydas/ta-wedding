<?php require('header.php'); ?>


<h1 class="">Kelola Testimoni</h1>

<hr/>

<div style="text-align: center;">
	<a href="<?=site_url('admin/testimoni/tambah')?>">Tambah Baru</a>
</div>

<table class="table" id="myTable">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nama</th>
			<th scope="col">Testimoni</th>
			<th scope="col">Aksi</th>
		</tr>
	</thead>
	<tbody>
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