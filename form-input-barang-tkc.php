<html>
<head>
	<link rel="stylesheet" href="style.css" media="screen">
</head>
<div class="content">
	<form action="input-data-barang-tkc.php" method="POST" enctype="multipart/form-data">
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td width="5%">&nbsp;</td>
				<td width="25%">&nbsp;</td>
				<td width="70%">&nbsp;</td>
			</tr>
			<tr>
				<td height="36">&nbsp;</td>
				<td>&nbsp;</td>
				<td><font size="4"><b>INPUT DATA BARANG TKC</b></font></td>
			</tr>
			<tr>
				<td width="5%" height="36">&nbsp;</td>
				<td width="25%">&nbsp;</td>
				<td width="70%">&nbsp;</td>
			</tr>
			<tr>
				<td height="36">&nbsp;</td>
				<td>Code</td>
				<td><input type="text" name="code" size="15" maxlength="7" style="text-transform:uppercase;"></td>
			</tr>
			
			<tr>
				<td height="36">&nbsp;</td>
				<td>Nama Barang</td>
				<td><input type="text" name="nama" size="25"></td>
			</tr>
			<tr>
				<td height="36">&nbsp;</td>
				<td>Total Aktual Barang Kontrak</td>
				<td><input type="text" name="total" size="25"></td>
			</tr>
			<tr>
				<td height="36">&nbsp;</td>
				<td>Total Stock Di TKC Sesuai Kontrak</td>
				<td><input type="text" name="total_barang_kontrak" size="7"></td>
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
