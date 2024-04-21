<html>
<head>
	<meta charset="utf-8">
	<title>Selamat Datang</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<?php 
	session_start();
 	// Bagian untuk mengecek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php");
	}
	?>
<div>
	<tr>Selamat Datang <b><?php echo $_SESSION['username']; ?>!</b></tr>
	<tr><div align="right"><a href="logout.php">Logout</a></div></tr>
</div>
<div id="nav">
	<a href="transaksi/index.php">Form Transaksi</a>
	<a href="barang/index.php">Form Barang</a>
</div> 
</body>
</html>

