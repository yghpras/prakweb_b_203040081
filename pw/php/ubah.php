<?php
session_start();

if (!isset($_SESSION["username"]))
{
    header("Location: login.php");
    exit;
}
require 'functions.php';

$id = $_GET['id'];
$id = query("SELECT * FROM itemdota WHERE id = $id ")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0 ) {
        echo "<script>
            alert('Data Berhasil diubah!');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal diubah!');
            document.location.href = 'admin.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ubah Data Buku</title>
</head>
<body>
<h3 >Form Ubah Data ItemDota</h3>
    <form action="" method="post">
    <ul>
        <li>
            <input type="hidden" name="id" id="id" value="<?= $id['id']; ?>">
        </li>
        <li>
            <label for="nama_buku">Nama :</label><br>
            <input type="text" name="nama_buku" id="nama_buku" required value="<?= $id['nama_buku']; ?>"><br><br>
        </li>
        <li>
            <label for="penulis">Penulis :</label><br>
            <input type="text" name="penulis" id="penulis" required value="<?= $id['penulis']; ?>"><br><br>
        </li>
        <li>
            <label for="tahun_terbit">Tahun Terbit :</label><br>
            <input type="text" name="tahun_terbit" id="tahun_terbit" required value="<?= $id['tahun_terbit']; ?>"><br><br>
        </li>
        <li>
            <label for="harga">Harga :</label><br>
            <input type="text" name="harga" id="harga" required value="<?= $id['harga']; ?>"><br><br>
        </li>
        <li>
            <label for="StokItem">StokItem :</label><br>
            <input type="text" name="stokitem" id="stokitem" required value="<?= $id['StokItem']; ?>"><br><br>
        </li>
        <li>
            <label for="gambar">Gambar :</label><br>
            <input type="file" name="gambar" id="gambar" required value="<?= $id['gambar']; ?>"><br><br>
        </li>
        <br>
        <button type="submit" name="ubah">Ubah Data!</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color:black;">Kembali</a>
        </button>
    </ul>
</body>
</html>