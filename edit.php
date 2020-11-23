<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<center>
		<h2><font color="RED">DATA MAHASISWA PRODI SISTEM INFORMASI</font></h2>
	</br>
	<h3>EDIT DATA</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>
					<td>nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>nim</td>
					<td><input type="number" name="nim" value="<?php echo $d['nim']; ?>"></td>
				</tr>

				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN">
						<input type="button" value="KEMBALI" onClick="window.location='index.php'"></td>
				</tr>
			</table>
		</form>
		<?php	
	}
	?>

</body>
</html>