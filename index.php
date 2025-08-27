<html>
<head>
<style type="text/css">
div#content-inner-login {
	float:center;
	padding:0px 0 15px 0;
	margin:70px 50px 0 50px;      
	background-color:#FFF;
}

</style>
</head>
<body>
<center><div id="content-inner-login">
	<form action="login.php" method="POST">
    <hr style="border: none; background-color: #dedede; color: #dedede; height: 0px;">
							<p style="text-align:center; font-weight:bold;"><marquee><span style=color:#0665ff><h2 style='margin:0px 0px 5px 0px; padding:5px'>Selamat Datang di Aplikasi Stock Barang TKC Pabrik Jatake 2</p></span></h2></marquee>
                            
		<table align="center" width="759" height="238" cellpadding="0" cellspacing="5" bgcolor="#B0C4DE">
			<tr height="36" bgcolor="#F8F8FF">
				<th colspan="5">Masukan Kode Login Anda:</th>
			</tr>
			<tr>
				<td>
					<table>
						<tr><br />
							<td><img src="image/admin.jpg" width="100" height="100" /></td>
							<td style="vertical-align: top">
							Username : <input type="text" name="user" size="17"/><br />
							Password &nbsp;: <input type="password" name="password" size="17"/><br />
       Hak akses :

				<select name="level">
						<option value="admin">Administrator
						<option value="tkc">Bagian TKC
						<option value="sh/dh">SH/DH IRGA
                        
					</select>


                                   <br /><br />

							<input style="float:right" type="submit" value="LOGIN" /><br /></td>
						</tr>
						<tr height="10">
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</form>
</div>
</center>
</body>
</html>
