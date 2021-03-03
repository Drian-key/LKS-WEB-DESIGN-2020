<?php
    session_start();
    require 'function.php';

    if (isset($_POST['admins'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($password == $row['password']) {
                $_SESSION['adminss'] = true; 
            }
            header('location:admin.php');
            
        }
        $error = true;
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

    <?php  if(isset($error)):  ?>
    <form action="" method="post">
        <h1>PASSWORD / USERNAME SALAH</h1>
    </form>
    <?php endif; ?>

    <div class="forms">
    <form action="" method="post">
        <h1>LOGIN ADMIN</h1>
        <img src="aset/smk.png" alt="">
        <div style="margin-top: 10px;">
            <input type="text" class="ipt" name="username" placeholder="Masukan Username">
        </div>
        <div style="margin-top: 10px;">
            <input type="password" class="ipt" name="password" placeholder="Masukan Password">
        </div>
        <div style="margin-top: 5px;">
            <button type="submit" class="ipt impt" name="admins">Log In</button>
        </div>
    </form>
    </div>
</body>
</html>