<?php
    require 'function.php';
    session_start();
    if ( !isset($_SESSION['adminss'])) {
        header('location:xyz.php');
        exit;
    }


    $result = mysqli_query($conn, "SELECT * FROM bukutamu");

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
        <h1>Form admin</h1>
        <img src="aset/smk.png" alt=""><br><br>
        <a href="logout.php" class="aha">Log Out</a><span> |</span>
        <a href="adminartikel.php" class="aha">Ubah Artikel</a> 
        <br><br>

        <table border="1px solid white">
        <h1 style="text-align: left;">Daftar Buku Tamu</h1>
            <tr>
                <th>No</th>
                <th>Aksi</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Komentar</th>
            </tr>

            <?php $i=1; ?>
            <?php while($dow= mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="hapus.php?id=<?= $dow['id']; ?>" onclick="return confirm('Yakin ingin dihapus?');">Hapus</a>
                </td>
                <td><?= $dow['username']; ?></td>
                <td><?= $dow['alamat']; ?></td>
                <td><?= $dow['email']; ?></td>
                <td><?= $dow['komentar']; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
        </table>

    </div>
</body>
</html>