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
?>
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
  <h2>Data Eksportir</h2>
  <?php 
    if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
  ?>
  <br>
  <button type="button" style="width: 10%;background-color:red"><a href="data_eksportir.php"> Kembali</a></button>
  <form action="simpan_data_eksportir.php" method="post">
  <div class="container" style="width: 30%;">
      <label for="uname"><b>Nama Eksportir</b></label>
      <input type="text" placeholder="" name="nama_eksportir" required>        
      <button type="submit">Simpan</button>
    </div>
  </form>
</div>
</body>
</html>
