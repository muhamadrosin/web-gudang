<?php
session_start();
if(!isset($_SESSION['login'])) {
	include("index.php");
}
else {
?>
<html>
<head>
	<title>Aplikasi Stok Barang TKC Pabrik Jatake 2</title>
	<link rel="stylesheet" href="style.css" media="screen">
</head>
<body>	
	<div id="layout">
		<header class="header">
			<img src="images/header.png" width="100%" height="140">
		</header>
		<div class="nav">
			<ul>
				<li class="nav-sub"><a href="home.php">Home</a></li>
				<li class="nav-sub"><a href="">Menu</a>
				<ul>

				<li><a href="home.php?page=form-input-data-sparepart">Input Barang</a></li>

				<li class="nav-sub"><a href="home.php?page=lihat-stock2">Lihat Stock</a></li>
				<li class="nav-sub"><a href="home.php?page=form-create-sj">Input Barang Masuk</a></li>
				<li class="nav-sub"><a href="home.php?page=form-create-pr">Input Barang Keluar</a></li>
				<li class="nav-sub"><a href="home.php?page=form-input-data-customer">input Jadwal Vendor</a></li>
				<li class="nav-sub"><a href="home.php?page=lihat-customer">Lihat Jadwal Vendor</a></li>
				<li class="nav-sub"><a href="home.php?page=lihat-permintaan">Lihat Permintaan Barang</a></li>
				</ul>
				<li class="nav-sub"><a href="">Laporan</a>
					<ul>
						<li><a href="home.php?page=lihat-masuk">Laporan Barang Masuk</a></li>
						<li><a href="home.php?page=lihat-keluar">Laporan Barang Keluar</a></li>
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
						case 'form-input-data-sparepart': include "form-input-data-sparepart.php"; break;
						case 'form-input-data-customer': include "form-input-data-customer.php"; break;
						case 'alarm': include "alarm.php"; break;
						case 'form-create-pr': include "form-create-pr.php"; break;
						case 'form-create-sj': include "form-create-sj.php"; break;
						case 'lihat-stock2': include "lihat-stock2.php"; break;
						case 'lihat-customer': include "lihat-customer.php"; break;
						case 'tampil': include "tampil.php"; break;
						case 'form-edit': include "form-edit.php"; break;
						case 'form-edit-customer': include "form-edit-customer.php"; break;
						case 'form-create-pr-no-stock': include "form-create-pr-no-stock.php"; break;
						case 'delete-sparepart': include "delete-sparepart.php"; break;
						case 'delete-customer': include "delete-customer.php"; break;
						case 'lihat-sj': include "lihat-sj.php"; break;
						case 'lihat-permintaan': include "lihat-permintaan.php"; break;
						case 'laporan-sj-rir': include "laporan-sj-rir.php"; break;
						case 'lihat-pr': include "lihat-pr.php"; break;
						case 'laporan-pr': include "laporan-pr.php"; break;
						case 'lihat-barang-masuk': include "lihat-barang-masuk.php"; break;
						case 'lihat-barang-keluar': include "lihat-barang-keluar.php"; break;
						case 'form-edit-permintaan': include "form-edit-permintaan.php"; break;
						case 'delete-permintaan': include "delete-permintaan.php"; break;
						case 'delete-keluar': include "delete-keluar.php"; break;
						case 'lihat-keluar': include "lihat-keluar.php"; break;
						case 'delete-masuk': include "delete-masuk.php"; break;
						case 'lihat-masuk': include "lihat-masuk.php"; break;




						case 'main' :
						default : include 'default.php';
					}
				?>
				</table>
			</div><br /><br />
		</div>	
	</div>
	<footer class="footer">
			<p>Copyright  Muhamad Rosin </p>
	</footer>
</body>
</html>
<?php
}
?>
