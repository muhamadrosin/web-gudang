<html>
<body bgcolor="#EEF2F7">
<?php
	//buka koneksi ke engine MySQL
 include "koneksi.php";
	//Kirimkan Variabel
	$tgl_pr	= $_POST['tgl_pr'];
	$code	= $_POST['code'];
	$nama	= $_POST['nama'];
	$jumlah	= $_POST['jumlah'];
	$satuan	= $_POST['satuan'];
	
	//Masukan data ke Table PR
	$input	="INSERT INTO barang_keluar (tgl_pr, code, nama, jumlah, satuan) VALUES ('$tgl_pr','$code','$nama','$jumlah','$satuan')";
	$query_input =mysql_query($input);
	//Update SOH di tabel sparepart
	$update="UPDATE barang SET onhand=onhand-$jumlah where code='$code'";
	$query_update =mysql_query($update);
		if ($query_update) {
		//Jika Sukses
	?>
		<script language="JavaScript">
		alert('Input Barang Keluar Berhasil');
		document.location='home.php?page=form-create-pr';
		</script>
	<?php
	}
	else {
	//Jika Gagal
	echo "Input Barang Keluar Gagal, Silahkan diulangi!";
	}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
</body>
</html>
