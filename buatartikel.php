<?php
    require 'function.php';
    session_start();
    if ( !isset($_SESSION['adminss'])) {
        header('location:xyz.php');
        exit;
    }

    if (isset($_POST['buatartikel'])) {
        if (buatartikel($_POST) > 0) {
            echo "<script>alert('Berhasil Dibuat');
            document.location.href= 'adminartikel.php';
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
    <div class="forms" style="width: auto; height:auto">
    <form action="" method="post">
        <h1>Form Buat Artikel</h1>
        <img src="aset/smk.png" alt="">
        <div style="margin-top: 10px;">
            <label for="judul">Judul:</label><br>
            <input class="ipt" type="text" name="judul" placeholder="judul" style="width: 10cm;">
        </div>
        <div style="margin-top: 10px;">
            <label for="isi">Isi:</label><br>
            <textarea class="ipt" type="text" name="isi" placeholder="isi" style="width: 20cm; height: 20cm;"></textarea>
        </div>
        <div style="margin-top: 5px;">
            <button class="ipt impt" type="submit" name="buatartikel">Buat</button><span> |</span>
            <a class="aha" href="adminartikel.php">Batal</a>
        </div>
    </form>
    </div>
</body>
</html>