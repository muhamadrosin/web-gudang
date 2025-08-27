<html>
<?php
//koneksi engine database mySql
include "koneksi.php";
	   $tanggal=date("Y-m-d");
	//fungsi kode otomatis
		function kdauto($tabel, $inisial){
		$struktur   = mysql_query("SELECT * FROM $tabel");
		$field            = mysql_field_name($struktur,0);
		$panjang    = mysql_field_len($struktur,0);
		$qry  = mysql_query("SELECT max(".$field.") FROM ".$tabel);
		$row  = mysql_fetch_array($qry);
		if ($row[0]=="") {
		$angka=0;
		}
		else {
		$angka= substr($row[0], strlen($inisial));
		}
		$angka++;
		$angka      =strval($angka);
		$tmp  ="";
		for($i=1; $i<=($panjang-strlen($inisial)-strlen($angka)); $i++) {
		$tmp=$tmp."0";
		}
		return $inisial.$tmp.$angka;
		}

	?>
<head>
	<link rel="stylesheet" href="style.css" media="screen">
</head>
<div class="content">
	<form action="input-data-customer.php" method="POST" enctype="multipart/form-data">
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td width="5%">&nbsp;</td>
				<td width="25%">&nbsp;</td>
				<td width="70%">&nbsp;</td>
			</tr>
			<tr>
				<td height="36">&nbsp;</td>
				<td>&nbsp;</td>
				<td><font size="4"><b>INPUT JADWAL VENDOR</b></font></td>
			</tr>
			<tr>
				<td width="5%" height="36">&nbsp;</td>
				<td width="25%">&nbsp;</td>
				<td width="70%">&nbsp;</td>
			</tr>
			<tr>
				<td height="36">&nbsp;</td>
				<td>Kode Barang</td>
				<td><?php
					$Open or die("Koneksi gagal");
					$Koneksi or die("Database tidak bisa dibuka");
					$result = mysql_query("SELECT * FROM barang");
					$jsArray = "var nama = new Array();\n";
					echo '<input name="code" onchange="changeValue(this.value)">';
					while ($row = mysql_fetch_array($result)) {
						$jsArray .= "nama['" . $row['code'] . "'] = {nama:'" . addslashes($row['nama']) . "'};\n";
					}
					echo '';
					?>
					<script type="text/javascript">
						<?php echo $jsArray; ?>
						function changeValue(id){
						document.getElementById('nama').value = nama[id].nama;
						};
					</script>
				</td>
			</tr>
			
			<tr>
				<td height="36">&nbsp;</td>
				<td>Nama Perusahaan</td>
				<td><input type="text" name="nama_perusahaan" size="35"></td>
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
				<td height="36">&nbsp;</td>
				<td>Nama Barang</td>
				<td><input type="text" name="nama" readonly value id="nama" size="40" /></td>
			</tr>
			<tr>
				<td height="36">&nbsp;</td>
				<td>Jumlah Barang</td>
				<td><input type="text" name="jumlah_barang" size="7"></td>
			</tr>
			<tr>
				<td height="36">&nbsp;</td>
				<td>Satuan</td>
				<td><input type="text" name="satuan" size="7"></td>
			</tr>
			<tr>
				<td height="72">&nbsp;</td>
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Simpan">&nbsp;&nbsp;&nbsp;
					<input type="reset" name="reset" value="Reset"></td>
			</tr>
			<tr>
				<td width="5%">&nbsp;</td>
				<td width="25%">&nbsp;</td>
				<td width="70%">&nbsp;</td>
			</tr>
		</table>
	</form>
</div>
</html>
