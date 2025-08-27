<html>
	<br /><p align="center"><b>Data Kirim Barang</b></p><br>
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr bgcolor="#FFA600">
		<th width="10%"height="42">No</td>&nbsp;
		<th width="20%">Tanggal</td>&nbsp;
		<th width="20%">Code</td>&nbsp;
		<th width="15%">Nama</td>&nbsp;   
		<th width="10%">Jumlah</td>&nbsp;  
		<th width="10%">Satuan</td>&nbsp; 
		<th width="10%">Action</td>&nbsp; 		
	</tr>
	<?php
  include "koneksi.php";
		$Cari="SELECT * FROM barang_kirim ORDER BY code";
		$Tampil = mysql_query($Cari);
		$nomer=0;
		while (	$hasil = mysql_fetch_array ($Tampil)) {
				$tanggal = stripslashes ($hasil['tanggal']);
				$code = stripslashes ($hasil['code']);
				$nama = stripslashes ($hasil['nama']);
				$jumlah = stripslashes ($hasil['jumlah']);
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
			<td><?=$tanggal?><div align="center"></div></td>
			<td><?=$code?><div align="center"></div></td>
			<td><?=$nama?><div align="center"></div></td>
			<td><?=$jumlah?><div align="center"></div></td>
			<td><?=$satuan?><div align="center"></div></td>
			<td bgcolor="#EEF2F7"><div align="center"><a href="form-edit-kirim.php?page=form-edit-kirim&code=<?=$code?>">Edit</a> | <a href="delete-kirim.php?page=delete-kirim&code=<?=$code?>" OnClick="return confirm('Yakin Data <?=$code?> akan dihapus?');">Delete</a></div></td>
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
