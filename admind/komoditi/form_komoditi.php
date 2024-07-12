<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../assets/app.css">
<link rel="stylesheet" href="../assets/login.css">
<style>
select {

/* styling */
background-color: white;
border: thin solid blue;
border-radius: 4px;
display: inline-block;
font: inherit;
line-height: 1.5em;
padding: 0.5em 3.5em 0.5em 1em;

/* reset */

margin: 0;      
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}

select.pilihan {
background-image:
  linear-gradient(45deg, transparent 50%, gray 50%),
  linear-gradient(135deg, gray 50%, transparent 50%),
  linear-gradient(to right, #ccc, #ccc);
background-position:
  calc(100% - 20px) calc(1em + 2px),
  calc(100% - 15px) calc(1em + 2px),
  calc(100% - 2.5em) 0.5em;
background-size:
  5px 5px,
  5px 5px,
  1px 1.5em;
background-repeat: no-repeat;
}

select.minimal:focus {
background-image:
  linear-gradient(45deg, green 50%, transparent 50%),
  linear-gradient(135deg, transparent 50%, green 50%),
  linear-gradient(to right, #ccc, #ccc);
background-position:
  calc(100% - 15px) 1em,
  calc(100% - 20px) 1em,
  calc(100% - 2.5em) 0.5em;
background-size:
  5px 5px,
  5px 5px,
  1px 1.5em;
background-repeat: no-repeat;
border-color: green;
outline: 0;
}


select:-moz-focusring {
color: transparent;
text-shadow: 0 0 0 #000;
}

</style>
</head>
<body>
<?php 
    session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
    include "../../config/koneksi.php";
    $query = mysqli_query($koneksi,"SELECT * FROM kelompok_komoditi");
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
  <button type="button" style="width: 10%;background-color:red"><a href="data_komoditi.php"> Kembali</a></button>
  <form action="simpan_data_komoditi.php" method="post">
  <div class="container" style="width: 30%;">
        <label for="uname"><b>Kelompok Komoditi</b></label> <br>
        <select class="pilihan" required name="id_kelompok" id="">
            <option value=""> Pilih Kelompok Komoditi</option>
            <?php 
                while($row=mysqli_fetch_array($query)){
            ?>
            <option value="<?php echo $row['id'];?>"><?php echo $row['nama_kelompok'];?></option>
            <?php } ?>
        </select> 
    <br>
    <br>
      <label for="uname"><b>Nama Komoditi</b></label>
      <input type="text" placeholder="" name="nama_komoditi" required>        
      <button type="submit">Simpan</button>
    </div>
  </form>
</div>
</body>
</html>
