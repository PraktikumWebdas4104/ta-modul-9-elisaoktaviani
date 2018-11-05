<h1>CRUD OOP PHP</h1>
<h3>Tambah Data User</h3>

<form action="proses.php?aksi=tambah" method="post">
	
<table>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia"></td>
	</tr>
	<tr>
	<td>Genre Film</td>
		<td><input type="checkbox" name="genre" value="Horror">Horror</td>
		<td><input type="checkbox" name="genre" value="Action">Action</td>
		<td><input type="checkbox" name="genre" value="Anime">Thriller</td>
		<td><input type="checkbox" name="genre" value="Thriller">Thriller</td>
		<td><input type="checkbox" name="genre" value="Animasi">Animasi</td>
	</tr>
	<td>Wisata Tujuan</td>
		<td><input type="checkbox" name="wisata" value="Bali">Bali</td>
		<td><input type="checkbox" name="wisata" value="Raja Ampat">Raja Ampat</td>
		<td><input type="checkbox" name="wisata" value="Pulau Derawan">Pulau Derawan</td>
		<td><input type="checkbox" name="wisata" value="Bangka Belitung">Bangka Belitung</td>
		<td><input type="checkbox" name="wisata" value="Labuan Bjao">Labuan Bajo</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>

</table>
</form>
