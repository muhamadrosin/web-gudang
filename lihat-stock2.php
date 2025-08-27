<html>
	<br /><p align="center"><b>Data Stock Barang</b></p><br>
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr bgcolor="#FFA600">
		<th width="10%"height="42">No</td>&nbsp;
		<th width="20%">Code</td>&nbsp;
		<th width="20%">Nama</td>&nbsp;   
		<th width="20%">Stock Di Atk</td>&nbsp; 
		<th width="20%">Satuan</td>&nbsp;  
	</tr>
	<?php
  include "koneksi.php";
		$Cari="SELECT * FROM barang ORDER BY code";
		$Tampil = mysql_query($Cari);
		$nomer=0;
		while (	$hasil = mysql_fetch_array ($Tampil)) {
				$code = stripslashes ($hasil['code']);
				$nama = stripslashes ($hasil['nama']);
				$onhand = stripslashes ($hasil['onhand']);
				$satuan = stripslashes ($hasil['satuan']);
			{
		$nomer++;
	?>
		<tr align="center" bgcolor="#DFE6EF">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr align="center">
			<td><?=$nomer?><div align="center"></div></td>
			<td><?=$code?><div align="center"></div></td>
			<td><?=$nama?><div align="center"></div></td>
			<td><?=$onhand?><div align="center"></div></td>
			<td><?=$satuan?><div align="center"></div></td>
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
