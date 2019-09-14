<h1>Pinjaman Koperasi</h1>
Tanggal : <?=date('d F Y')?>
<br/><br/><br/>

<table border="1">
	<tr>
		<td>Nama Peminjam</td>
		<td style="text-align: left"><?=$user['nama']?></td>
	</tr>

	<tr>
		<td>Tanggal Pinjam</td>
		<td style="text-align: left"><?=$pinjaman['created_datetime']?></td>
	</tr>

	<tr>
		<td>Jumlah Pinjaman</td>
		<td style="text-align: left"><?=$pinjaman['nominal']?></td>
	</tr>


	<tr>
		<td>status</td>
		<td style="text-align: left"><?=$pinjaman['is_lunas']?'LUNAS':'BELUM LUNAS';?></td>
	</tr>

</table>

<br/>

<p>
	Untuk melunasi pinjaman, silahkan bayar hutang pinjaman ada ke petugas kami di Koperasi.
</p>
<p>
	Kontak : +62 877 3737 7388
</p>