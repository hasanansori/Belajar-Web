<?php
 session_start();
 if($_SESSION['status']!="login"){
     header("location:../index.php?pesan=belum_login");
 }
 include "../../config/koneksi.php";
 $nama = $_POST['nama_kelompok'];

$insert = mysqli_query($koneksi,"INSERT INTO kelompok_komoditi (nama_kelompok) value ('$nama')");
header("location:data_kelompok_komoditi.php?pesan=input");
?>