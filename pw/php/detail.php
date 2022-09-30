<?php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];
$itemdota = query("SELECT * FROM itemdota WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan4c_203040081</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $itemdota["gambar"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $itemdota["nama_buku"]; ?></p>
            <p><?= $itemdota["penulis"]; ?></p>
            <p><?= $itemdota["tahun_terbit"]; ?></p>
            <p><?= $itemdota["harga"]; ?></p>
            <p><?= $itemdota["StokItem"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>