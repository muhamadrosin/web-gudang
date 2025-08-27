<html>
<body bgcolor="#EEF2F7">
<?php
	//buka koneksi ke engine MySQL
 include "koneksi.php";
	//Kirimkan Variabel
	$tanggal	= $_POST['tanggal'];
	$code	= $_POST['code'];
	$nama	= $_POST['nama'];
	$jumlah	= $_POST['jumlah'];
	$satuan	= $_POST['satuan'];
	
	//Masukan data ke Table PR
	$input	="INSERT INTO barang_kirim (tanggal, code, nama, jumlah, satuan) VALUES ('$tanggal','$code','$nama','$jumlah','$satuan')";
	$query_input =mysql_query($input);
	//Update SOH di tabel sparepart
	$update="UPDATE barang_tkc SET total_barang_kontrak=total_barang_kontrak-$jumlah where code='$code'";
	$query_update =mysql_query($update);
		if ($query_update) {
		//Jika Sukses
	?>
		<script language="JavaScript">
		alert('Input Barang Keluar Berhasil');
		document.location='home2.php?page=form-barang-kirim';
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
