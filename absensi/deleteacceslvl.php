<?php 
    include 'koneksi.php';

    $LevelID=$_GET['LevelID'];

    $hasil=mysqli_query($koneksi, "DELETE FROM accesslevel WHERE LevelID = '$LevelID'");

    header('location:acceslevel.php');
?>