<?php
    require 'function.php';

    $result = mysqli_query($conn, "SELECT * FROM article");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK NEGERI 1 KEJOBONG</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <header>
        <div>
            <div class="runing">
            <marquee behavior="" direction="">
                <h1>smknkejobong@yahoo.com | TLP : (0281) 8903828</h1>
            </marquee>
            </div>

            <div class="headers">
                <div class="header-left">
                    <img src="aset/logo.png" alt="">
                </div>
                <div class="header-right">
                    <form action="login.php">
                    <input class="input-header input-headers" type="submit" value="Log In">
                    </form>

                   <form action="register.php">
                       <input class="input-header" type="submit" value="Sign Up">
                   </form>
                </div>
            </div>

            <nav>
                <ul>
                <li><a href="index.php #home">Home</a></li>
                    <li><a href="indexprofile.php #profile">Profile</a></li>
                    <li><a href="indexkontak.php #kontak">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="sapa">
                <h1>SELAMAT DATANG DI WEB <br> SMK NEGERI 1 KEJOBONG</h1>
                <img src="aset/smk.png" alt="">
            </div>
        </div>

        <div id="jalan">
            <marquee behavior="" direction="">
                <h2 id="runing2">Selamat datang di website resmi SMK NEGERI 1 KEJOBONG</h2>
            </marquee>
        </div>

        <div class="aside">

        <div class="gambar">
            <div class="balo">
            <div class="baner">
                <img src="aset/redhatbaner.png" alt="">
            </div>
            </div>
        </div>

        <div class="kontaks">
            <a href="https://gmail.com" show="_blank"><img class="ktk kktk" src="aset/email.png" alt=""></a>
            <a href="#"><img class="ktk" src="aset/kontak.png" alt=""></a>
        </div>

        <article id="kontak">
            <div class="artikel ber">
                <h1>KONTAK</h1>
                <P>info@smknkejobong.sch.id <br>
                    smknkejobong@yahoo.com <br>
                    TLP : (0281) 8903828</P>
                <br><br>
                <h1>ALAMAT</h1>
                <p></p>
SMK NEGERI 1 KEJOBONG <br>
NPSN : 20356184 <br>
Jl.Raya Kejobong-Timbang, Kejobong, Purbalingga 53392</p>

            </div>
        </article>

        
        <div class="info">
            <div class="artikel ber">
                <h1>Info</h1>
                <p>Tahukah anda bahwa di SMK NEGERI 1 KEJOBONG sudah ada academy RedHat loh, dan katanya SMK kita hanya satu-
                satunya di Purbalingga yang memiliki kursus RedHat GRATIS!,
                <br><br> Jadi ayo daftar dan bergabung bersama kami di SMK NEGERI 1 KEJOBONG
                pendaftaran gratis.
                <br><br>
                Jurusan di sini: <br><br>
                TKJ: TEKNIK KOMPUTER DAN JARINGAN <br><br>
                TKRO: TEKNIK KENDARAAN RINGAN OTOMOTIF <br><br>
                AKL: AKUTANSI LEMBAGA
                </p>
            </div>
        </div>

        <div class="berita">
            <div class="artikel ber">
                <h1>Berita Lainnya</h1>
                
                <br>
                <a href="#">smk negeri 1 kejobong,</a><br><br>
                <a href="#">smk negeri 1 kejobong,</a><br><br>
                <a href="#">smk negeri 1 kejobong,</a><br><br>
                <a href="#">smk negeri 1 kejobong,</a><br><br>
                <a href="#">smk negeri 1 kejobong,</a><br>
                <br>

            </div>
        </div>

    </main>
    <footer>
        <div class="footers">
            <h1>SMK NEGERI 1 KEJOBONG</h1>
            <h2>copyright 2020</h2>
        </div>
    </footer>
</body>
</html>