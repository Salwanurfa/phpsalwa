<!DOCTYPE html>
<html>
<head>
    <title>Form Peminjaman Buku Perpustakaan</title>
</head>
<body>
    <h2>Form Peminjaman Buku Perpustakaan</h2>
    <form method="POST" action="">
        <label for="nama">Nama Peminjam:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="kelas">Kelas:</label><br>
        <input type="text" id="kelas" name="kelas" required><br><br>

        <label for="judul">Judul Buku:</label><br>
        <input type="text" id="judul" name="judul" required><br><br>

        <label for="tanggal_pinjam">Tanggal Pinjam:</label><br>
        <input type="date" id="tanggal_pinjam" name="tanggal_pinjam" required><br><br>

        <label for="tanggal_kembali">Tanggal Kembali:</label><br>
        <input type="date" id="tanggal_kembali" name="tanggal_kembali" required><br><br>

        <input type="submit" value="Simpan">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $judul = $_POST['judul'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $tanggal_kembali = $_POST['tanggal_kembali'];

    echo "<h2>Data Peminjaman Buku</h2>";
    echo "<p><strong>Nama Peminjam:</strong> " . htmlspecialchars($nama) . "</p>";
    echo "<p><strong>Kelas:</strong> " . htmlspecialchars($kelas) . "</p>";
    echo "<p><strong>Judul Buku:</strong> " . htmlspecialchars($judul) . "</p>";
    echo "<p><strong>Tanggal Pinjam:</strong> " . htmlspecialchars($tanggal_pinjam) . "</p>";
    echo "<p><strong>Tanggal Kembali:</strong> " . htmlspecialchars($tanggal_kembali) . "</p>";
    echo "<br><a href='form_perpus.php'>← Kembali ke Form</a>";
} else {
    
}
?>

</body>
</html>