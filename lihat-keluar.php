<html>
<table>
	<br /><p align="center"><b>Laporan Barang Keluar</b></p><br>
	<table width="100%" border="1" align="center" cellpadding="1" cellspacing="0">
	<tr bgcolor="#FFA600">
		<th width="5%"height="42">No</td>&nbsp;
		<th width="15%">Tgl_pr</td>&nbsp;
		<th width="15%">Code</td>&nbsp;   
		<th width="10%">Jumlah</td>&nbsp;
		<th width="15%">Nama_Barang</td>&nbsp;
		<th width="1%">Satuan</td>&nbsp;		
		   
	</tr>
	<?php
  include "koneksi.php";
		$Cari="SELECT * FROM barang_keluar ORDER BY tgl_pr ASC";
		$Tampil = mysql_query($Cari);
		$nomer=0;
		while (	$hasil = mysql_fetch_array ($Tampil)) {
				$tgl_pr = stripslashes ($hasil['tgl_pr']);
				$code = stripslashes ($hasil['code']);
				$jumlah = stripslashes ($hasil['jumlah']);
				$nama= stripslashes ($hasil['nama']);
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
			<td><?=$tgl_pr?><div align="center"></div></td>
			<td><?=$code?><div align="center"></div></td>
			<td><?=$jumlah?><div align="center"></div></td>
			<td><?=$nama?><div align="center"></div></td>
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
