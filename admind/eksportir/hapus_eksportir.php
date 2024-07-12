<?php
 session_start();
 if($_SESSION['status']!="login"){
     header("location:../index.php?pesan=belum_login");
 }
 include "../../config/koneksi.php";
 $id = $_GET['id'];

$delete = mysqli_query($koneksi,"DELETE FROM  eksportir where id='$id'");
if($delete)
{
    header("location:data_eksportir.php?pesan=hapus");
}else{
    header("location:data_eksportir.php?pesan=error");
}

?>