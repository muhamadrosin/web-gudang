<?php
include "koneksi.php";
if (isset($_GET['code'])) {
	$code = $_GET['code'];
} else {
	die ("Error. No Code Selected! ");	
}
//Tampilkan data dari tabel sparepart
	$query	= "SELECT * FROM serah_terima_barang WHERE code='$code'";
	$sql	= mysql_query ($query);
	$hasil	= mysql_fetch_array ($sql);
		$tanggal	= $hasil['tanggal'];
		$code	= $hasil['code'];
		$nama	= $hasil['nama'];
		$jumlah		= $hasil['jumlah'];
		$satuan		= $hasil['satuan'];
		$status		= $hasil['status'];
		//proses edit data
		if (isset($_POST['Edit'])) {
			$tanggal	= $_POST['htanggal'];
			$code	= $_POST['code'];
			$nama	= $_POST['nama'];
			$jumlah	= $_POST['jumlah'];
			$satuan	= $_POST['satuan'];
			$status	= $_POST['status'];
			}
			//update
			$query = "UPDATE serah_terima_barang SET tanggal='$tanggal', nama='$nama', jumlah='$jumlah',satuan='$satuan',status='$status' WHERE code='$code'";
			$sql = mysql_query ($query);
				//setelah berhasil update
				if ($sql) {
					echo "<h4><font color=#8BB2D9><center>Data Barang Berhasil disetujui</center></font></h4><br />";
				} else {
					echo "<h4><font color=red><center>Data Barang gagal disetujui</center></font></h4>";
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
			<td><b>Form persetujuan</b></td>
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
			<td height="36">code</td>
			<td><input type="text" name="code" size="40" value="<?=$code?>"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">nama</td>
			<td><input type="text" name="nama" size="40" value="<?=$nama?>"></td>
		</tr>
    </tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">Jumlah</td>
			<td><input type="text" name="jumlah" size="40" value="<?=$jumlah?>"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">Satuan</td>
			<td><input type="text" name="satuan" size="40" value="<?=$satuan?>"></td>
		</tr>
		<td height="36">&nbsp;</td>
				<td>status</td>
			<td><label for="status"></label>
			<select name="status" id="status">
          <option value="tidak Disetujui">Tidak Disetujui</option>
          <option value="Disetujui">Disetujui</option>
      </select></td>
    </tr>
		<tr>
			<td>&nbsp;</td>
			<td height="20">&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="Edit" value="form persetujuan" >&nbsp;&nbsp;
				<input type="button" value="Cancel" onclick=location.href="home3.php?page=lihat-serahterima2" title="kembali ke lihat serahterima2"></td>
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
