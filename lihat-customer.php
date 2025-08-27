<html>
<table>
	<br /><p align="center"><b>Jadwal Kedatangan Barang</b></p><br>
	<table width="100%" border="1" align="center" cellpadding="1" cellspacing="0">
	<tr bgcolor="#FFA600">
		<th width="5%"height="42">No</td>&nbsp;
		<th width="15%">Code</td>&nbsp;
		<th width="15%">Nama Perusahaan</td>&nbsp;   
		<th width="10%">Bulan</td>&nbsp;
		<th width="15%">Nama_Barang</td>&nbsp;
		<th width="15%">Jumlah_barang</td>&nbsp;
		<th width="1%">Satuan</td>&nbsp;		
		<th width="30%">Action</td>&nbsp;     
	</tr>
	<?php
  include "koneksi.php";
		$Cari="SELECT * FROM jadwal_customer ORDER BY code";
		$Tampil = mysql_query($Cari);
		$nomer=0;
		while (	$hasil = mysql_fetch_array ($Tampil)) {
				$code = stripslashes ($hasil['code']);
				$nama_perusahaan = stripslashes ($hasil['nama_perusahaan']);
				$bulan = stripslashes ($hasil['bulan']);
				$nama= stripslashes ($hasil['nama']);
				$jumlah_barang = stripslashes ($hasil['jumlah_barang']);
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
			<td><?=$nama_perusahaan?><div align="center"></div></td>
			<td><?=$bulan?><div align="center"></div></td>
			<td><?=$nama?><div align="center"></div></td>
			<td><?=$jumlah_barang?><div align="center"></div></td>
			<td><?=$satuan?><div align="center"></div></td>
			</td>
                 <td bgcolor="#EEF2F7"><div align="center"><a href="home.php?page=tampil&code=<?=$code?>">PILIH BULAN</a> | <a href="home.php?page=form-edit-customer&code=<?=$code?>">Edit</a> | <a href="home.php?page=delete-customer&code=<?=$code?>" OnClick="return confirm('Yakin Data <?=$code?> akan dihapus?');">Delete</a></div></td>

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
