<?php
	include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Mahasiswa</title>
</head>
<body>
	<h1>Data Mahasiswa</h1>

	<a href ="addmhs.php"><button>Tambah Data</button></a>

	<?php

		$sql = "SELECT * FROM mhs";
		$res = $conn->query($sql);


		echo "<table border='1'>";
		echo "<thead>
					<th>No</th>
					<th>npm</th>
					<th>nama</th>
					<th>alamat</th>
					<th>aksi</th>
				</thead>
				</tbody>";

		$i = 0;
		while ($dat = $res->fetch_array(MYSQLI_BOTH)) {
			$i++;
			echo "<tr>
					<td>$i</td>
					<td>".$dat["npm"]."</td>
					<td>".$dat["nama"]."</td>
					<td>".$dat["alamat"]."</td>
					<td><a href='updmhs.php?npm=".$dat['npm']."'>UBAH</a> ||<a href='prosesmhs.php?npm=".$dat['npm']."'>HAPUS</td>
					</tr>";
		}
		echo "</tbody>
			</table>"
	?>

</body>
</html>