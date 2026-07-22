<?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM siswa WHERE id='$id'");
$row = mysqli_fetch_assoc($data);

if(isset($_POST['update'])){

    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    mysqli_query($conn, "UPDATE siswa SET
        nama='$nama',
        kelas='$kelas',
        alamat='$alamat'
        WHERE id='$id'
    ");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>

<h2>Edit Data Siswa</h2>

<form method="POST">
    Nama : <br>
    <input type="text" name="nama" value="<?= $row['nama']; ?>"><br><br>

    Kelas : <br>
    <input type="text" name="kelas" value="<?= $row['kelas']; ?>"><br><br>

    Alamat : <br>
    <textarea name="alamat"><?= $row['alamat']; ?></textarea><br><br>

    <button type="submit" name="update">Update</button>
    <a href="index.php" class="btn btn-danger">Kembali</a>

</form>

</body>
</html>