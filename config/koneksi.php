<?php
$host ="localhost";
$user = "root"; 
$paswd="";
$db="db_ekspor";
$koneksi = mysqli_connect($host,$user,$paswd,$db);
//$koneksi = mysqli_connect($host,$user,$paswd,$db);

if($koneksi)
{
    echo "Terkoneksi dengan database";
    
}else{
    echo "Database tidak terkoneksi";
}