<html>
	<br /><p align="center"><b>Data User</b></p><br>
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr bgcolor="#FFA600">
		<th width="5%"height="42">No</td>&nbsp;
		<th width="15%">User</td>&nbsp;
		<th width="20%">Password</td>&nbsp;
		<th width="10%">Level</td>&nbsp;
		<th width="30%">Action</td>&nbsp;
	</tr>
	<?php
  include "koneksi.php";
		$Cari="SELECT * FROM login ORDER BY user";
		$Tampil = mysql_query($Cari);
		$nomer=0;
		while (	$hasil = mysql_fetch_array ($Tampil)) {
				$user = stripslashes ($hasil['user']);
				$password = stripslashes ($hasil['password']);
				$level = stripslashes ($hasil['level']);

			{
		$nomer++;
	?>
		<tr align="center" bgcolor="#DFE6EF">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			
		</tr>
		<tr align="center">
			<td><?=$nomer?><div align="center"></div></td>
			<td><?=$user?><div align="center"></div></td>
			<td><?=$password?><div align="center"></div></td>
			<td><?=$level?><div align="center"></div></td>
<td bgcolor="#EEF2F7"><div align="center"><a href="home3.php?page=form-edit-user&user=<?=$user?>">Edit</a> | <a href="home3.php?page=delete-user&user=<?=$user?>" OnClick="return confirm('Yakin Data <?=$code?> akan dihapus?');">Delete</a></div></td>
  </tr>
		<tr align="center" bgcolor="#DFE6EF">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			
		</tr>
	<?php
			}
		}
	//Tutup koneksi engine MySQL
		mysql_close($Open);
	?>
</table>
</html>
