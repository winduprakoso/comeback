<?php
$xhost="192.168.10.250";
$xuser="a111609690";
$xpass="";
$xdb="a111609690";

$konn=mysql_connect($xhost,$xuser,$xpass);
if($konn)
{
	echo "<h1>!!!</h1>";
}

$dbak=mysql_select_db($xdb,$konn);
if($dbak)
{
	echo"<h1>Database Aktif!</h1>";
}

?>
