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
