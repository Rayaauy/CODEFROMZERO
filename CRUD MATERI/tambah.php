<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){

    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    mysqli_query($conn, "INSERT INTO siswa(nama,kelas,alamat)
    VALUES('$nama','$kelas','$alamat')");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>

<h2>Tambah Data Siswa</h2>

<form method="POST">
    Nama : <br>
    <input type="text" name="nama"><br><br>

    Kelas : <br>
    <input type="text" name="kelas"><br><br>

    Alamat : <br>
    <textarea name="alamat"></textarea><br><br>

    <button type="submit" name="simpan">Simpan</button>
    
    <a href="index.php" class="btn btn-danger">Kembali</a>
</form>

</body>
</html>