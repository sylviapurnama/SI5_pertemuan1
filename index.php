<!DOCTYPE html>
<html>
<head>
	<title>Latihan CRUD</title>
</head>
<body>
	<h3><p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	<p>Data Mahasiswa</p></h3>
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#cccccc">
			<td>No.</td>
			<td>Nama</td>
			<td>Nim</td>
			<td>jenis kelamin</td>
			<td>alamat</td>
			<td>hobby</td>			
			<td>Opsi</td>
		</tr>

		<?php
		include_once 'koneksi.php';
		$query = mysqli_query($koneksi, "SELECT * From db_mahasiswa order by nama desc") or die(mysqli_error());
		if (mysqli_num_rows($query) == 0) {
			echo "<tr align='center'><td colspan='6'>Tidak ada data !</td></tr>";
		} else {
			$no = 1;
			while ($data = mysqli_fetch_assoc($query)) {
				echo 	"<tr>".
						"<td>".$no."</td>".
						"<td>".$data['nama']."</td>".
						"<td>".$data['nim']."</td>".
						"<td>".$data['jeniskelamin']."</td>".
						"<td>".$data['alamat']."</td>".
						"<td>".$data['hobby']."</td>".
						"<td><a href='edit.php?id=".$data['id_mhs']."'>edit</a> / <a href='hapus.php?id=".$data['id_mhs']."' onclick='return confirm(\'yakin ?\')'>hapus</a></td>";
						$no++;
			}
		}
		
		?>
	</table>
</body>
</html>