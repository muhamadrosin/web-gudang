<?php
include "koneksi.php";
if (isset($_GET['user'])) {
	$user = $_GET['user'];
} else {
	die ("Error. No Code Selected! ");
}
//Tampilkan data dari tabel sparepart
	$query	= "SELECT * FROM login WHERE user='$user'";
	$sql	= mysql_query ($query);
	$hasil	= mysql_fetch_array ($sql);
		$user	= $hasil['user'];
		$password	= $hasil['password'];
		$level	= $hasil['level'];

		//proses edit data
		if (isset($_POST['Edit'])) {
			$user	= $_POST['user'];
			$password	= $_POST['password'];
			$level		= $_POST['level'];
   //update
			$query = "UPDATE login SET user='$user', password='$password', level='$level' WHERE user='$user'";
			$sql = mysql_query ($query);
				//setelah berhasil update
				if ($sql) {
					echo "<h4><font color=#8BB2D9><center>Data User Berhasil diedit</center></font></h4><br />";
				} else {
					echo "<h4><font color=red><center>Data User gagal diedit</center></font></h4>";
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
			<td><b>Form Edit User</b></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">User</td>
			<td>:&nbsp;<?=$user?><input type="hidden" name="user" value="<?=$user?>"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="36">Password</td>
			<td><input type="text" name="password" size="40" value="<?=$password?>"></td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td height="36">Level</td>
			<td><select name="level">
				<option value="-" <? echo ($level=='-')?"selected":""; ?>>-pilihan-
				<option value="admin" <? echo ($level=='admin')?"selected":""; ?>>Administrator
				<option value="penjualan" <? echo ($level=='penjualan')?"selected":""; ?>>Penjualan
				<option value="pemilik" <? echo ($level=='pemilik')?"selected":""; ?>>Pemilik
				</select>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="20">&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="Edit" value="Edit Data">&nbsp;&nbsp;
				<input type="button" value="Cancel" onclick=location.href="home3.php?page=lihat-user" title="kembali"></td>
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
