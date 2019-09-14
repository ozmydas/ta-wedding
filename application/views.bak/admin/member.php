<?php include('header.php'); ?>

<div class="row">

	<div class="col-sm-12">
		<h1 class="text-center">Anggota Koperasi</h1>
		<hr/>

		<?php if(! empty($this->session->flashdata('alert'))): ?>
			<div class="alert alert-warning text-center">
				<?=$this->session->flashdata('alert')?>
			</div>
		<?php endif; ?>


		<div class="table-responsive">
			<table class="table table-striped" id="myTable">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nama Lengkap</th>
						<th scope="col">Username</th>
						<th scope="col">Jenis Kelamin</th>
						<th scope="col">Telp</th>
						<th scope="col">Alamat</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1;
					foreach($member as $key => $value): ?>
						<tr>
							<th scope="row"><?=$i++?></th>
							<td><?=$value['nama']?></td>
							<td><?=$value['username']?></td>
							<td><?=$value['jkel']?></td>
							<td><?=$value['telp']?></td>
							<td><?=$value['alamat']?></td>
							<td><a href="<?=site_url('admin/member/hapus/'.$value['id'])?>">hapus</a></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

	</div>

</div>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#myTable').DataTable();
	} );
</script>

<?php include('footer.php'); ?>