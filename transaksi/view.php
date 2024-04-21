<?php 
include("../koneksi.php");
require "../koneksi.php"; 
session_start();

// Pagination
$results_per_page = 10; // Jumlah hasil per halaman

if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

$start_from = ($page - 1) * $results_per_page;

// Pencarian
if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $query = mysqli_query($conn, "SELECT * FROM transaksi WHERE nama_barang LIKE '%$search%' ORDER BY id DESC LIMIT $start_from, $results_per_page");
} else {
    $query = mysqli_query($conn, "SELECT * FROM transaksi ORDER BY id DESC LIMIT $start_from, $results_per_page");
}

$total_pages_query = "SELECT COUNT(*) as total FROM transaksi";
$result = mysqli_query($conn, $total_pages_query);
$row = mysqli_fetch_assoc($result);
$total_pages = ceil($row["total"] / $results_per_page);
?>

<html>
<head>
<meta charset="utf-8">
<title>Form Transaksi</title>
<link rel="stylesheet" href="../style.css" />
</head>
<body>
<div>
<tr>Welcome <b><?php echo $_SESSION['username']; ?>!</b></tr>
<tr><div align="right"><a href="../logout.php">Logout</a></div></tr>
</div>
<div id="nav">
    <a href="../transaksi/index.php">Form Transaksi</a>
    <a href="../barang/input_barang.php">Form Barang</a>
</div> 
<div align="center">
<h1>Tabel Transaksi Penjualan</h1>
<form method="post" action="">
    <input type="text" name="search" placeholder="Cari berdasarkan nama barang">
    <input type="submit" value="Cari">
</form>  
<table>
<tr>
    <th bgcolor="#ffc0cb">Id</th>  
    <th bgcolor="#ffc0cb">Nama Barang</th>
    <th bgcolor="#ffc0cb">Harga</th>
    <th bgcolor="#ffc0cb">Quantity</th> 
    <th bgcolor="#ffc0cb">Subtotal</th>
    <th bgcolor="#ffc0cb">Status</th>
    <th bgcolor="#ffc0cb">Diskon</th>
    <th bgcolor="#ffc0cb">Kota Kirim</th>
    <th bgcolor="#ffc0cb">Ongkos Kirim</th>
    <th bgcolor="#ffc0cb">Total Bayar</th>
    <th bgcolor="#ffc0cb">Aksi</th>
</tr>
<?php if(mysqli_num_rows($query) > 0){ ?>
    <?php
        $id = $start_from + 1;
        while($data = mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $data["nama_barang"];?></td>
        <td><?php echo $data["harga"];?></td>
        <td><?php echo $data["jumlah"];?></td>
        <td><?php echo $data["subtotal"];?></td>
        <td><?php echo $data["status"];?></td>
        <td><?php echo $data["diskon"];?></td>
        <td><?php echo $data["kota"];?></td>
        <td><?php echo $data["ongkos"];?></td>
        <td><?php echo $data["total"];?></td>
        <td><?php echo "<a href='edit.php?id=".$data['id']."'> Edit</a>";?> | <?php echo "<a href='delete.php?id=".$data['id']."'> Delete</a>";?></td>
    </tr>
    <?php $id++; } ?>
<?php } ?>
</table>
<?php
// Pagination Links
for ($i = 1; $i <= $total_pages; $i++) {
    echo "<a href='?page=" . $i . "'>" . $i . "</a> ";
}
?>
</div>
<br>
<div align="center">
<a href="index.php" > &lt;&lt; Kembali Ke Form Utama</a>
</div>
</body>  
</html>
