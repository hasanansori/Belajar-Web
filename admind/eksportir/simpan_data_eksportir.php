<?php
 session_start();
 if($_SESSION['status']!="login"){
     header("location:../index.php?pesan=belum_login");
 }
 include "../../config/koneksi.php";
 $nama = $_POST['nama_eksportir'];

$insert = mysqli_query($koneksi,"INSERT INTO eksportir (nama_eksportir) value ('$nama')");
header("location:data_eksportir.php?pesan=input");
?>