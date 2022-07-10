<?php
	include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Data Mahasiswa</title>
</head>
<body>
	<?php
	$npm = $_GET['npm'];
	$data = mysqli_query($conn,"SELECT * FROM mhs WHERE npm='$npm'");
	while($d = mysqli_fetch_array($data)){
	?>

	<a href="index.php">Lihat Data Mahasiswa</a>
	<br>
	<br>
	<br>
	<form action="prosesmhs.php" method="POST">
		npm:
		<input type="text" name="npm" value="<?php echo $d['npm'];?>"readonly><br><br>
		Nama:
		<input type="text" name="nama" value="<?php echo $d['nama'];?>"><br><br>
		Alamat:
		<input type="text" name="alamat" value="<?php echo $d['alamat']?>"><br><br>
		<input type="submit" name="proses" value="EDIT">
		
	</form>
	<?php
	}
	?>

</body>
</html>