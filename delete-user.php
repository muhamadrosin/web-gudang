<?php
//koneksi ke engine mysql
include "koneksi.php";
	// Cek code
	if (isset($_GET['user'])) {
		$user = $_GET['user'];
	// membaca nama file yang akan dihapus
	$query   = "SELECT * FROM login WHERE user='$user'";
	$hasil   = mysql_query($query);
	$data    = mysql_fetch_array($hasil);
	}
	else {
		die ("Error. Tidak ada User yang dipilih Silakan cek kembali! ");
	}
	//proses delete data
		if (!empty($user) && $user != "") {
			$hapus = "DELETE FROM Login WHERE user='$user'";
			$sql = mysql_query ($hapus);
			if ($sql) {
				?>
					<script language="JavaScript">
					alert('Data Berhasil dihapus');
					document.location='home3.php';
					</script>
				<?
			} else {
				echo "<h2><font color=red><center>Data gagal dihapus</center></font></h2>";
			}
		}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
