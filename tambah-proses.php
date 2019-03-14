<?php
if (isset($_POST['tambah'])) {
	include_once 'koneksi.php';
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$jenis = $_POST['jeniskelamin'];
	$alamat = $_POST['alamat'];
	$hobby = $_POST['hobby'];
	$input = mysqli_query($koneksi,"Insert into data_mahasiswa values (null, '$nama', '$nim', '$jenis', '$alamat','$hobby')");
	if ($input) {
		echo '<h3>Data berhasil di tambahkan! <br>';
		echo '<a href="index.php">Beranda</a> &nbsp;&nbsp;';
		echo '<a href="tambah.php">Tambah</a>';
		echo "
		<script>
			window.location = 'index.php';
		</script>";	
	}else{
		echo 'Gagal menambahkan data! ';
		echo '<a href="tambah.php">Kembali</a>';	
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>
