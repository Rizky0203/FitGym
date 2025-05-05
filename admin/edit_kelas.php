<?php
include '../includes/koneksi.php'; 

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM kelas WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result); // Ambil data kelas
    } else {
        die("Error: " . mysqli_error($conn)); // Jika query gagal
    }
} else {
    die("ID kelas tidak ditemukan"); // Jika tidak ada ID di URL
}

// Jika form di-submit
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];

    // Validasi untuk memastikan data tidak kosong
    if (!empty($nama) && !empty($deskripsi)) {
        // Query untuk update data kelas
        $update_query = "UPDATE kelas SET nama_kelas = '$nama', deskripsi = '$deskripsi' WHERE id = '$id'";

        // Jika query berhasil
        if (mysqli_query($conn, $update_query)) {
            header("Location: daftar_kelas.php"); // Arahkan kembali ke halaman daftar kelas
            exit;
        } else {
            echo "Error: " . mysqli_error($conn); // Jika query gagal
        }
    } else {
        echo "Nama kelas dan deskripsi tidak boleh kosong."; // Validasi form
    }
}
?>

<h2>Edit Kelas</h2>
<form method="POST">
    <label>Nama Kelas:</label><br>
    <input type="text" name="nama" value="<?= $row['nama_kelas'] ?>"><br><br>
    <label>Deskripsi:</label><br>
    <textarea name="deskripsi"><?= $row['deskripsi'] ?></textarea><br><br>
    <button type="submit" name="update">Update</button>
</form>
