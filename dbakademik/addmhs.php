<?php
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Data Mahasiswa</title>
</head>
<body>
	<a href="index.php">Lihat Data</a>	
	<br>
	<br>
	<br>

	<form action="prosesmhs.php" method="POST">
		NPM:<br>
		<input type="text" name="npm"><br>
		Nama:<br>
		<input type="text" name="nama"><br>
		Alamat:<br>
		<input type="text" name="alamat"><br>
		<br>
		<br>
		<input type="submit" name="proses" value="TAMBAH">
	</form>
</body>


</html>
