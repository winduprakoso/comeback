<?php
include ('koneksiperpus.php');
$ckode=$_POST['kode'];
$cjudul=$_POST['judul'];
$cpengarang=$_POST['pengarang'];
$ctahun=$_POST['tahun'];
$cpenerbit=$_POST['penerbit'];
$cjenis=$_POST['jenis'];

$ubah="Update perpus set nama='$ckode',judul='$cjudul',pengarang='$cpengarang',
tahun='$ctahun',penerbit='$cpenerbit',jenis='$cjenis'";
mysql_query($ubah,$konn);
header('location:tampilperpus.php');

 ?>
