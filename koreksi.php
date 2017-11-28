<?php
	include "koneksiperpus.php";

	$ckod=$_POST['kkode'];
	$cari="select * from perpus where kode='$ckode'";
	$hasil=mysql_query($cari, $konn);
	while($kor=mysql_fetch_array($hasil))
	{

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PERPUSTAKAAN</title>
<style>
table{
		background-color:#0099FF;
		color:#00FFFF;
		font-size:20px;
		font-family:Geneva, Arial, Helvetica, sans-serif;
		border-radius: 15px;
		box-shadow:3px 3px 2px 2px black;
	}

h2{
		letter-spacing:0px;
		font-size: 20px;
		color:#33FFFF;
}
td{
		padding:10px;
}
div{
		margin-top:110px;
		margin-left:750px;
		position:absolute;
		left: 857px;
		top: 11px;
		height: 191px;
}
.tombol{
		font-size:20px;
		border-radius:10px 5px 10px 5px;
}
.tombol:hover{
				font-size:22px;
				border-radius:20px;
				color:#009966;
				box-shadow:3px 3px 2px 2px;}
</style>

</head>

<body bgcolor="#FFFFCC">

<form action="simpanperpus.php" method="post" name="form">
<table border="0" width="900" align="center">
<tr>
	<td colspan="3" align="center">
    	<h2>Data Perpustakaan</h2></td>
        </tr>
<tr>
	<td>
    	KODE</td><td>:</td>
    <td>
        <input type="text" name="kode" size="14" value=<?php echo $kor[0];?> /><br />
    </td>
</tr>
<tr>
	<td>
    	JUDUL BUKU</td><td>:</td>
    <td>
        <input type="text" name="judul" size="40" value=<?php echo $kor[1];?> /><br />
    </td>
</tr>
<tr>
	<td>
    	PENGARANG</td><td>:</td>
    <td>
        <input type="text" name="pengarang" size="40" value=<?php echo $kor[2];?> /><br />
    </td>
</tr>
<tr>
	<td>
    	TAHUN TERBIT</td><td>:</td>
    <td>
		<input type="date" name="tahun" value=<?php echo $kor[3];?> /><br />
    </td>
</tr>
<tr>
	<td>
    	PENERBIT</td><td>:</td>
    <td>
        <input type="text" name="penerbit" size="40" value=<?php echo $kor[4];?> /><br />
    </td>
</tr>
<tr>
	<td>
    	JENIS BUKU</td><td>:</td>
    <td>

        <select name="jenis">
			      <option value="1" <?php if($kor[5]==1){echo "selected";} ?> >KOMPUTER</option>
            <option value="2" <?php if($kor[5]==2){echo "selected";} ?> >EKONOMI</option>
            <option value="3" <?php if($kor[5]==3){echo "selected";} ?> >BAHASA</option>
            <option value="4" <?php if($kor[5]==4){echo "selected";} ?> >MASAK</option>
            <option value="5" <?php if($kor[5]==5){echo "selected";} ?> >SEJARAH</option>
            </select><br />
    </td>
</tr>
<tr>
	<td colspan="3" align="center">
    <form action="" method="post" class="">
    <input type="submit" name="tombol" value="simpan" />
    <input type="reset" class="tombol" value="hapus"  />

    </form>
  </td>
</tr>

</table>
</form>
</body>
</html>
<?php
}
?>
