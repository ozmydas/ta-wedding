<?php include('header.php'); ?>

<div class="row">

	<div class="col-sm-12">
		<h1>Profil Member</h1>
		<hr/>

		<?php if(! empty($this->session->flashdata('alert'))): ?>
			<div class="alert alert-warning text-center">
				<?=$this->session->flashdata('alert')?>
			</div>
		<?php endif; ?>

		<form action="<?=site_url('member/profil/update/'.$profil['id'])?>" method="POST">
			<div class="form-row">
				<div class="col">
					<label>Username</label>
					<input type="text" class="form-control" name="username" placeholder="Wajib Diisi" value="<?=@$profil['username']?>" disabled>
				</div>
				<div class="col">
					<label>Password</label>
					<input type="text" class="form-control" name="password" placeholder="Wajib Diisi" value="<?=@$profil['password']?>" required>
				</div>
			</div>

			<br/>

			<div class="form-row">
				<div class="col">
					<label>Nama Lengkap</label>
					<input type="text" class="form-control" name="nama" placeholder="Wajib Diisi" value="<?=@$profil['nama']?>" required>
				</div>
				<div class="col">
					<label>No. Telp / HP</label>
					<input type="text" class="form-control" name="telp" placeholder="Wajib Diisi" value="<?=@$profil['telp']?>" required>
				</div>
			</div>

			<br/>


			<label>Jenis Kelamin</label>

			<div class="form-row text-left">
				<div class="col">
					<input type="radio" name="jkel" value="pria" <?=$profil['jkel'] == 'pria' ? 'checked': 0;?>> Pria
				</div>
				<div class="col">
					<input type="radio" name="jkel" value="wanita" <?=$profil['jkel'] == 'wanita' ? 'checked': 0;?>> Wanita
				</div>
			</div>

			<br/>

			<div class="form-row text-left">
				<div class="col">
					<textarea name="alamat" class="form-control" placeholder="Wajib Diisi" required><?=@$profil['alamat']?></textarea>
				</div>
			</div>

			<br/>

			<div>
				<button class="btn btn-success">UPDATE PROFIL</button>
			</div>

			<br/>

		</form>

	</div>

</div>

<?php include('footer.php'); ?>