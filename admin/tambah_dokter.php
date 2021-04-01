<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Dokter | esemka-his</title>
</head>
<body>
<a href="dokter.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Tambah Data Dokter</h3>
	<form method="post" action="tambah_dokter_aksi.php">
		<table>
			<tr>			
				<td>Nama Dokter</td>
				<td><input type="text" name="nama_dokter"></td>
			</tr>
            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Nama Poli</td>
				<td><input type="text" name="nama_poli"></td>
			</tr>
            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td></td>
				<td>
                    <input type="submit" value="SIMPAN">
                    <input type="reset"  value="BATAL">
                </td>
			</tr>		
		</table>
	</form>
</body>
</html>