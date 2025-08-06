<!DOCTYPE html>
<html>
<head>
    <title>Bank Mini SMKN 1 Subang</title>
</head>
<body>
    <h2>Bank Mini SMKN 1 Subang</h2>
    <form action="index.php" method="post">
        <label for="no rekening/nasabah">No Rekening/Nasabah:</label><br>
        <input type="text" id="no rekening/nasabah" name="no rekening/nasabah" required><br>
i
        <label for="nama pemilik rekening">Nama Pemilik Rekening:</label><br>
        <input type="text" id="nama pemilik rekening" name="nama pemilik rekening" required><br>
        
        <label for="kelompok nasabah">Kelompok Nasabah:</label><br>
        <select name="kelompok nasabah" required>
            <option value=""></option>
            <option value="Guru">Guru</option>
            <option value="Siswa">Siswa</option>
            <option value="Umum">Umum</option>
        </select><br><br>
        
        <label for="keterangan">keterangan:</label><br>
        <input type="text" id="keterangan" name="keterangan" required><br>

        <label for="jumlah rupiah">jumlah rupiah:</label><br>
        <input type="text" id="jumlah rupiah" name="jumlah rupiah" required><br>

        <label for="tanggal">Tanggal :</label><br>
        <input type="date" id="tanggal" name="tanggal" required><br><br>
        
        <label for="tujuan penggunaan dana">Tujuan penggunaan dana:</label><br>
        <input type="text" id="tujuan penggunaan dana" name="tujuan penggunaan dana" required><br>

        <p>ketentuan:</P>
        <p>1.penarikan sah telah divalidasi atau ditandatangani teller</P>
        <P>2.penarikan akan dibukukan setelah dana efektif dikeluarkan</p>

        <input type="submit"name="submit"value="submit">
    
<?php
if (isset($_POST['submit'])) {
    $norekeningnasabah = $_POST['norekeningnasabah'];
    $namapemilikrekening = $_POST['namapemilikrekening'];
    $kelompoknasabah = $_POST['kelompoknasabah'];
    $keterangan = $_POST['keterangan'];
    $jumlahrupiah = $_POST['jumlahrupiah'];
    $terbilang = $_POST['terbilang'];
    $tanggal = $_POST['tanggal'];
    $tujuanpenggunaandana = $_POST['tujuanpenggunaandan'];
    
    
    
    echo "<h2>:Bank Mini SMKN 1 Subang </h2>";
    echo "no rekening/nasabah : $norekeningnasabah<br>";
    echo "nama pemilik rekening :$namapemilikrekening<br>";
    echo "kelompok nasabah :$kelompoknasabah<br>";
    echo "keterangan :$keterangan<br>";
    echo "jumlah rupiah :$jumlahrupiah<br>";
    echo "terbilang :$terbilang<br>";
    echo "tanggal:$tanggal<br>";
    echo "tujuan penggunaan dana:$tujuanpenggunaandana<br>";
    
}
?>
</body> 
</html>