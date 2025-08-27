<html>
<head>
<br /><p align="center"><b>Jadwal Kedatangan Barang</b></p><br>
</head>
<body>
	<form name="form1" method="post" action="">
    <table width="484" border="0">
      <tr>
        <td width="283">&nbsp;</td>
        <td width="148"><label for="tcari"></label>
        <input type="text" name="tcari" id="tcari"></td>
        <td width="39"><input type="submit" name="button" id="button" value="Cari"></td>
      </tr>
    </table>
    <table width="900" height="51" border="2">
 		 <tr bgcolor="#FFA600">
        	<td width="103"><center>Code</center></td>
            <td width="300"><center>Nama Perusahaan</center></td>
            <td width="171"><center>Bulan</center></td>
			 <td width="171"><center>Nama Barang</center></td>
			  <td width="171"><center>Jumlah Barang</center></td>
      </tr>
        <?php
		/* Koneksi Ke Database*/
		mysql_connect("localhost","root");
		mysql_select_db("gudang");
		/*----------------------------------*/
		/* Script untuk pencarian */
		if(isset($_POST['button'])){
		$sql=mysql_query("select * from jadwal_customer where bulan  Like '%".$_POST['tcari']."'");
		}else{
		$sql=mysql_query("select * from jadwal_customer");
		}
		/*---------------------------------*/
		while($data=mysql_fetch_array($sql)){
		?>
        <tr>
        	<td><center><?php echo $data['code']; ?></center></td>
            <td><center><?php echo $data['nama_perusahaan']; ?></center></td>
			<td><center><?php echo $data['bulan']; ?></center></td>
			<td><center><?php echo $data['nama']; ?></center></td>
			<td><center><?php echo $data['jumlah_barang']; ?></center></td>
 		</tr>
        <?php 
		}
		?>
    </table>
</form>
</body>
</html>
