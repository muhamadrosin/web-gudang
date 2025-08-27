<html>
<body bgcolor="#EEF2F7">
<?php
//Kirimkan Variabel
	$code	= $_POST['code'];
	$nama_perusahaan= $_POST['nama_perusahaan'];
	$bulan	= $_POST['bulan'];
	$nama	= $_POST['nama'];
	$jumlah_barang	= $_POST['jumlah_barang'];
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
	$cek=mysql_num_rows (mysql_query("SELECT code FROM jadwal_customer WHERE code='$_POST[code]'"));
	if ($cek > 0) {
	?>
			<script language="JavaScript">
			alert('CODE sudah dipakai !, silahkan diulang kembali');
			document.location='home.php?page=lihat-customer';
			</script>
	<?php
	}
 if(!empty($code)){

	$input	="INSERT INTO jadwal_customer (code, nama_perusahaan, bulan, nama, jumlah_barang, satuan)
			VALUES ('$code','$nama_perusahaan','$bulan','$nama','$jumlah_barang','$satuan')";
    }
    else {
	?>
			<script language="JavaScript">
			alert('CODE harus diisi !, silahkan diulang kembali');
   document.location='home.php?page=form-input-data-customer';

			</script>
	<?php
	}
	$query_input =mysql_query($input);
	
		if ($query_input) {
		//Jika Sukses
	?>
		<script language="JavaScript">
		alert('Data Barang Berhasil diinput');
  document.location='home.php?page=lihat-customer';
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
