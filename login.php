<?php
ob_start();
session_start();
$user = $_POST['user'];
$password = $_POST['password'];
$level = $_POST['level'];
$_SESSION['user'] = $user;
$_SESSION['level'] = $level;
include "koneksi.php";
$sql = "SELECT * FROM login where user='$user'";
$qry = mysql_query($sql);
$num = mysql_num_rows($qry);
$row = mysql_fetch_array($qry);

if ($num==0 OR $password!=$row['password'] OR $level!=$row['level']) {
	?>
		<script language="JavaScript">
					alert('Username atau Password tidak sesuai !');
					document.location='index.php';
					</script>
				<?php
}
else {
$_SESSION['login']=1;
  if($row['level']=="admin"){
            header("location:home.php");
        }
        else if($row['level']=="tkc"){
            header("location:home2.php");
        }
        else if($row['level']=="sh/dh"){
            header("location:home3.php");
        }
}

//Tutup koneksi engine MySQL
	mysql_close($Open);
?>