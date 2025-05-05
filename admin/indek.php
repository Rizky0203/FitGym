<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../Adminn/Login2.php"); // path login disesuaikan
    exit;
}

include '../koneksi.php'; // Tambahkan baris ini untuk koneksi DB

$result = mysqli_query($conn, "SELECT * FROM kelas");

if (!$result) {
    die("Query Error: " . mysqli_error($conn));
}
?>

<h2>Dashboard Admin - Daftar Produk</h2>
<a href="tambah_kelas.php">+ Tambah Produk</a> |
<a href="logout.php">Logout</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th><th>Nama</th><th>Deskripsi</th><th>Aksi</th>
    </tr>
    <?php $no = 1; while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $row['nama_kelas'] ?></td>
        <td><?= $row['deskripsi'] ?></td> <
        <td>
        <a href="edit_kelas.php?id=<?= $row['id'] ?>">Edit</a> |
        <a href="hapus_kelas.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
        <a href="logout.php">Logout</a>


        </td>
    </tr>
    <?php } ?>
</table>