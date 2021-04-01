
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Dokter | esemka-his</title>
	<link rel="stylesheet" type="text/css"href="assets/css/esemkahis1.css" >
</head>
<body>
<h3>Data Dokter</h3>
<a href="tambah_dokter.php">Tambah Data Dokter</a>
<br/>
<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Dokter</th>
			<th>Nama Poli</th>
			<th colspan="2">Opsi</th>
		</tr>
		<?php
		include '../config.php';
		$no = 1;
		$data = mysqli_query($koneksi, "SELECT * FROM dokter");
		while($d = mysqli_fetch_array($data)){
			echo "<tr>";
			echo "<td>".$no++."</td>";
			echo "<td>".$d['nama_dokter']."</td>";
			echo "<td>".$d['nama_poli']."</td>";
			echo "<td><a href='edit_dokter.php?id=".$d['id_dokter']."'>Ubah</a></td>";
			echo "<td><a href='hapus_dokter.php?id=".$d['id_dokter']."'>Hapus</a></td>";
			
			
		}
		?>

	</table>
	<br/>
	<a href="index.php">Kembali</a>
	
</body>
</html>
