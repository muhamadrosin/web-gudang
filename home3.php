<?php
session_start();
if(!isset($_SESSION['login'])) {
	include("index.php");
}
else {
?>
<html>
<head>
	<title>Aplikasi Inventory</title>
	<link rel="stylesheet" href="style.css" media="screen">
</head>
<body>
	<div id="layout">
		<header class="header">
			<img src="images/header.png" width="100%" height="140">
		</header>
		<div class="nav">
			<ul>
				<li class="nav-sub"><a href="home3.php">Home</a></li>
                                <li><a href="home3.php?page=form-input-data-user">Input User</a></li>
                                 <li><a href="home3.php?page=lihat-user">Lihat User</a></li>
								 <li><a href="home3.php?page=lihat-permintaan2">Lihat permintaan</a></li>
								 <li><a href="home3.php?page=lihat-serahterima2">Lihat Serah Terima Barang</a></li>

				<li class="nav-sub"><a href="#">Laporan</a>
					<ul>
						<li><a href="home3.php?page=lihat-stock">Laporan Stok Gudang Atk</a></li>
						<li><a href="home3.php?page=lihat-stock-tkc2">Laporan Sisa Barang/KOntrak</a></li>
						<li><a href="home3.php?page=lihat-barang-masuk2">Laporan Barang Masuk</a></li>
						<li><a href="home3.php?page=lihat-barang-keluar2">Laporan Barang Keluar</a></li>
						<li><a href="home3.php?page=lihat-kirim2">Laporan Barang Kirim TKC</a></li>
					</ul>
				</li>
				<li class="nav-sub"><a href="logout.php">Log out</a></li>
			</ul>
		</div>
		<div class="sheet">
			<div class="content">
				<table border ="0" width= "100%">
				<?php
					$page = (isset($_GET['page']))? $_GET['page'] : "main";
					switch ($page) {
                                                case 'form-input-data-user': include "form-input-data-user.php"; break;
                                                case 'form-edit-user': include "form-edit-user.php"; break;
                                                 case 'delete-user': include "delete-user.php"; break;
												  case 'delete-keluar': include "delete-keluar.php"; break;
												   case 'delete-masuk': include "delete-masuk.php"; break;
												      case 'delete-kirim': include "delete-kirim.php"; break;
												 case 'delete-barang-tkc': include "delete-barang-tkc.php"; break;
												 case 'delete-serahterima': include "delete-serahterima.php"; break;
                                                 case 'lihat-user': include "lihat-user.php"; break;
												  case 'lihat-kirim2': include "lihat-kirim2.php"; break;
                                                 case 'lihat-stock': include "lihat-stock.php"; break;
												 case 'lihat-stock-tkc2': include "lihat-stock-tkc2.php"; break;
												 case 'lihat-serahterima2': include "lihat-serahterima2.php"; break;
						case 'lihat-sj': include "lihat-sj.php"; break;
						case 'laporan-sj-rir': include "laporan-sj-rir.php"; break;
						case 'lihat-barang-masuk2': include "lihat-barang-masuk2.php"; break;
						case 'lihat-barang-keluar2': include "lihat-barang-keluar2.php"; break;
						case 'lihat-pr': include "lihat-pr.php"; break;
						case 'lihat-kirim2': include "lihat-kirim2.php"; break;
						case 'laporan-pr': include "laporan-pr.php"; break;
						case 'lihat-permintaan2': include "lihat-permintaan2.php"; break;
						case 'form-edit-permintaan2': include "form-edit-permintaan2.php"; break;
						case 'form-edit-serahterima2': include "form-edit-serahterima2.php"; break;
						case 'form-edit-kirim': include "form-edit-kirim.php"; break;
						case 'main' :
						default : include 'default.php';
					}
				?>
				</table>
			</div><br /><br />
		</div>
	</div>
	<footer class="footer">
			<p>Copyright muhamad rosin 1115070054 2017</p>
	</footer>
</body>
</html>
<?php
}
?>
