<?php
 session_start();
 if($_SESSION['status']!="login"){
     header("location:../index.php?pesan=belum_login");
 }
 include "../../config/koneksi.php";
 $kelompok = $_POST['id_kelompok'];
 $nama = $_POST['nama_komoditi'];

$insert = mysqli_query($koneksi,"INSERT INTO komoditi (id_kelompok,nama_komoditi) value ('$kelompok','$nama')");
if($insert)
{
    header("location:form_komoditi.php?pesan=input");
}else{
    header("location:form_komoditi.php?pesan=error");
}

?>