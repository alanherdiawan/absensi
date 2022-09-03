<?php 
    include 'koneksi.php';

    $KodeDivisi=$_GET['KodeDivisi'];

    $hasil=mysqli_query($koneksi, "DELETE FROM mstdivisi WHERE KodeDivisi = '$KodeDivisi'");

    header('location:datadivisi.php');
?>