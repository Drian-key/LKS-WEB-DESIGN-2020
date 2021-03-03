<?php
    require 'function.php';

    if (isset($_POST['regis'])) {
        if (registrasi($_POST) > 0) {
            echo "<script>alert('Berhasil mendaftar');
            document.location.href= 'login.php';
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
    <div class="forms" style="width: 300px;">
    <form action="" method="post">
        <h1>Buat Akun</h1>
        <img src="aset/smk.png" alt="">
        <div style="margin-top: 10px;">
            <label for="username">Username:</label><br>
            <input class="ipt" type="text" name="username" placeholder="username">
        </div>
        <div style="margin-top: 10px;">
            <label for="password">Password:</label><br>
            <input class="ipt" type="password" name="password" placeholder="password">
        </div>
        <div style="margin-top: 10px;">
            <label for="password2">Repassword:</label><br>
            <input class="ipt" type="password" name="password2" placeholder="repassword">
        </div>
        <div style="margin-top: 5px;">
            <button class="ipt impt" type="submit" name="regis">Register</button><span> |</span>
            <a class="aha" href="login.php">Batal</a>
        </div>
    </form>
    </div>
</body>
</html>