<?php
//include verifikasi.php pada file Administrasi
include("../koneksi.php");
session_start();
?>
<html>
<head>
	<title>Form Transaksi</title>
	<link rel="stylesheet" href="../style.css" />
</head>
<body>
<div>
	<tr>Welcome <b><?php echo $_SESSION['username']; ?>!</b></tr>
	<tr><div align="right"><a href="../logout.php">Logout</a></div></tr>
</div>
<div id="nav">
	<a href="transaksi/input.php">Form Transaksi</a>
	<a href="barang/input_barang.php">Form Barang</a>
</div>   
<?php   
require "../koneksi.php";

$nama_barang = $_POST['nama_barang'];  
$harga = $_POST['harga'];  
$jumlah = $_POST['jumlah'];  
$status = $_POST['status'];  
$kota = $_POST['kota'];

$subtotal = $harga * $jumlah ;  
  
switch ($status){  
 case "Pelanggan":   
  $diskon = $subtotal * 0.1;  
 break;   
 default:   
  $diskon = 0;   
 }  
 
if($kota == "Jakarta" ){  
 $ongkos = 20000;  
 }  
else if($kota == "Bandung" ){  
 $ongkos = 10000;  
 }  
else if($kota == "Purwokerto" ){  
 $ongkos = 30000;  
 }  

$total = $subtotal - $diskon + $ongkos; 

$sql = "INSERT INTO transaksi (nama_barang, harga, jumlah, subtotal, Status, kota, diskon, ongkos, total)values
('$nama_barang', '$harga', '$jumlah', '$subtotal', '$status', '$kota', '$diskon', '$ongkos', '$total')";

if (mysqli_query($conn, $sql)) {
    echo "Data Berhasil Disimpan";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
  
<div align="center">
<table width="400" border="1">
<tr>
<td colspan="2" bgcolor="#666666">  
<div align="center">  
<strong>HASIL PERHITUNGAN</strong>  
</div>  
</td>  
</tr>  
<tr>  
<td width="116" bgcolor="#ffc0cb">Nama Barang</td>  
<td width="165" bgcolor="#ffc0cb">&nbsp;  
<?php echo "$nama_barang"; ?></td>  
</tr>  
<tr>  
<td bgcolor="#ffc0cb">Harga</td>  
<td bgcolor="#ffc0cb">&nbsp;  
<?php echo "Rp. ".number_format($harga); ?></td>  
</tr>  
<tr>  
<td bgcolor="#ffc0cb">Quantity</td>  
<td bgcolor="#ffc0cb">&nbsp;  
<?php echo "$jumlah"; ?></td>  
</tr>  
<tr>  
<td bgcolor="#ffc0cb">Subtotal</td>  
<td bgcolor="#ffc0cb">&nbsp;  
<?php echo "Rp. ".number_format($subtotal); ?></td>  
</tr>  
<tr>  
<td bgcolor="#ffc0cb">Status</td>  
<td bgcolor="#ffc0cb">&nbsp;  
<?php echo "$status"; ?></td>  
</tr>  
<tr>  
<td bgcolor="#ffc0cb">Diskon</td>  
<td bgcolor="#ffc0cb">&nbsp;  
<?php echo "Rp. ".number_format($diskon); ?></td>  
</tr>  
<tr>  
<td bgcolor="#ffc0cb">Ongkos Kirim</td>  
<td bgcolor="#ffc0cb">&nbsp;  
<?php echo "Rp. ".number_format($ongkos)?>   
<?php echo " ( $kota )";?></td>  
</tr>  
<tr>  
<td bgcolor="#666666" class="putih">  
<strong>Total</strong></td>  
<td bgcolor="#666666">&nbsp;  
<?php echo "Rp. ".number_format($total); ?></td>  
</tr>  
</table>  
<a href="index.php"> &lt;&lt; Back</a>  
</div>  
</body>  
</html>  