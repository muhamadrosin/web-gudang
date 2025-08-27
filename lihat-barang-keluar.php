
<?php
 include "koneksi.php";
	//untuk menantukan tanggal awal dan tanggal akhir data di database
	$min_tanggal=mysql_fetch_array(mysql_query("select min(tgl_pr) as min_tanggal from barang_keluar"));
	$max_tanggal=mysql_fetch_array(mysql_query("select max(tgl_pr) as max_tanggal from barang_keluar"));
?>
<form action="home.php?page=lihat-barang-keluar" method="post" name="postform">
<p align="center"><font color="orange" size="3"><b>Laporan Barang Keluar</b></font></p><br />
	<table border="0">
		<tr>
			<td width="125"><b>Dari Tanggal</b></td>
			<td colspan="2" width="190">: <input type="text" name="tanggal_awal" size="16" />
			<a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_awal);return false;" ><img src="calender/calbtn.gif" alt="" name="popcal" width="34" height="29" border="0" align="absmiddle" id="popcal" /></a>
			</td>
			<td width="125"><b>Sampai Tanggal</b></td>
			<td colspan="2" width="190">: <input type="text" name="tanggal_akhir" size="16" />
			<a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_akhir);return false;" ><img src="calender/calbtn.gif" alt="" name="popcal" width="34" height="29" border="0" align="absmiddle" id="popcal" /></a>
			</td>
			<td colspan="2" width="190"><input type="submit" value="Tampilkan Data Pencarian" name="cari"/></td>
			<td colspan="2" width="70"><input type="reset" value="Reset" /></td>
		</tr>
	</table>
</form><br />
<p>
<?php
	//proses jika sudah klik tombol pencarian
	if(isset($_POST['cari'])){
	//menangkap nilai form
	$tanggal_awal=$_POST['tanggal_awal'];
	$tanggal_akhir=$_POST['tanggal_akhir'];
	if(empty($tanggal_awal) || empty($tanggal_akhir)){
	//jika data kosong
	?>
	<script language="JavaScript">
		alert('Tanggal Awal dan Tanggal Akhir Harap di Isi!');
		document.location='home.php?page=lihat-barang-keluar';
	</script>
	<?php
	}else{
	?><i><b>Informasi : </b> Hasil pencarian data barang keluar dari Tanggal <b><?php echo $_POST['tanggal_awal']?></b> s/d <b><?php echo $_POST['tanggal_akhir']?></b></i>
	<?php
	$query=mysql_query("select * from barang_keluar where tgl_pr between '$tanggal_awal' and '$tanggal_akhir'");
	}
?>
</p>
<table width="1058" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr bgcolor="#FF6600">
		<th width="80" height="40">No</td>&nbsp;
		<th width="216">Tanggal</td>&nbsp;
		<th width="196">Kode Barang</td>&nbsp;
		<th width="266">Nama Barang</td>&nbsp;
		<th width="180">Jumlah </td>&nbsp;
		<th width="180">Satuan</td>&nbsp;
	</tr>
<?php
	$no=0;
	//menampilkan data
	while($row=mysql_fetch_array($query)){
	?>
    <tr>
    	<td align="center" height="30"><?php echo $no=$no+1; ?></td>
		<td align="center"><?php echo $row['tgl_pr'];?></td>
		<td align="center"><?php echo $row['code'];?></td>
		<td align="center"><?php echo $row['nama'];?></td>
		<td align="center"><?php echo $row['jumlah'];?></td>
		<td align="center"><?php echo $row['satuan'];?></td>
    </tr>
    <?php
	}
	?>
    <tr>
    	<td colspan="4" align="center">
		<?php
		//jika data tidak ditemukan
		if(mysql_num_rows($query)==0){
			echo "<font color=red><blink>Pencarian data tidak ditemukan!</blink></font>";
		}
		?>
        </td>
    </tr>
</table>

<?php
	}else{
	unset($_POST['cari']);
}
?>
<iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;"></iframe>
</div>
<script>
window.print();
</script>	
	</body>
</html>