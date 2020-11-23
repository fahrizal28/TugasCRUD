<?php
// koneksi databese
include 'koneksi.php';

// menangkap data di yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari databese
mysqli_query($koneksi,"delete from mahasiswa where id='$id'");

// mengalihkan halaman kembali ke indekx.php
header("location:index.php");
?>