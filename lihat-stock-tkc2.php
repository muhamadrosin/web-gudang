<html>
	<br /><p align="center"><b>Data Stock Barang TKC</b></p><br>
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr bgcolor="#FFA600">
		<th width="5%"height="42">No</td>&nbsp;
		<th width="15%">Code</td>&nbsp;
		<th width="20%">Nama Barang</td>&nbsp;   
		<th width="20%">Total Barang Kontrak </td>&nbsp;   
		<th width="20%">Sisa Barang</td>&nbsp; 
		<th width="10%">Satuan</td>&nbsp;  
		<th width="15%">Action</td>&nbsp; 		
	</tr>
	<?php
  include "koneksi.php";
		$Cari="SELECT * FROM barang_tkc ORDER BY code";
		$Tampil = mysql_query($Cari);
		$nomer=0;
		while ($hasil = mysql_fetch_array ($Tampil)) {
				$code = stripslashes ($hasil['code']);
				$nama = stripslashes ($hasil['nama']);
				$total= stripslashes ($hasil['total']);
				$total_barang_kontrak = stripslashes ($hasil['total_barang_kontrak']);
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
			<td>&nbsp;</td>
		</tr>
		<tr align="center">
			<td><?=$nomer?><div align="center"></div></td>
			<td><?=$code?><div align="center"></div></td>
			<td><?=$nama?><div align="center"></div></td>
			<td><?=$total?><div align="center"></div></td>
			<td><?=$total_barang_kontrak?><div align="center"></div></td>
			<td><?=$satuan?><div align="center"></div></td>
			<td bgcolor="#EEF2F7"><div align="center"><a href="form-edit-barang-tkc.php?page=form-edit-barang-tkc&code=<?=$code?>">Edit</a> | <a href="delete-barang-tkc.php?page=delete-barang-tkc&code=<?=$code?>" OnClick="return confirm('Yakin Data <?=$code?> akan dihapus?');">Delete</a></div></td>
		</tr>
		<tr align="center" bgcolor="#DFE6EF">
			<td>&nbsp;</td>
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
