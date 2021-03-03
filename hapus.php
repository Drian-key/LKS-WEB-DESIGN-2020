<?php
    require 'function.php';
    session_start();
    if ( !isset($_SESSION['adminss'])) {
        header('location:xyz.php');
        exit;
    }

    $id = $_GET['id'];
    if (hapusbktamu($id) > 0) {
        echo 'dihapus';
    }
    else{
        echo mysqli_error($conn);
    }

    header('location:admin.php');
?>