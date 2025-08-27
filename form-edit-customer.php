<?php
include "koneksi.php";
if (isset($_GET['code'])) {
	$code = $_GET['code'];
} else {
	die ("Error. No Code Selected! ");	
}
//Tampilkan data dari tabel sparepart
	$query	= "SELECT * FROM jadwal_customer WHERE code='$code'";
	$sql	= mysql_query ($query);
	$hasil	= mysql_fetch_array ($sql);
		$code	= $hasil['code'];
		$nama_perusahaan	= $hasil['nama_perusahaan'];
		$bulan	= $hasil['bulan'];
		$nama		= $hasil['nama'];
		$jumlah_barang		= $hasil['jumlah_barang'];
		$satuan		= $hasil['satuan'];
		//proses edit data
		if (isset($_POST['Edit'])) {
			$code	= $_POST['hcode'];
			$nama_perusahaan	= $_POST['nama_perusahaan'];
			$bulan	= $_POST['bulan'];
			$nama	= $_POST['nama'];
			$jumlah_barang	= $_POST['jumlah_barang'];
			$satuan	= $_POST['satuan'];
			}
			//update
			$query = "UPDATE jadwal_customer SET nama_perusahaan='$nama_perusahaan', bulan='$bulan', nama='$nama',jumlah_barang='$jumlah_barang',satuan='$satuan' WHERE code='$code'";
			$sql = mysql_query ($query);
				//setelah berhasil update
				if ($sql) {
					echo "<h4><font color=#8BB2D9><center>Data Barang Berhasil diedit</center></font></h4><br />";
				} else {
					echo "<h4><font color=red><center>Data Barang gagal diedit</center></font></h4>";
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
			<td height="36">Nama Perusahaan</td>
			<td><input type="text" name="nama_perusahaan" size="40" value="<?=$nama_perusahaan?>"></td>
		</tr>
		<td height="36">&nbsp;</td>
				<td>Bulan</td>
			<td><label for="bulan"></label>
			<select name="bulan" id="bulan">
          <option value="Januari">januari</option>
          <option value="Pebruari">pebruari</option>
          <option value="Maret">maret</option>
          <option value="April">april</option>
		  <option value="Mei">mei</option>
		  <option value="Juni">juni</option>
		  <option value="Juli">juli</option>
		  <option value="Agustus">agustus</option>
		  <option value="September">september</option>
		  <option value="Oktober">oktober</option>
		  <option value="Nopember">nopember</option>
		  <option value="Desember">desember</option>
      </select></td>
    </tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">nama_barang</td>
			<td><input type="text" name="nama" size="40" value="<?=$nama?>"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">Jumlah_barang</td>
			<td><input type="text" name="jumlah_barang" size="40" value="<?=$jumlah_barang?>"></td>
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
				<input type="button" value="Cancel" onclick=location.href="home.php?page=lihat-customer" title="kembali ke lihat customer"></td>
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
