<?php
include "koneksiperpus.php";

$ckode=$_POST['kode'];
$cjudul=$_POST['judul'];
$cpengarang=$_POST['pengarang'];
$ctahun=$_POST['tahun'];
$cpenerbit=$_POST['penerbit'];
$cjenis=$_POST['jenis'];


$savedt="insert into perpus (kode,judul,pengarang,tahun,penerbit,jenis)
		 values ('$ckode','$cjudul','$cpengarang','$ctahun','$cpenerbit','$cjenis')";
mysql_query($savedt,$konn);

?>
