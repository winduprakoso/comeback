<?php
include ('koneksiperpus.php');
$ckode=$_POST['kkode'];

$hapus="delete from perpus where kode='$ckode'";
mysql_query($hapus,$konn);
header('location;tampilperpus.php');

?>
