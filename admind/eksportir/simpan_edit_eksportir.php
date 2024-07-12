<?php
 session_start();
 if($_SESSION['status']!="login"){
     header("location:../index.php?pesan=belum_login");
 }
 include "../config/koneksi.php";
 $id = $_POST['id'];
 $nama = $_POST['nama_eksportir'];

$update = mysqli_query($koneksi,"UPDATE  eksportir set nama_eksportir='$nama' where id='$id'");
if($update)
{
    header("location:data_eksportir.php?pesan=update");
}else{
    header("location:data_eksportir.php?pesan=error");
}

?>