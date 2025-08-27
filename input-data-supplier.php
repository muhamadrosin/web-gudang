<html>
<body bgcolor="#EEF2F7">
<?php
	//Kirimkan Variabel
	$namasupplier	= $_POST['namasupplier'];
	$codesupplier	= $_POST['codesupplier'];

	//buka koneksi ke engine MySQL
	$Open = mysql_connect("localhost","root","password");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
		else{
		print ("Engine Connected<br>");
		}
	//koneksi ke database
	$Koneksi = mysql_select_db("gudang");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}
		else{
		print ("Database Connected<br><br>");
		}
	//cek nama suplier di database
	$cek=mysql_num_rows (mysql_query("SELECT namasupplier FROM supplier WHERE namasupplier='$_POST[namasupplier]'"));
	if ($cek > 0) {
	?>
			<script language="JavaScript">
			alert('Nama Supplier sudah dipakai !, silahkan diulang kembali');
			document.location='home.php?page=form-input-data-supplier';
			</script>
	<?php
	}
	//Masukan data ke Table supplier
	$input	="INSERT INTO supplier (namasupplier, codesupplier)
			VALUES ('$namasupplier','$codesupplier')";
	$query_input =mysql_query($input);
		if ($query_input) {
		//Jika Sukses
	?>
		<script language="JavaScript">
		alert('Data Supplier Berhasil diinput');
		document.location='home.php?page=form-input-data-supplier';
		</script>
	<?php
	}
	else {
	//Jika Gagal
	echo "Data Supplier Gagal diinput, Silahkan diulangi!";
	}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
</body>
</html>
