<html>
<body bgcolor="#EEF2F7">
<?php
//Kirimkan Variabel
	$code	= $_POST['code'];
	$nama	= $_POST['nama'];
	$total	= $_POST['total'];
	$total_barang_kontrak	= $_POST['total_barang_kontrak'];
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
	$cek=mysql_num_rows (mysql_query("SELECT code FROM barang_tkc WHERE code='$_POST[code]'"));
	if ($cek > 0) {
	?>
			<script language="JavaScript">
			alert('CODE sudah dipakai !, silahkan diulang kembali');
			document.location='home2.php?page=lihat-stock-tkc';
			</script>
	<?php
	}
 if(!empty($code)){

	$input	="INSERT INTO barang_tkc (code, nama, total,total_barang_kontrak,satuan)
			VALUES ('$code','$nama','$total','$total_barang_kontrak','$satuan')";
    }
    else {
	?>
			<script language="JavaScript">
			alert('CODE harus diisi !, silahkan diulang kembali');
   document.location='home2.php?page=form-input-barang-tkc';

			</script>
	<?php
	}
	$query_input =mysql_query($input);
	
		if ($query_input) {
		//Jika Sukses
	?>
		<script language="JavaScript">
		alert('Data Barang Berhasil diinput');
  document.location='home2.php?page=lihat-stock-tkc';
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
4mu'guj4j45hgyf'y;/j/y/