<?php
 session_start();
 if($_SESSION['status']!="login"){
     header("location:../../index.php?pesan=belum_login");
 }
 include "../../config/koneksi.php";
 $nama = $_POST['nama_negara'];

$insert = mysqli_query($koneksi,"INSERT INTO negara_tujuan (nama_negara) value ('$nama')");
header("location:form_negara.php?pesan=input");
?>