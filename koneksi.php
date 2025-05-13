<?php

$host         = "localhost";
$user         = "root";
$password     = "";
$database     = "db_siswa";

// diberi nama variabel koneksi
$koneksi = mysqli_connect($host,$user,$password,$database);

// Check connection
if(mysqli_connect_errno())
{
    echo "koneksi database gagal : ". mysqli_connect_error();
}
 else
{
    echo "koneksi Database Berhasil";
}
?> 