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
	<table border="1">
		<tr>
			<td>NO</td>
			<td>Id</td>
			<td>Nama</td>
			<td>NIM</td>
			<td>Aksi</td>
		</tr>
		<?php
			include"koneksi.php";

			$no =1;
			$Data= mysqli_query($koneksi,"SELECT * FROM mahasiswa");
		

			while ($hasil= mysqli_fetch_array($Data)) {
				?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $hasil['id']; ?></td>
				<td><?php echo $hasil['nama']; ?></td>
				<td><?php echo $hasil['nim']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $hasil['id']; ?>"> Ubah </a>
					<a href="hapus.php?id=<?php echo $hasil['id']; ?>"> Hapus </a>
				</td>
			</tr>
			<?php
			}
		?>
	</table>

	<a href="tambah.php">Tambah Mahasiswa</a>
	
</body>
</html>