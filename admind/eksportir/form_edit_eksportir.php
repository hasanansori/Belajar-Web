<?php
 session_start();
 if($_SESSION['status']!="login"){
     header("location:../index.php?pesan=belum_login");
 }
 include "../../config/koneksi.php";
 $id = $_GET['id'];
 $query = mysqli_query($koneksi,"SELECT * FROM eksportir where id='$id'");
 $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../assets/app.css">
<link rel="stylesheet" href="../../assets/login.css">
</head>
<body>
<div class="topnav">
  <a href="index.php">Home</a>
  <a class="active" href="data_eksportir.php">Data Ekportir</a>
  <a href="data_komoditi.php">Data Komoditi</a>
  <a href="data_negara.php">Data Negara</a>
  <a href="data_pelabuhan.php">Data Pelabuhan</a>
  <a href="data_transaksi.php">Data Transaksi</a>
  <a href="logout.php">Logout</a>
</div>

<div style="padding-left:16px">
  <h2>Form Ubah Data Eksportir</h2>
  <br>
  <button type="button" style="width: 10%;background-color:red"><a href="data_eksportir.php"> Kembali</a></button>
  <form action="simpan_edit_eksportir.php" method="post">
  <div class="container" style="width: 30%;">
    <input type="hidden" value="<?php echo $row['id'];?>">
      <label for="uname"><b>Nama Eksportir</b></label>
      <input type="text"  name="nama_eksportir" required value="<?php echo $row['nama_eksportir'];?>">        
      <button type="submit">Simpan</button>
    </div>
  </form>
</div>
</body>
</html>