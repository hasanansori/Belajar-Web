<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../assets/app.css">
<link rel="stylesheet" href="../../assets/login.css">
</head>
<body>
<?php 
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../index.php?pesan=belum_login");
    }
    include "../../config/koneksi.php";
    $id = $_GET['id'];
    $query = mysqli_query($koneksi,"SELECT * FROM negara_tujuan where id='$id'");
    $row = mysqli_fetch_array($query);
?>
<div class="topnav">
    <a href="../index.php">Home</a>
  <a href="../eksportir/data_eksportir.php">Data Ekportir</a>
  <a  href="../komoditi/data_komoditi.php">Data Komoditi</a>
  <a class="active" href="data_negara.php">Data Negara</a>
  <a href="../pelabuhan/data_pelabuhan.php">Data Pelabuhan</a>
  <a href="../data_transaksi.php">Data Transaksi</a>
  <a href="logout.php">Logout</a>
</div>

<div style="padding-left:16px">
  <h2>Data Negara</h2>
  <br>
  <button type="button" style="width: 10%;background-color:red"><a href="data_negara.php"> Kembali</a></button>
  <form action="simpan_edit_negara.php" method="post">
  <div class="container" style="width: 30%;">
      <label for="uname"><b>Nama Negara</b></label>
      <input type="hidden" name="id" value="<?php echo $row['id'];?>">
      <input type="text" placeholder="" name="nama_negara" value="<?php echo $row['nama_negara'];?>" required>        
      <button type="submit">Simpan</button>
    </div>
  </form>
</div>
</body>
</html>
