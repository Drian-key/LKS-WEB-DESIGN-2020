<?php
    $conn = mysqli_connect("localhost", "root", "", "db_smk");
function query($query){
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows [] = $row;
        }
    return $rows;
}
function registrasi($data){
    global $conn;

    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    if (mysqli_fetch_assoc($username)) {
        echo "<script>alert('Username sudah ada');
        </script>
        ";
    }
    if ($password !== $password2) {
        echo "<script>alert('Password tidak sama');
        </script>
        ";
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");
    return mysqli_affected_rows($conn);
}
function bktamu($data){
    global $conn;

    $username = htmlspecialchars($data['username']);
    $alamat = htmlspecialchars($data['alamat']);
    $email = htmlspecialchars($data['email']);
    $komentar = htmlspecialchars($data['komentar']);
   
   
    mysqli_query($conn, "INSERT INTO bukutamu VALUES('','$username','$alamat', '$email', '$komentar')");
    return mysqli_affected_rows($conn);
}
function buatartikel($data){
    global $conn;

    $judul = htmlspecialchars($data['judul']);
    $isi = htmlspecialchars($data['isi']);
   
   
    mysqli_query($conn, "INSERT INTO article VALUES('','$judul','$isi')");
    return mysqli_affected_rows($conn);
}
function hapusbktamu($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM bukutamu WHERE id=$id");
    return mysqli_affected_rows($conn);
}
function hapusartikel($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM article WHERE id=$id");
    return mysqli_affected_rows($conn);
}
function ubaharticle($data){
    global $conn;

    $id = $data['id'];
    $judul = htmlspecialchars($data['judul']);
    $isi = htmlspecialchars($data['isi']);

    $query = "UPDATE article SET
              judul = '$judul',
              isi = '$isi'
              WHERE id = $id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>