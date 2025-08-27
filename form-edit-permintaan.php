<?php
include "koneksi.php";
if (isset($_GET['code'])) {
	$code = $_GET['code'];
} else {
	die ("Error. No Code Selected! ");	
}
//Tampilkan data dari tabel sparepart
	$query	= "SELECT * FROM permintaan_barang WHERE code='$code'";
	$sql	= mysql_query ($query);
	$hasil	= mysql_fetch_array ($sql);
		$tanggal= $hasil['tanggal'];
		$code	= $hasil['code'];
		$nama		= $hasil['nama'];
		$jumlah		= $hasil['jumlah'];
		$satuan		= $hasil['satuan'];
		$status		= $hasil['status'];
		//proses edit data
		if (isset($_POST['Edit'])) {
			$tanggal	= $_POST['htanggal'];
			$code	= $_POST['hcode'];
			$nama	= $_POST['hnama'];
			$jumlah	= $_POST['hjumlah'];
			$satuan	= $_POST['hsatuan'];
			$status		= $hasil['status'];
			}
			//update
			$query = "UPDATE permintaan_barang SET tanggal='$tanggal',nama='$nama',jumlah='$jumlah',satuan='$satuan',status='$status' WHERE code='$code'";
			$sql = mysql_query ($query);
				//setelah berhasil update
				if ($sql) {
					echo "<h4><font color=#8BB2D9><center>Data Barang Berhasil di setujui</center></font></h4><br />";
				} else {
					echo "<h4><font color=red><center>Data Barang gagal disetuji</center></font></h4>";
				}
?>
<form action="#" method="POST" name="form-edit-permintaan" enctype="multipart/form-data">
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
			<td height="36">Tanggal</td>
			<td>:&nbsp;<?=$tanggal?><input type="hidden" name="htanggal" value="<?=$tanggal?>"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">Code</td>
			<td>:&nbsp;<?=$code?><input type="hidden" name="hcode" value="<?=$code?>"></td>
		</tr>

    </tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">nama_barang</td>
			<td>:&nbsp;<?=$nama?><input type="hidden" name="hnama" value="<?=$nama?>"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">Jumlah_barang</td>
			<<td>:&nbsp;<?=$jumlah?><input type="hidden" name="hjumlah" value="<?=$jumlah?>"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">Satuan</td>
			<td>:&nbsp;<?=$satuan?><input type="hidden" name="hsatuan" value="<?=$satuan?>"></td>
		</tr>
		<tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">Status</td>
			<td>:&nbsp;<?=$status?><input type="text" name="status" value="<?=$status?>"></td>
		</tr>
			<td>&nbsp;</td>
			<td height="20">&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="Edit" value="Edit Data" >&nbsp;&nbsp;
				<input type="button" value="Cancel" onclick=location.href="lihat-permintaan2.php?page=lihat-permintaan2" title="kembali ke lihat Permintaan2"></td>
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
