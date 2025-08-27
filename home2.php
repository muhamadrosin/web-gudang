<?php
session_start();
if(!isset($_SESSION['login'])) {
	include("index.php");
}
else {
?>
<html>
<head>
	<title>Aplikasi Stock Barang TKC</title>
	<link rel="stylesheet" href="style.css" media="screen">
</head>
<body>
	<div id="layout">
		<header class="header">
			<img src="images/header.png" width="100%" height="140">
		</header>
		<div class="nav">
			<ul>
				<li class="nav-sub"><a href="home2.php">Home</a></li>
				<li class="nav-sub"><a href="">Menu</a>
				<ul>
				<li class="nav-sub"><a href="home2.php?page=form-input-data-permintaan">input permintaan barang</a></li>
				<li class="nav-sub"><a href="home2.php?page=lihat-permintaan">lihat Permintaan Barang</a></li>
				<li class="nav-sub"><a href="home2.php?page=lihat-stock2">Lihat Stock Barang ATK Mayora</a></li>
				</ul>
				<li class="nav-sub"><a href="">Menu TKC Serah Terima</a>
				<ul>
				<li class="nav-sub"><a href="home2.php?page=form_serah_terima_barang">Form serah terima Barang</a></li>
				<li class="nav-sub"><a href="home2.php?page=form-input-barang-tkc">Input Barang Tkc</a></li>
				<li class="nav-sub"><a href="home2.php?page=lihat-stock-tkc">Lihat Stock Barang Tkc</a></li>
				<li class="nav-sub"><a href="home2.php?page=lihat-serahterima">Lihat serah terima Barang</a></li>
				<li class="nav-sub"><a href="home2.php?page=form-barang-kirim">Input Kirim Barang</a></li>
				<li class="nav-sub"><a href="home2.php?page=lihat-kirim">Lihat Kirim Barang</a></li>
				</ul>
				<li class="nav-sub"><a href="logout.php">Log out</a></li>
			</ul>
		</div>
		<div class="sheet">
			<div class="content">
				<table border ="0" width= "100%">
				<?php
					$page = (isset($_GET['page']))? $_GET['page'] : "main";
					switch ($page) {

						case 'lihat-stock2': include "lihat-stock2.php"; break;
						case 'lihat-kirim': include "lihat-kirim.php"; break;
						case 'lihat-serahterima': include "lihat-serahterima.php"; break;
						case 'lihat-stock-tkc': include "lihat-stock-tkc.php"; break;
						case 'lihat-permintaan': include "lihat-permintaan.php"; break;
						case 'form-edit-permintaan': include "form-edit-permintaan.php"; break;
						case 'form-input-data-permintaan': include "form-input-data-permintaan.php"; break;
						case 'input-data-permintaan': include "input-data-permintaan.php"; break;
						case 'input-data-barang-tkc': include "input-data-barang-tkc.php"; break;
						case 'input-kirim-barang': include "input-kirim-barang.php"; break;
						case 'delete-permintaan': include "delete-permintaan.php"; break;
						case 'form_serah_terima_barang': include "form_serah_terima_barang.php"; break;
						case 'form-input-barang-tkc': include "form-input-barang-tkc.php"; break;
						case 'form-barang-kirim': include "form-barang-kirim.php"; break;
						case 'delete-permintaan': include "delete-permintaan.php"; break;

						case 'main' :
						default : include 'default.php';
					}
				?>
				</table>
			</div><br /><br />
		</div>
	</div>
	<footer class="footer">
			<p>Copyright muhamad rosin 2020</p>
	</footer>
</body>
</html>
<?php
}
?>
