<?php
    require 'function.php';

    session_start();
    if ( !isset($_SESSION['adminss'])) {
        header('location:xyz.php');
        exit;
    }

    $result = mysqli_query($conn, "SELECT * FROM article");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <div class="forms" style="height: auto; width:auto; padding:50px 20px;">
        <h1>Form Admin</h1>
        <img src="aset/smk.png" alt="">
        <br>
        <a href="admin.php">Kembali</a><span> |</span>
        <a href="buatartikel.php">Buat Artikel</a>
        <br><br>
        <table border="1px solid white">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Judul</th>
            <th>Isi</th>
        </tr>

        <?php $i=1; ?>
        <?php while($dow=mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="hapusartikel.php?id=<?= $dow['id']; ?>" onclick="return confirm('YAKINN');">Hapus</a>
                <br>
                <span>-------</span>
                <br>
                <a href=ubah.php?id=<?= $dow['id']; ?>">Ubah</a>
            </td>
            <td><?= $dow['judul']; ?></td>
            <td><?= $dow['isi']; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
        </table>
    </div>
</body>
</html>