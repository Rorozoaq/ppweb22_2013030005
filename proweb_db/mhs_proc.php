<?php
include "con_db.php";
//menambah data
if(isset($_POST['proses']) && $_POST['proses']=='SIMPAN'){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$prodi_id = $_POST['prodi_id'];
	$alamat = $_POST['alamat'];
	$kota = $_POST['kota'];

	$sql = "INSERT INTO mhs
			(id,nama,prodi_id,kota,alamat)
			VALUES
			('$id','$nama','$prodi_id','$kota','$alamat')";
	if (!$res = $conn->query($sql))
		echo $sql;
	else
		header("location: mhs.php");	  
} 

//Update data
if (isset($_POST['proses']) && $_POST['proses']=='PERBARUI') {
	$id= $_POST['id'];
	$nama = $_POST['nama'];
	$prodi_id= $_POST['prodi_id'];
	$alamat = $_POST['alamat'];
	$kota = $_POST['kota'];

	$sql = "UPDATE mhs
			set nama='$nama', prodi_id='$prodi_id',
			alamat='$alamat',kota='$kota'
			WHERE id='$id'";
	if(!$res = $conn->query($sql))
		echo $sql;
	else
		header("Location: mhs.php");
	}

if (isset($_POST['proses']) && $_POST['proses']=='HAPUS'){
	echo "hapus";
	$id = $_POST['id'];
	$sql = "DELETE from mhs
			WHERE id='$id'";
	if(!$res = $conn->query($sql))
		echo $sql;
	else
		header("Location: mhs.php");
}
?>