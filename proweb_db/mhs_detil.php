<?php
include "con_db.php";

$id = $_GET['id'];
$sql = "SELECT * FROM mhs WHERE id='$id'";
$res = $conn->query($sql);
$dat = $res->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detail Mahasiswa</title>
</head>
<body>
<h2>Detail Data Mahasiswa</h2>
<a href="mhs_add.php">TAMBAH</a> <a href="mhs.php">LIHAT</a>
<br>
<form action ="mhs_proc.php" method="post">
	ID<br>
	<input type="text"name="id" value="<?php echo $row['id']?>"><br>
	Nama<br>
	<input type="text" name="nama" value="<?= $row['nama']?>"><br>
	Prodi<br>
	<select name="prodi_id">
		<?php
		$sql_prodi = "SELECT * FROM prodi";
		$res_prodi = $conn->query($sql_prodi);
		while($prodi = $res_prodi->fetch_array(MYSQLI_BOTH)){
			if($prodi['id']==$row['prodi_id'])
				$select = 'selected="selected"';
			else
				$select = '';
			echo"<option value='".$prodi['id']."'$select>".$prodi['nama']."</option>";
		}
		?>
	</select><br>
	Alamat<br>
	<input type="text" name="alamat" value="<?= $row['alamat'] ?>"><br>
	Kota<br>
	<input type="text" name="kota" value="<?= $row['kota']?>"><br>
	<input type="submit" name="proses" value="PERBARUI">
	<input type="submit" name="proses" value="HAPUS" 
	onclick="return confirm('Yakin Menghapus Data Ini?')">
</form>
</body>
</html>
