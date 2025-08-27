<html>
<head>
	<link rel="stylesheet" href="style.css" media="screen">
</head>
<div class="content">
	<form action="input-data-user.php" method="POST" enctype="multipart/form-data">
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td width="5%">&nbsp;</td>
				<td width="25%">&nbsp;</td>
				<td width="70%">&nbsp;</td>
			</tr>
			<tr>
				<td height="36">&nbsp;</td>
				<td>&nbsp;</td>
				<td><b><font size="4">TAMBAH USER</font></b></td>
			</tr>
			<tr>
				<td width="5%" height="36">&nbsp;</td>
				<td width="25%">&nbsp;</td>
				<td width="70%">&nbsp;</td>
			</tr>
			<tr>
				<td height="36">&nbsp;</td>
				<td>Username</td>
				<td><input type="text" name="user" size="20"></td>
			</tr>
			<tr>
				<td height="36">&nbsp;</td>
				<td>Password</td>
				<td><input type="text" name="password" size="20"></td>
			</tr>
            <tr>
				<td height="36">&nbsp;</td>
				<td>Level</td>
				 <td><select name="level">
						<option value="-">-Pilih-
						<option value="admin">Admin
						<option value="penjualan">TKC
						<option value="pemilik">SH/DH IRGA
					</select>
				</td>
			</tr>
			<tr>
				<td height="72">&nbsp;</td>
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;
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
