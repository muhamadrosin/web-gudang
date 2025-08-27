<html>
<head>
<title>Login</title>
<style type="text/css">
table {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
}
input {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	height: 20px;
}
</style>
</head>
<body bgcolor="#cccccc"><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<div align="center">
<form name="form-login" method="POST" action="login.php?op=in">
<table width="310" border="0" cellpadding="0" cellspacing="0">
	<tr bgcolor="blue">
		<td height="25" colspan="2" align="center"><font color="#FFFFFF">Login</font></td>
	</tr>
	<tr>
		<td width="106" height="16">&nbsp;</td>
		<td width="180">&nbsp;</td>
	</tr>
	<tr>
		<td height="18" align="right">Username :&nbsp;</td>
		<td><input type="text" name="user" size="20" maxlength="9"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td height="18" align="right" >Password :&nbsp;</td>
		<td><input type="password" name="password" size="20"></td>
	</tr>
 <tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
  <tr>
      <td height="18" align="right" >Hak akses :&nbsp;</td>

				<td><select name="level">
						<option value="admin">Administrator
						<option value="penjualan">Bagian Penjualan
						<option value="pemilik">Pemilik
					</select>
				</td>

      </tr>
	<tr>
		<td height="16">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td height="18" align="top">&nbsp;</td>
		<td align="left"><input type="submit" value=" Login "></td>
	</tr>
	<tr>
		<td height="16">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr bgcolor="blue">
		<td height="25" colspan="2" align="top">&nbsp;</td>
	</tr>
</table>
</form>
</div>
</body>
</html>
