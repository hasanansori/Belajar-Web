<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../assets/app.css">
<link rel="stylesheet" href="../../assets/login.css">
<link rel="stylesheet" href="../../assets/select.css">
<style>


</style>
</head>
<body>
<?php 
    session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
    include "../../config/koneksi.php";
    $query=mysqli_query($koneksi,"SELECT * FROM kelompok_komoditi");
    $no = 1;
?>
<div class="topnav">
  <a href="index.php">Home</a>
  <a href="data_eksportir.php">Data Ekportir</a>
  <a class="active" href="data_komoditi.php">Data Komoditi</a>
  <a href="data_negara.php">Data Negara</a>
  <a href="data_pelabuhan.php">Data Pelabuhan</a>
  <a href="data_transaksi.php">Data Transaksi</a>
  <a href="logout.php">Logout</a>
</div>

<div style="padding-left:16px">
  <h2>Data Kelompok Komoditi</h2>
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
  <button type="button" style="width: 10%;background-color:red"><a href="data_komoditi.php"> Kembali</a></button>

  <form action="simpan_data_kelompok_komoditi.php" method="post">
  <div class="container" style="width: 30%;">
      <label for="uname"><b>Kelompok Komoditi</b></label>
      <input type="text" placeholder="" name="nama_kelompok" required>        
      <button type="submit">Simpan</button>
    </div>
  </form>
    <br>
    
  <table id="customers" style="width: 50%;">
  <tr>
    <th>No</th>
    <th>Kelompok Komoditi</th>
    <th>Aksi</th>
  </tr>
  <?php 
    while($row=mysqli_fetch_array($query)){
  ?>
  <tr>
      <td><?php echo $no++;?></td>
      <td><?php echo $row['nama_kelompok'];?></td>
      <td>
            <a href="form_edit_kelompok_komoditi.php?id=<?php echo $row['id'];?>">Edit</a> |
            <a href="hapus_kelompok_komoditi.php?id=<?php echo $row['id'];?>">Hapus</a> 
        </td>
  </tr>
  <?php 
    }
    ?>
</div>
</body>
</html>
