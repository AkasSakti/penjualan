<?php
//include verifikasi.php pada file Administrasi
include("../koneksi.php");
session_start();
?>
<html>
<head>  
<title>Form Barang</title>  
</head>
<link rel="stylesheet" href="../style.css" /> 
<body>  
<div>
	<tr>Welcome <b><?php echo $_SESSION['username']; ?>!</b></tr>
	<tr><div align="right"><a href="../logout.php">Logout</a></div></tr>
</div>
<div id="nav">
	<a href="../index.php">Form Transaksi</a>
	<a href="../barang/input_barang.php">Form Barang</a>
</div>
<p>
<div align="center"> 
<form method="post" action="Proses_barang.php" >  
<table width="400">  
<tr>  
	<th colspan="2">  
	Form Barang  
	</th>  
</tr>
<tr>  
	<td bgcolor="#ffc0cb"><strong>Nama Barang</strong></td>  
	<td bgcolor="#ffc0cb">&nbsp;  
	<input name="nama_barang" type="text" size="20"/></td>  
</tr>  
<tr>  
	<td bgcolor="#ffc0cb"><strong>Harga Barang</strong></td>  
	<td bgcolor="#ffc0cb">&nbsp;  
	<input name="harga_barang" type="text" size="10"/></td>  
</tr>
<tr>  
	<td height="28" bgcolor="#ffc0cb">&nbsp;</td>  
	<td bgcolor="#ffc0cb">  
	<input name="" type="submit" value="Proses" />&nbsp;
	<input name="" type="reset" value="Hapus" /></td>  
</tr>  
</table>  
</form>
<a href="view_barang.php" >View Tabel Barang</a>
</div> 
</body>  
</html>