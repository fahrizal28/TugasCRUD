<?php
// koneksi databese
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];

//menginput data ke databese
mysqli_query($koneksi, "insert into mahasiswa values('','$nama','$nim')");

//mengalihkan halaman kembali ke index.php
header("location:index.php")

?>