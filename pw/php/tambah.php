<?php
session_start();

if (!isset($_SESSION["username"]))
{
    header("Location: login.php");
    exit;
}
require 'functions.php';
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0 ) {
        echo "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal ditambahkan');
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
    <title>Document</title>
</head>
<body>
<h3>Form Tambah Data Mahasiswa</h3>
    <form action="" method="post">
    <ul>
        <li>
            <label for="Name">Name :</label><br>
            <input type="text" name="name" id="name" required><br><br>
        </li>
        <li>
            <label for="Description">Desription :</label><br>
            <input type="text" name="description" id="description" required><br><br>
        </li>
        <li>
            <label for="Detail">Detail :</label><br>
            <input type="text" name="detail" id="detail" required><br><br>
        </li>
        <li>
            <label for="Price">Price :</label><br>
            <input type="text" name="price" id="price" required><br><br>
        </li>
        <li>
            <label for="StokItem">StokItem :</label><br>
            <input type="text" name="stokitem" id="stokitem" required><br><br>
        </li>
        <li>
            <label for="Picture">Picture :</label><br>
            <input type="text" name="picture" id="picture" required><br><br>
        </li>
        <br>
        <button type="submit" name="tambah">Tambah Data!</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color:black;">Kembali</a>
        </button>
    </ul>
</body>
</html>