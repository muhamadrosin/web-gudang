<?php
//koneksi ke engine mysql
  include "koneksi.php";
	// Cek code
	if (isset($_GET['code'])) {
		$code = $_GET['code'];
	// membaca nama file yang akan dihapus
	$query   = "SELECT * FROM barang_tkc WHERE code='$code'";
	$hasil   = mysql_query($query);
	$data    = mysql_fetch_array($hasil);
	}
	else {
		die ("Error. Tidak ada Code yang dipilih Silakan cek kembali! ");	
	}
	//proses delete data
		if (!empty($code) && $code != "") {
			$hapus = "DELETE FROM barang_tkc WHERE code='$code'";
			$sql = mysql_query ($hapus);
			if ($sql) {		
				?>
					<script language="JavaScript">
					alert('Data Berhasil dihapus');
					document.location='home3.php';
					</script>
				<?php		
			} else {
				echo "<h2><font color=red><center>Data gagal dihapus</center></font></h2>";	
			}
		}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
?>