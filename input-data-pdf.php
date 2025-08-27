<html>
	<br /><p align="center"><b>Data pdf</b></p><br>
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr bgcolor="#FFA600">
		<th width="20%">pdf</td>&nbsp;   
		<th width="30%">Action</td>&nbsp;     
	</tr>
	<?php
  include "koneksi.php";
		$Cari="SELECT * FROM pdf ORDER BY pdf";
		$Tampil = mysql_query($Cari);
		$nomer=0;
		while (	$hasil = mysql_fetch_array ($Tampil)) {
				$namapdf = stripslashes ($hasil['pdf']);
				$pdf = $hasil['pdf'];
			{
		$nomer++;
	?>
		<tr align="center" bgcolor="#DFE6EF">
			<td>&nbsp;</td>
		</tr>
		<tr align="center">
			<td><?php
				if (empty($pdf)) 
					echo "<strong><pdf src='pdf/nopic.gif' width='110' height='110'> <br> No pdf </strong>";
					else
					echo "<pdf class='shadow' src='pdf/$pdf' width='110' height='110' title='$nama' >";
					?>&nbsp;
			</td>
                 <td bgcolor="#EEF2F7"><div align="center"><a href="home.php?page=form-edit&code=<?=$code?>">Edit</a> | <a href="home.php?page=delete-sparepart&code=<?=$code?>" OnClick="return confirm('Yakin Data <?=$code?> akan dihapus?');">Delete</a></div></td>

		</tr>
		<tr align="center" bgcolor="#DFE6EF">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td> 
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	<?php  
			}
		}
	//Tutup koneksi engine MySQL
		mysql_close($Open);
	?>
</table>
</html>
