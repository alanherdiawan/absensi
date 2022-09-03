<?php

include 'koneksi.php';

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$UserName    = $_GET['UserName']; 
$eksekusi = mysqli_query($koneksi, "DELETE FROM userlogin WHERE UserName = $UserName");

if ($eksekusi == 1) {
    header("location:index.php?pesan=berhasil");
    echo "<meta http-equiv=refresh content=2;URL='index.php'>";
}else {
    header("location:index.php?pesan=gagal");
    echo "<meta http-equiv=refresh content=2;URL='index.php'>";
}

?>

