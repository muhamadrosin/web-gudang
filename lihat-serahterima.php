<html>
	<br /><p align="center"><b>lihat Serah Terima Barang</b></p><br>
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr bgcolor="#FFA600">
		<th width="5%"height="42">No</td>&nbsp;
		<th width="15%">Tanggal</td>&nbsp;
		<th width="15%">Code</td>&nbsp;
		<th width="20%">Nama Barang</td>&nbsp;   
		<th width="15%">Jumlah</td>&nbsp;	
		<th width="10%">Satuan</td>&nbsp;		
		<th width="10%">Status</td>&nbsp;     
	</tr>
	<?php
  include "koneksi.php";
		$Cari="SELECT * FROM serah_terima_barang ORDER BY tanggal";
		$Tampil = mysql_query($Cari);
		$nomer=0;
		while (	$hasil = mysql_fetch_array ($Tampil)) {
				$tanggal = stripslashes ($hasil['tanggal']);
				$code = stripslashes ($hasil['code']);
				$nama = stripslashes ($hasil['nama']);
				$jumlah = stripslashes ($hasil['jumlah']);
				$satuan = stripslashes ($hasil['satuan']);
				$status = stripslashes ($hasil['status']);
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
			<td>&nbsp;</td>
		</tr>
		<tr align="center">
			<td><?=$nomer?><div align="center"></div></td>
			<td><?=$tanggal?><div align="center"></div></td>
			<td><?=$code?><div align="center"></div></td>
			<td><?=$nama?><div align="center"></div></td>
			<td><?=$jumlah?><div align="center"></div></td>
			<td><?=$satuan?><div align="center"></div></td>
			<td><?=$status?><div align="center"></div></td>
		</tr>
		<tr align="center" bgcolor="#DFE6EF">
			<td>&nbsp;</td>
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
