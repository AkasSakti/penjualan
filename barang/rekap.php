<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang dan Transaksi</title>
</head>
<body>
    <h1>Data Barang dan Transaksi</h1>
    <table border="1">
        <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Total Transaksi</th>
        </tr>
        <?php
        include("../koneksi.php");
        //inner
        $sql = "SELECT barang.id_barang, barang.nama_barang, barang.harga_barang, 
        COALESCE(SUM(transaksi.subtotal), 0) AS total 
        FROM barang 
        INNER JOIN transaksi ON barang.nama_barang = transaksi.nama_barang
        GROUP BY barang.id_barang, barang.nama_barang, barang.harga_barang";
        $result = $conn->query($sql);
        /* right
        $sql = "SELECT barang.id_barang, barang.nama_barang, barang.harga_barang, 
        COALESCE(SUM(transaksi.subtotal), 0) AS total 
        FROM barang 
        RIGHT JOIN transaksi ON barang.nama_barang = transaksi.nama_barang
        GROUP BY barang.id_barang, barang.nama_barang, barang.harga_barang";
         $result = $conn->query($sql);
        */
        /* left
        $sql = "SELECT barang.id_barang, barang.nama_barang, barang.harga_barang, 
        COALESCE(SUM(transaksi.subtotal), 0) AS total 
        FROM barang 
        LEFT JOIN transaksi ON barang.nama_barang = transaksi.nama_barang
        GROUP BY barang.id_barang, barang.nama_barang, barang.harga_barang";
        $result = $conn->query($sql);
        */
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['id_barang']."</td>";
                echo "<td>".$row['nama_barang']."</td>";
                echo "<td>".$row['harga_barang']."</td>";
                echo "<td>".$row['total']."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No data found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
