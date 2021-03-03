<?php
    require 'function.php';

    session_start();
    if ( !isset($_SESSION['adminss'])) {
        header('location:xyz.php');
        exit;
    }
    $id = $_GET['id'];
    $art = query("SELECT * FROM article WHERE id='$id'")[0];
    if (isset($_POST['ubahartikel'])) {
        if (ubaharticle($_POST) > 0 ) {
            echo "<script>
            alert('Artikel Berhasil Diubah');
            document.location.href = 'adminartikel.php';
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
    <form action="" method="post">
        <div class="forms" style="height: auto; width:auto;">
        <h1>From Ubah Artikel</h1>
        <img src="aset/smk.png" alt="">
        <div>
            <input type="hidden" name="id" value="<?php echo $art['id']; ?>">
        </div>
        <div style="margin-top: 5px;">
            <label for="judul">Judul:</label><br>
            <input type="text" name="judul" placeholder="judul" style="width: 10cm;" required value="<?php echo $art['judul']; ?>">
        </div>
        <div style="margin-top: 5px;">
            <label for="isi">Isi:</label><br>
            <textarea type="text" name="isi" id="isi" style="width: 20cm; height:20cm;"><?php echo $art['isi']; ?></textarea>
        </div>
        <div style="margin-top: 5px;">
            <button type="submit" class="ipt impt" name="ubahartikel">Ubah</button>
            <a class="aha" href="adminartikel.php">Batal</a>
        </div>
        </div>
    </form>
</body>
</html>