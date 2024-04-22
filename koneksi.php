<?php
$servername	= "localhost";	// host atau IP
$username	= "root";		// nama penggua
$password	= "";			// password login
$database	= "sdhpjl";		// database yang digunakan ketika melakukan query
$port = "3308";
// buat koneksi
$conn = mysqli_connect($servername, $username, $password, $database, $port);
// cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_error());
}
?>
