<?php  
// koneksi database  
include 'koneksi.php';  

// menangkap data yang dikirim dari form  
$nama = $_POST['nama'];  
$nis = $_POST['nis'];  
$alamat = $_POST['alamat'];  

// menginput data ke database  
mysqli_query($koneksi, "INSERT INTO tb_siswa (nama, nis, alamat) VALUES('$nama', '$nis', '$alamat')");  

// mengalihkan halaman kembali ke index.php  
header("location:login.php");  
?>  