<html>
<body bgcolor="#EEF2F7">
<?php
//Kirimkan Variabel
	$code	= $_POST['code'];
	$nama	= $_POST['nama'];
	$onhand	= $_POST['onhand'];
	$satuan	= $_POST['satuan'];

	//buka koneksi ke engine MySQL
 include "koneksi.php";
	//koneksi ke database
	$Koneksi = mysql_select_db("gudang");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}
		else{
		print ("Database Connected<br><br>");
		}
	//cek code sparepart di database
	$cek=mysql_num_rows (mysql_query("SELECT code FROM barang WHERE code='$_POST[code]'"));
	if ($cek > 0) {
	?>
			<script language="JavaScript">
			alert('CODE sudah dipakai !, silahkan diulang kembali');
			document.location='home.php?page=lihat-stock';
			</script>
	<?php
	}
 if(!empty($code)){

	$input	="INSERT INTO barang (code, nama, onhand,satuan)
			VALUES ('$code','$nama','$onhand','$satuan')";
    }
    else {
	?>
			<script language="JavaScript">
			alert('CODE harus diisi !, silahkan diulang kembali');
   document.location='home.php?page=form-input-data-sparepart';

			</script>
	<?php
	}
	$query_input =mysql_query($input);
	
		if ($query_input) {
		//Jika Sukses
	?>
		<script language="JavaScript">
		alert('Data Barang Berhasil diinput');
  document.location='home.php?page=lihat-stock';
		</script>
	<?php
	}
	else {
	//Jika Gagal
	echo "Data Barang Gagal diinput, Silahkan diulangi!";
	}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
</body>
</html>
