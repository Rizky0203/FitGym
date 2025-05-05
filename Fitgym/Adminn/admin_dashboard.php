<?php
session_start();
include '../koneksi.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: Login/Login2.php");
    exit;
}

$result = mysqli_query($conn, "SELECT * FROM tb_produk ORDER BY Tanggal_input DESC");
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        .navbar {
            background-color: #333;
            padding: 15px;
            margin-bottom: 30px;
            color: white;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
        }

        .section {
            background: white;
            padding: 15px;
            margin-bottom: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 6px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background: #eee;
        }

        .btn {
            background: #28a745;
            color: white;
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 4px;
        }

        .btn-logout {
            background: #dc3545;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <strong>Dashboard Admin</strong> |
        <a href="../AdminMerch/tambah.php" class="btn">+ Produk</a>
        <a href="tambah_kelas.php" class="btn">+ Kelas</a>
        <a href="tambah_membership.php" class="btn">+ Membership</a>
        <a href="../AdminMerch/logout.php" class="btn btn-logout">Logout</a>
    </div>

    <div class="section">
        <h2>Daftar Produk</h2>
        <table>
            <tr>
                <th>No</th><th>Nama</th><th>Deskripsi</th><th>Varian</th><th>Harga</th><th>Tanggal</th><th>Aksi</th>
            </tr>
            <?php
$no = 1;
while ($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= htmlspecialchars($row['Nama_produk']) ?></td>
        <td><?= htmlspecialchars($row['Deskripsi_produk']) ?></td>
        <td><?= htmlspecialchars($row['Varian']) ?></td>
        <td>Rp <?= number_format($row['Harga'], 0, ',', '.') ?></td>
        <td><?= $row['Tanggal_input'] ?></td>
        <td>
            <a href="../AdminMerch/edit.php?id=<?= $row['Id'] ?>">Edit</a> |
            <a href="../AdminMerch/hapus.php?id=<?= $row['Id'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
        </td>
    </tr>
<?php } ?>
        </table>
    </div>

    <div class="section">
        <h2>Daftar Kelas</h2>
        <table>
            <tr>
                <th>No</th><th>Nama Kelas</th><th>Pelatih</th><th>Jadwal</th><th>Harga</th><th>Aksi</th>
            </tr>
            <!-- PHP loop kelas di sini -->
            <?php
include '../includes/koneksi.php';
?>

<h2>Daftar Kelas</h2>
<a href="http://localhost/webpro/FitGym/admin/tambah_kelas.php">Tambah Kelas</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama Kelas</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    $query = mysqli_query($conn, "SELECT * FROM kelas");
    while ($row = mysqli_fetch_assoc($query)) {
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $row['nama_kelas'] ?></td>
        <td><?= $row['deskripsi'] ?></td>
        <td>
        <a href="edit_kelas.php?id=<?= $row['id'] ?>">Edit</a>
        <a href="hapus_kelas.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>

        </table>
    </div>

    <div class="section">
        <h2>Daftar Membership</h2>
        <table>
            <tr>
                <th>No</th><th>Nama Paket</th><th>Durasi</th><th>Harga</th><th>Aksi</th>
            </tr>
            <!-- PHP loop membership di sini -->
        </table>
    </div>

</body>
</html>