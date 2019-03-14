<!DOCTYPE html>
<html>
<head>
	<title>Latihan CRUD</title>
</head>
<body>
	<h3><p><a href="index.php">Beranda</a> /
<a href="tambah.php">Tambah Data</a></p>
	<b>Edit Data Mahasiswa</b><br></h3>
	
<?php
	include('koneksi.php');
	$id = $_GET['id'];
	$show = mysqli_query($koneksi,"SELECT * FROM db_mahasiswa WHERE 
      id_mhs='$id'");
	if(mysqli_num_rows($show) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$data = mysqli_fetch_assoc($show);
	}
	?>
	
<form action="edit-proses.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<table cellpadding="3" cellspacing="0">
	<tr>
		<td>nama</td>
		<td>:</td>
		<td><input type="text" name="nama" size="30" 
value="<?php echo $data['nama']; ?>" 
required></tr>
	<tr>
		<td>nim</td>
		<td>:</td>
		<td><input type="text" name="nim" size="30" 
value="<?php echo $data['nim']; ?>" 
required></td>
	</tr>
	<tr>
		<td>jenis kelamin</td>
		<td>:</td>
		<td>
			<select name="jenis kelamin" required>
			<option value="">Pilih</option>
			<option value="laki laki" <?php if($data['laki laki'] == 
'laki laki'){ echo 'selected'; } ?>>laki laki</option>
			<option value="perempuan" <?php if($data['perempuan'] == 
'perempuan'){ echo 'selected'; } ?>>perempuan</option>
			
			</select>
		</td>	
	</tr>
<tr>
	<td>alamat</td>	
	<td>:</td>
	<td><input type="text" name="alamat" size="30" 
value="<?php echo $data['alamat']; ?>" 
required>
			</select>
		</td>
	</tr>
	<tr>
	<td>hobby</td>	
	<td>:</td>
	<td><input type="text" name="hobby" size="30" 
value="<?php echo $data['hobby']; ?>" 
required>
			</select>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td></td>
		<td><input type="submit" name="simpan" 
value="Simpan"></td>
</tr>
</table>
</form>
</body>
</html>
