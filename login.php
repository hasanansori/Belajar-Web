<?php 
// mengaktifkan session
session_start(); //cari apa itu session
//memanggil file koneksi 
include "config/koneksi.php";

//menangkap hasil kiriman dari form login
$u = $_POST['username'];
$p = md5($_POST['password']);

//mencari dan menyeleksi data dengan username dan password yang di kirim
$data = mysqli_query($koneksi,"SELECT * FROM login where username='$u' and password='$p'");

//mengecek hasil seleksi data,apakah ada atau tidak ada
$cek = mysqli_num_rows($data);
if($cek > 0)
{
    $_SESSION['username'] = $u;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}else{
    echo "Data tidak di temukan, username dan  password salah";
    // header("location:index.php?pesan=gagal");
}
