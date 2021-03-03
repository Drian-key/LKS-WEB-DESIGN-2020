<?php
    require 'function.php';

    if (isset($_POST['bukutamu'])) {
        if (bktamu($_POST) > 0) {
            echo "<script>alert('Berhasil Dikirim');
            document.location.href= 'user.php';
            </script>
        ";
        }else{
            echo mysqli_error($conn);
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <div class="forms" style="width: 500px;">
    <form action="" method="post">
        <h1>Form Buku Tamu</h1>
        <img src="aset/smk.png" alt="">
        <div style="margin-top: 10px;">
            <label for="username">Nama:</label><br>
            <input class="ipt" type="text" name="username" placeholder="username">
        </div>
        <div style="margin-top: 10px;">
            <label for="alamat">Alamat:</label><br>
            <input class="ipt" type="text" name="alamat" placeholder="alamat">
        </div>
        <div style="margin-top: 10px;">
            <label for="email">Email:</label><br>
            <input class="ipt" type="text" name="email" placeholder="email">
        </div>
        <div style="margin-top: 10px;">
            <label for="komentar">Komentar:</label><br>
            <textarea class="ipt" type="text" name="komentar" placeholder="komentar" style="width: 8cm; height: 5cm;"></textarea>
        </div>
        <div style="margin-top: 5px;">
            <button class="ipt impt" type="submit" name="bukutamu">Kirim</button><span> |</span>
            <a class="aha" href="user.php">Batal</a>
        </div>
    </form>
    </div>
</body>
</html>