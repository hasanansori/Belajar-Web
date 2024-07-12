<!DOCTYPE html>
<html>
    <title>Data Komoditi</title>
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
    $query = mysqli_query($koneksi,"SELECT b.nama_kelompok,a.* FROM komoditi a INNER JOIN kelompok_komoditi b on a.id_kelompok=b.id;");
	$no = 1;
?>
<div class="topnav">
  <a href="index.php">Home</a>
  <a href="../eksportir/data_eksportir.php">Data Ekportir</a>
  <a class="active" href="data_komoditi.php">Data Komoditi</a>
  <a href="../negara/data_negara.php">Data Negara</a>
  <a href="../pelabuhan/data_pelabuhan.php">Data Pelabuhan</a>
  <a href="data_transaksi.php">Data Transaksi</a>
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
  <a href="data_kelompok_komoditi.php"><button   style="width: 17%;background-color:green"> Kelompok Komoditi</button></a>
  <a href="form_komoditi.php"><button   style="width: 15%;background-color:blue">Tambah Data Komoditi</button></a>
  <table id="customers" style="width: 50%;">
  <tr>
    <th>No</th>
    <th>Kelompok Komoditi</th>
    <th>Nama Komoditi</th>
    <th>Aksi</th>
  </tr>
    <?php 
    while($row=mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $row['nama_kelompok'];?></td>
        <td><?php echo $row['nama_komoditi'];?></td>
        <td>
            <a href="form_edit_komoditi.php?id=<?php echo $row['id'];?>">Edit</a> |
            <a href="hapus_komoditi.php?id=<?php echo $row['id'];?>">Hapus</a> 
        </td>
    </tr>
    <?php 
        }
    ?>
</table>
</div>
</body>
</html>
