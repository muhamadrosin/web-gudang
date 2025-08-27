<?php
include "koneksi.php";
if (isset($_GET['code'])) {
	$code = $_GET['code'];
} else {
	die ("Error. No Code Selected! ");	
}
//Tampilkan data dari tabel sparepart
	$query	= "SELECT * FROM barang_tkc WHERE code='$code'";
	$sql	= mysql_query ($query);
	$hasil	= mysql_fetch_array ($sql);
		$code	= $hasil['code'];
		$nama	= $hasil['nama'];
		$total_barang_kontrak	= $hasil['total_barang_kontrak'];
		$satuan	= $hasil['satuan'];
		
		//proses edit data
		if (isset($_POST['Edit'])) {
			$code	= $_POST['hcode'];
			$nama	= $_POST['nama'];
			$total_barang_kontrak	= $_POST['total_barang_kontrak'];
			$satuan	= $_POST['satuan'];
			//update
			$query = "UPDATE barang_tkc SET nama='$nama', total_barang_kontrak='$total_barang_kontrak', satuan='$satuan' WHERE code='$code'";
			$sql = mysql_query ($query);
				//setelah berhasil update
				if ($sql) {
					echo "<h4><font color=#8BB2D9><center>Data Barang Berhasil diedit</center></font></h4><br />";
				} else {
					echo "<h4><font color=red><center>Data Barang gagal diedit</center></font></h4>";
				}
		}
?>
<form action="#" method="POST" name="formedit" enctype="multipart/form-data">
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td width="5%">&nbsp;</td>
			<td width="25%">&nbsp;</td>
			<td width="70%">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><b>Form Edit Data</b></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">Code</td>
			<td>:&nbsp;<?=$code?><input type="hidden" name="hcode" value="<?=$code?>"></td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td height="36">Nama Barang</td>
			<td><input type="text" name="nama" size="40" value="<?=$nama?>"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">Total Stock Di TKC Sesuai Kontrak</td>
			<td><input type="text" name="total_barang_kontrak" size="40" value="<?=$total_barang_kontrak?>"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">Satuan</td>
			<td><input type="text" name="satuan" size="40" value="<?=$satuan?>"></td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td height="20">&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="Edit" value="Edit Data" >&nbsp;&nbsp;
				<input type="button" value="Cancel" onclick=location.href="home3.php?page=lihat-stock-tkc2" title="kembali ke lihat stock"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="32">&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</table>
</form>
<?php
//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
