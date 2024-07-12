<!DOCTYPE html>
<html>
    <title>Apliasi Eksportir</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../assets/app.css">
<link rel="stylesheet" href="../assets/login.css">
</head>
<body>
<?php 
    session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
?>
<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="eksportir/data_eksportir.php">Data Ekportir</a>
  <a href="komoditi/data_komoditi.php">Data Komoditi</a>
  <a href="negara/data_negara.php">Data Negara</a>
  <a href="pelabuhan/data_pelabuhan.php">Data Pelabuhan</a>
  <a href="data_transaksi.php">Data Transaksi</a>
  <a href="logout.php">Logout</a>
</div>

<div style="padding-left:16px">
  <h2>Dashboard App</h2>
  <p>Aplikasi Eksportir</p>
  <table id="customers">
  <tr>
    <th>No</th>
    <th>Tahun</th>
    <th>Komoditi</th>
    <th>Negara Tujuan</th>
    <th>Ekportir</th>
    <th>Importir</th>
  </tr>
</table>
</div>
</body>
</html>
