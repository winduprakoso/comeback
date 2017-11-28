<?php
include "koneksiperpus.php";

$kuery="select * from perpus";
$hasil=mysql_query($kuery,$konn);

echo "<h1> Tampilan Data </h1>";
?>
<table border="1" width="900">
<tr>

    <td>Kode Buku</td>
    <td>Judul Buku</td>
    <td>Pengarang</td>
    <td>Tahun Terbit</td>
    <td>Penerbit</td>
    <td>Jenis Buku</td>
    <td>Aksi</td>

</tr>
<?php
$nomer=0;
while ($isi=mysql_fetch_array($hasil))
{
?>
<tr>
  <td><?php echo $nomer;?></td>
	<td><?php echo $isi[0];//kode?></td>
	<td><?php echo $isi[1];//judul?></td>
  <td><?php echo $isi[2];//pengarang?></td>
  <td><?php echo $isi[3];//tahun terbit?></td>
  <td><?php echo $isi[4];//Penerbit?></td>

  <td><?php
				if ($isi[5]==1)
				{
					echo "Komputer";
				}
				elseif ($isi[5]==2)
				{
					echo "Ekonomi";
				}
				elseif ($isi[5]==3)
				{
					echo "Bahasa";
				}
				elseif ($isi[5]==4)
				{
					echo "Komik";
				}
				else
				{
					echo "Sejarah";
				}
				?></td>

    <td><?php
			echo "<a href=koreksi.php?knim=$isi[0]>Edit </a>";
			echo "<a href=delete.php?knim=$isi[0]> -Del </a>";
      echo "<a href=update.php?kkod=$isi[0]> -Upd</a>";
		?></td>
</tr>
<?php
}
?>
</table>
