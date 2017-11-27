<?php
include ('koneksiperpus.php');
$cnim=$_POST['knim'];

$hapus="delete from perpus where nim='$cnim'";
mysql_query($hapus,$konn);
header('location;tampilperpus.php');

?>
