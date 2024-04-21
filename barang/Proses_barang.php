<?php
//include verifikasi.php pada file Administrasi
include("../koneksi.php");
session_start();
?>
<html>  
<head>  
<title>report</title>  
</head>
<link rel="stylesheet" href="../style.css">  
<body>
<div>
	<tr>Welcome <b><?php echo $_SESSION['username']; ?>!</b></tr>
	<tr><div align="right"><a href="../logout.php">Logout</a></div></tr>
</div>
<div id="nav">
	<a href="index.php">Form Transaksi</a>
	<a href="../barang/input_barang.php">Form Barang</a>
</div>  
<?php   
require "../koneksi.php";

$nama_barang = $_POST['nama_barang'];  
$harga_barang = $_POST['harga_barang'];  

$sql = "INSERT INTO barang (nama_barang, harga_barang)values
('$nama_barang', '$harga_barang')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
  
<div align="center">
<table width="400" border="1">
<tr>
<td colspan="2" bgcolor="#666666">  
<div align="center">  
<strong>Tabel Barang</strong>  
</div>  
</td>  
</tr>  
<tr>  
	<td width="116" bgcolor="#ffc0cb">Nama Barang</td>  
	<td width="165" bgcolor="#ffc0cb">&nbsp;  
	<?php echo "$nama_barang"; ?></td>  
</tr>  
<tr>  
	<td bgcolor="#ffc0cb">Harga Barang</td>  
	<td bgcolor="#ffc0cb">&nbsp;  
	<?php echo "Rp. ".number_format($harga_barang); ?></td>  
</tr>  
</table>  
<a href="input_barang.php"> &lt;&lt; Back</a>  
</div>  
</body>  
</html>  