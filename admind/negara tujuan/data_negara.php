<!DOCTYPE html>
<html>
    <title>Data Negara</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../assets/app.css">
<link rel="stylesheet" href="../../assets/login.css">
</head>
<body>
<?php 
    session_start();
	if($_SESSION['status']!="login"){
		header("location:../../index.php?pesan=belum_login");
	}
    include "../../config/koneksi.php";
    $query = mysqli_query($koneksi,"SELECT * FROM negara_tujuan");
	$no = 1;
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
  <h2>Data Komoditi</h2>
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
  <a href="form_negara.php"><button   style="width: 15%;background-color:blue">Tambah Data Negara</button></a>
  <table id="customers" style="width: 50%;">
  <tr>
    <th>No</th>
    <th>Nama Negara</th>
    <th>Aksi</th>
  </tr>
    <?php 
    while($row=mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $row['nama_negara'];?></td>
        <td>
            <a href="form_edit_negara.php?id=<?php echo $row['id'];?>">Edit</a> |
            <a href="hapus_negara.php?id=<?php echo $row['id'];?>">Hapus</a> 
        </td>
    </tr>
    <?php 
        }
    ?>
</table>
</div>
</body>
</html>
