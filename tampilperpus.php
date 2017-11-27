<?php
include "koneksiperpus.php";


$kuery="select * from perpus";
$hasil=mysql_query($kuery,$konn);
$nomer=0;

echo "<h1> Tampilan Data Bosque</h1>";
?>
<table border="1" width="900">
<tr>

    <td>Kode Buku</td>
    <td>Judul Buku</td>
    <td>Pengarang</td>
    <td>Tahun Terbit</td>
    <td>Penerbit</td>
    <td>Jenis Buku</td>

</tr>
<?php
while ($isi=mysql_fetch_array($hasil))
{
?>
<tr>
	<td><?php echo $isi[0];//kode?></td>
	<td><?php echo $isi[1];//judul?></td>
    <td><?php echo $isi[2];//pengarang?></td>
    <td><?php echo $isi[3];//tahun terbit?></td>
    <td><?php echo $isi[5];//Penerbit?></td>
	<td><?php echo $isi[6];//jenis?></td>
    <td><?php
				if ($isi[6]==1)
				{
					echo "Komputer";
				}
				elseif ($isi[6]==2)
				{
					echo "Ekonomi";
				}
				elseif ($isi[6]==3)
				{
					echo "Bahasa";
				}
				elseif ($isi[6]==4)
				{
					echo "Anak Anak";
				}
				else
				{
					echo "Sejarah";
				}
				?></td>
    <td><?php
			echo "<a href=koreksi.php?knim=$isi[0]>Edit </a>";
			echo "<a href=delete.php?knim=$isi[0]> -Del </a>";
		?></td>
</tr>
<?php
}
?>
</table>
