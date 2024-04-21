<?php
//include verifikasi.php pada file Administrasi
include("../koneksi.php");
session_start();
?>
<?php
require "../koneksi.php";
$id_barang = $_GET['id_barang'];
$query = mysqli_query($conn,"select * from barang where id_barang='$id_barang'");
while($data = mysqli_fetch_array($query)){
?>

<html>
<head>  
<title>Form Edit Transaksi</title>  
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
<div align="center">  
<form id="form1" name="form1" method="get" action="editsimpan_barang.php">  
<p>&nbsp;</p>  
<table width="400" height="201" border="1">  
<tr>  
	<td colspan="2" bgcolor="#cd5c5c">  
	<div align="center">  
	<strong>Form Edit Transaksi</strong>  
	</div>  
</td>  
</tr>
<tr>  
	<td width="124" bgcolor="#ffc0cb"><strong>Id</strong></td>  
	<td width="243" bgcolor="#ffc0cb">&nbsp;  
	<input name="id_barang" type="text" color="black" value="<?php echo $data['id_barang']; ?>"/></td>  
</tr> 

<tr>  
	<td width="124" bgcolor="#ffc0cb"><strong>Nama Barang</strong></td>  
	<td width="243" bgcolor="#ffc0cb">&nbsp;  
	<input name="nama_barang" type="text" value="<?php echo $data['nama_barang']; ?>"/></td>  
</tr>  
<tr>  
	<td bgcolor="#ffc0cb">Harga</td>  
	<td bgcolor="#ffc0cb">&nbsp;  
	<input name="harga_barang" type="text" value="<?php echo $data['harga_barang']; ?>"/></td>  
</tr>  

<tr>  
<td height="28" bgcolor="#ffc0cb">&nbsp;</td>  
<td bgcolor="#ffc0cb">  
<input name="" type="submit" value="Update" />&nbsp;  
<input name="" type="reset" value="Hapus" /></td>  
</tr>  
</table>  
</form>
	<?php } ?>  
</div>
<div align="center">
<a href="view_barang.php" >Cek Transaksi</a>
</div>

</body>  
</html>  



