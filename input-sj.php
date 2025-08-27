<html>
<body bgcolor="#EEF2F7">
<?php
	//buka koneksi ke engine MySQL
 include "koneksi.php";
	//Kirimkan Variabel
	$tgl_sj	= $_POST['tgl_sj'];
	$code	= $_POST['code'];
	$nama	= $_POST['nama'];
	$jumlah	= $_POST['jumlah'];
	$satuan	= $_POST['satuan'];
	
	//Masukan data ke Table SJ
	$input	="INSERT INTO barang_masuk (tgl_sj, code, nama, jumlah, satuan) VALUES ('$tgl_sj','$code','$nama','$jumlah','$satuan')";
	$query_input =mysql_query($input);
	//Update SOH di tabel sparepart
	$update="UPDATE barang SET onhand=onhand + $jumlah where code='$code'";
	$query_update =mysql_query($update);
		if ($query_update) {
		//Jika Sukses
	?>
		<script language="JavaScript">
		alert('Input Barang Masuk Berhasil');
		document.location='home.php?page=form-create-sj';
		</script>
	<?php
	}
	else {
	//Jika Gagal
	echo "Create Barang Masuk Gagal, Silahkan diulangi!";
	}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
</body>
</html>
