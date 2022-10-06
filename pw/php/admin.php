<?php
session_start();

if (!isset($_SESSION["username"]))
{
    header("Location: login.php");
    exit;
}
    require 'functions.php';

    if(isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $itemdota = query("SELECT * FROM itemdota WHERE
                    nama_buku LIKE '%$keyword%' OR
                    penulis LIKE '%$keyword%' OR
                    tahun_terbit LIKE '%$keyword%' OR
                    harga LIKE '%$keyword%' OR
                    StokItem LIKE '%$keyword%' ");
    } else {
        $itemdota = query("SELECT * FROM itemdota");
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        body {
            background-color: white
        }

    </style>
    <title>Buku</title>
</head>
<body>
    <div class="add">
        <a href="tambah.php">
            <button type="">Tambah Data</button>
        </a>
    </div>
    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari!</button>
    </form>
    <table border="1" cellpadding="13" cellspacing="0">
        <tr>
            <th>#</th>
            <th>opsi</th>
            <th>Nama Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Harga</th>
            <th>StokItem</th>
            <th>Gambar</th>
        </tr>
        <?php if(empty($itemdota)) : ?>
            <tr>
                <td colspan="8">
                    <h1>Data tidak ditemukan</h1>
                </td>
            </tr>
    <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach ($itemdota as $id) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $id['id'] ?>"><button>Ubah</button></a>
                <a href="hapus.php?id=<?= $id['id'] ?> " onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
            </td>
            <td><?= $id['nama_buku']; ?></td>
            <td><?= $id['penulis']; ?></td>
            <td><?= $id['tahun_terbit']; ?></td>
            <td><?= $id['harga']; ?></td>
            <td><?= $id['StokItem']; ?></td>
            <td><img width="100px" src="../assets/img/<?= $id['gambar']; ?>" alt=""></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    <?php endif; ?>
    </table>
    <div class="logout">
            <a href="logout.php">Logout</a>
    </div>
</body>
</html>
