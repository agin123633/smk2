<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit | esemka-his</title>
</head>
<body>

	<br/>
	<?php
	include '../config.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM dokter WHERE id_dokter='$id'");
	$d = mysqli_fetch_array($data)
	?>
		<form method="post" action="update_dokter.php?id=<?php echo $id; ?>">
			<table>
				<tr>			
					<td>Nama Dokter</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama_dokter" value="<?php echo $d['nama_dokter']; ?>">
					</td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
                <tr>			
					<td>Nama Poli</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama_poli" value="<?php echo $d['nama_poli']; ?>">
					</td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr>
					<td></td>
					<td><input type="submit" value="UBAH">
					<a href="dokter.php"><input type="button" value="BATAL"></a></td>
				</tr>		
			</table>
		</form>
		<?php 
	
	?>

</body>
</html>
