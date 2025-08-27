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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
	<link type="text/css" href="js/themes/base/ui.all.css" rel="stylesheet" /> 
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/ui.core.js"></script>
<script type="text/javascript" src="js/ui.datepicker.js"></script>


<script type="text/javascript"> 
      $(document).ready(function(){
        $("#tanggal").datepicker({
		dateFormat  : "yy-mm-dd", 
          changeMonth : true,
          changeYear  : true
		  
        });
      });
	  
    </script>
</head>
<div class="content">
	<form action="input-serah-terima.php" method="POST" enctype="multipart/form-data">
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td width="5%">&nbsp;</td>
				<td width="25%">&nbsp;</td>
				<td width="70%">&nbsp;</td>
			</tr>
			<tr>
				<td height="36">&nbsp;</td>
				<td>&nbsp;</td>
				<td><font size="4"><b>INPUT DATA SERAH TERIMA BARANG </b></font></td>
			</tr>
			<tr>
				<td width="5%" height="36">&nbsp;</td>
				<td width="25%">&nbsp;</td>
				<td width="70%">&nbsp;</td>
			</tr>
			<tr>
				<td height="36">&nbsp;</td>
				<td nowrap="nowrap" align="right"><div align="left">tanggal </div></td>
				<td><input required type="text" name="tanggal" value="" size="10" class="span9" id="tanggal" /></td>
			</tr>
			<tr>
				<td height="36">&nbsp;</td>
				<td>Kode Barang</td>
				<td><?php
					$Open or die("Koneksi gagal");
					$Koneksi or die("Database tidak bisa dibuka");
					$result = mysql_query("SELECT * FROM barang_tkc");
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
				<td>Nama Barang</td>
				<td><input type="text" name="nama" readonly value id="nama" size="40" /></td>
			</tr>
			<tr>
				<td height="36">&nbsp;</td>
				<td>Jumlah Barang</td>
				<td><input type="text" name="jumlah" size="7"></td>
			</tr>
			<tr>
				<td height="36">&nbsp;</td>
				<td>Satuan</td>
				<td><input type="text" name="satuan" size="7"></td>
			</tr>
			<td height="36">&nbsp;</td>
				<td>status</td>
			<td><label for="status"></label>
			<select name="status" id="status">
          <option value="Not Approval">Belum Disetujui</option>
      </select></td>
    </tr>
			<tr>
				<td height="72">&nbsp;</td>
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Simpan">&nbsp;&nbsp;&nbsp;
					<input type="reset" name="reset" value="Hapus"></td>
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
