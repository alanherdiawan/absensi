<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <center>
        <?php

        $conn = mysqli_connect('localhost','root','','absen');

        if($conn === false)
        {
            die("EROR: Claud not connect.  "
                .mysqli_connect_eror());
        }

        $LevelID     = $_REQUEST['LevelID'];
        $LevelName   = $_REQUEST['LevelName'];
        $IsAktif     = $_REQUEST['IsAktif'];
    

        $sql = "INSERT INTO accesslevel VALUE ('$LevelID','$LevelName','$IsAktif')";
        

        if(mysqli_query($conn, $sql))
        {
            echo "<h8>Data Berhasil Di simpan."
            . "Periksa Kembali Data Anda"
            . "Untuk Melihat Hasil Simpan</h8>";
            echo "<meta http-equiv=refresh content=0;URL='acceslevel.php'>";
        }
        else{
            echo "Eror Broo Data Tidak Bisa di Simpan $sql. "
            . mysqli_error($conn);
            echo "<meta http-equiv=refresh content=2;URL='tambahacclevel.php'>";
        }

        mysqli_close($conn);


        ?>
    
    </center>
</body>
</html>