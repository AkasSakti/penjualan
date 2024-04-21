<?php
//include verifikasi.php pada file Administrasi
include("../koneksi.php");
session_start();
?>
<html>
<head>
	<title>Form Transaksi</title>
	<link rel="stylesheet" href="../style.css"/>
</head>
<body>
<div>
	<tr>Welcome <b><?php echo $_SESSION['username']; ?>!</b></tr>
	<tr><div align="right"><a href="../logout.php">Logout</a></div></tr>
</div>
<div id="nav">
	
	<a href="index.php">Form Transaksi</a>
	<a href="../barang/input_barang.php">Form Barang</a>
</div>
<p>  
<div align="center">  
<form method="post" action="proses.php">  
<table width="400" height="201" border="1">  
<tr>  
	<th colspan="2" bgcolor="#cd5c5c">  
	Form Transaksi Penjualan  
	</th>  
</tr>
 <tr>  
	<td width="124" bgcolor="#ffc0cb"><strong>Nama Barang</strong></td>  
	<td width="243" bgcolor="#ffc0cb">&nbsp;  
	<input name="nama_barang" type="text" /></td>  
</tr>  
<tr>  
	<td bgcolor="#ffc0cb"><strong>Harga</strong></td>  
	<td bgcolor="#ffc0cb">&nbsp;  
	<input name="harga" type="text" size="10"/></td>  
</tr>
<tr>  
	<td bgcolor="#ffc0cb"><strong>Jumlah (Quantity)</strong></td>  
	<td bgcolor="#ffc0cb">&nbsp;  
	<input name="jumlah" type="text" size="4"/></td>  
</tr>  
<tr>  
	<td bgcolor="#ffc0cb"><strong>Status</strong></td>  
	<td bgcolor="#ffc0cb">
	<label><input type="radio" name="status" value="Pelanggan" id="status_0" checked="checked"/>Pelanggan</label>  
	<label><input type="radio" name="status" value="Bukan pelanggan" id="status_1" />Bukan pelanggan</label>
	</td>  
</tr>  
<tr>
	<td bgcolor="#ffc0cb"><strong>Kota Pengiriman</strong></td>
	<td bgcolor="#ffc0cb">&nbsp;
	<select name="kota">
	<option value="Jakarta">Jakarta
	<option value="Bandung">Bandung
	<option value="Purwokerto">Purwokerto
	</select>
	</td>
</tr>
<tr>  
	<td height="28" bgcolor="#ffc0cb">&nbsp;</td>  
	<td bgcolor="#ffc0cb">  
	<input name="" type="submit" value="Proses" />&nbsp;
	<input name="" type="reset" value="Hapus" /></td>  
</tr>  
</table>  
</form>  
</div>
<div align="center">
	<a href="view.php" >Cek Transaksi</a>
</div>  
</body>  
</html>