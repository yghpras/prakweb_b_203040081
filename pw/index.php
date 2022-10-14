<?php
    require 'php/functions.php';
    if(isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $itemdota = query("SELECT * FROM itemdota WHERE
                    nama_buku LIKE '%$keyword%' OR
                    penulis LIKE '%$keyword%' OR
                    tahun_terbit LIKE '%$keyword%' OR
                    harga LIKE '%$keyword%' OR
                    StokItem LIKE '%$keyword%' OR
                    gambar LIKE '%$keyword%' ");
    } else {
        $itemdota = query("SELECT * FROM itemdota");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buku</title>
    <link rel="stylesheet" href="/style.css">
   
</head>
<body>
    <div class="container">
        <form action="" method="get">
            <input type="text" name="keyword" autofocus>
            <button type="submit" name="cari">Cari!</button>
        </form>
        <?php if(empty($itemdota)) : ?>
            <h1>Data tidak ditemukan</h1>
    <?php else : ?>
        <?php foreach ($itemdota as $id) : ?>
            <p class="Name">
                <a href="php/detail.php?id=<?= $id['id'] ?>">
                </a>
            </p>
            <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>

    <a href="php/login.php">
        <button type="">
            Masuk ke halaman Admin
        </button>
    </a>

</body>
</html>