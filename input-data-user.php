<html>
<body bgcolor="#EEF2F7">
<?php
//Kirimkan Variabel
	$user		= $_POST['user'];
	$password	= $_POST['password'];
	$level	 	= $_POST['level'];	

	//buka koneksi ke engine MySQL
 include "koneksi.php";
	//cek user login di database
	$cek=mysql_num_rows (mysql_query("SELECT user FROM login WHERE user='$_POST[user]'"));
	if ($cek > 0) {
	?>
			<script language="JavaScript">
			alert('Username Sudah di Pakai !, Silahkan Ganti yang Lain');
			document.location='home3.php?page=form-input-data-user';
			</script>
	<?php
	}
	//Masukan data ke Table login
	$input	="INSERT INTO login (user, password, level)
			VALUES ('$user','$password','$level')";
	$query_input =mysql_query($input);
		if ($query_input) {
			
			
		//Jika Sukses
	?>
		<script language="JavaScript">
		alert('Data User Berhasil di Tambah');
		document.location='home3.php?page=form-input-data-user';
		</script>
	<?php
	}
	else {
	//Jika Gagal
	echo "Data User Gagal di Tambah, Silahkan di Ulangi!";
	}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
</body>
</html>
