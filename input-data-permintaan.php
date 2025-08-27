<html>
<body bgcolor="#EEF2F7">
<?php
//Kirimkan Variabel
	$tanggal	= $_POST['tanggal'];
	$code	= $_POST['code'];
	$nama	= $_POST['nama'];
	$jumlah	= $_POST['jumlah'];
	$satuan	= $_POST['satuan'];
	$status	= $_POST['status'];
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
	$cek=mysql_num_rows (mysql_query("SELECT code FROM permintaan_barang WHERE code='$_POST[code]'"));
	if ($cek > 0) {
	?>
			<script language="JavaScript">
			alert('CODE sudah dipakai !, silahkan diulang kembali');
			document.location='home2.php?page=lihat-permintaan';
			</script>
	<?php
	}
 if(!empty($code)){

	$input	="INSERT INTO permintaan_barang (tanggal, code, nama, jumlah, satuan,status)
			VALUES ('$tanggal','$code','$nama','$jumlah','$satuan','$status')";
    }
    else {
	?>
			<script language="JavaScript">
			alert('CODE harus diisi !, silahkan diulang kembali');
   document.location='form-input-data-permintaan.php?page=form-input-data-permintaan';

			</script>
	<?php
	}
	$query_input =mysql_query($input);
	
		if ($query_input) {
		//Jika Sukses
	?>
		<script language="JavaScript">
		alert('Data Barang Berhasil diinput');
  document.location='home2.php?page=lihat-permintaan';
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
