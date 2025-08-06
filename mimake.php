<?php
// Simulasi data barang
$barangList = [
    ["nama" => "Sabun", "harga" => 5000, "jumlah" => 10],
    ["nama" => "Shampoo", "harga" => 15000, "jumlah" => 0],
    ["nama" => "Minyak Goreng", "harga" => 20000, "jumlah" => 5]
];

// Cek apakah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];
    $jumlah = $_POST["jumlah"];

    // Tambahkan data baru
    $barangBaru = ["nama" => $nama, "harga" => $harga, "jumlah" => $jumlah];
    $barangList[] = $barangBaru;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mini Market</title>
</head>
<body>
    <h2>Mimake Mart SMKN 1 Subang</h2>
    <form method="POST">
        Nama Barang: <input type="text" name="nama" required><br><br>
        Harga: <input type="number" name="harga" required><br><br>
        Jumlah: <input type="number" name="jumlah" required><br><br>
        <input type="submit" value="Tambah Barang">
    </form>

    <h3>Daftar Barang</h3>
    <table border="1" cellpadding="5">
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
        <?php foreach ($barangList as $barang): ?>
        <tr>
            <td><?= $barang["nama"]; ?></td>
            <td><?= $barang["harga"]; ?></td>
            <td><?= $barang["jumlah"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h3>Barang Kosong (jumlah = 0)</h3>
    <ul>
        <?php foreach ($barangList as $barang): ?>
            <?php if ($barang["jumlah"] == 0): ?>
                <li><?= $barang["nama"]; ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <h3>Barang Yang Baru Ditambahkan (jumlah = 5)</h3>
    <ul>
        <?php foreach ($barangList as $barang): ?>
            <?php if ($barang["jumlah"] == 5): ?>
                <li><?= $barang["nama"]; ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    
</body>
</html>