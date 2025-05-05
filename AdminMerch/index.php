<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../Login/Login2.php"); // path login disesuaikan
    exit;
}

include '../koneksi.php'; // Tambahkan baris ini untuk koneksi DB

$result = mysqli_query($conn, "SELECT * FROM tb_produk");

if (!$result) {
    die("Query Error: " . mysqli_error($conn));
}
?>

<h2>Dashboard Admin - Daftar Produk</h2>
<a href="tambah.php">+ Tambah Produk</a> |
<a href="logout.php">Logout</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th><th>Nama</th><th>Deskripsi</th><th>Varian</th><th>Harga</th><th>Tanggal</th><th>Aksi</th>
    </tr>
    <?php $no = 1; while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $row['Nama_produk'] ?></td>
        <td><?= $row['Deskripsi_produk'] ?></td>
        <td><?= $row['Varian'] ?></td>
        <td><?= $row['Harga'] ?></td>
        <td><?= $row['Tanggal_input'] ?></td>
        <td>
        <a href="edit.php?id=<?= $row['Id'] ?>">Edit</a> |
        <a href="hapus.php?id=<?= $row['Id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
        <a href="logout.php">Logout</a>


        </td>
    </tr>
    <?php } ?>
</table>
