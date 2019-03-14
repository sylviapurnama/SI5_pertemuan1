<!DOCTYPE html>
<html>
<head>
	<title>Latihan CRUD</title>
</head>
<body>
	<h3><p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	<p>Tambah Data Mahasiswa</p></h3>
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>nama</td>
				<td>:</td>
				<td><input type="number" name="nim" required></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>jenis kelamin</td>
				<td>:</td>
				<td>
					<select name="jenis kelamin" required>
						<option>Pilih </option>
						<option value="laki laki">laki laki</option>
						<option value="perempuan">perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" required></td>
			</tr>
			<tr>
				<td>hobby</td>
				<td>:</td>
				<td><input type="text" name="hobby" required></td>
			</tr>
				<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>