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

        $UserName       = $_REQUEST['UserName'];
        $UserPsw        = $_REQUEST['UserPsw'];
        $ActualName     = $_REQUEST['ActualName'];
        $Address        = $_REQUEST['Address'];
        $Phone          = $_REQUEST['Phone'];
        $HPNo           = $_REQUEST['HPNo'];
        $Email          = $_REQUEST['Email'];
        $UserStatus     = $_REQUEST['UserStatus'];
        $LevelID        = $_REQUEST['LevelID'];
        $IsAktif        = $_REQUEST['IsAktif'];
        $StatusUser     = $_REQUEST['StatusUser'];
        $NamaLengkap    = $_REQUEST['NamaLengkap'];
        $NoTelp         = $_REQUEST['NoTelp'];
        $Alamat         = $_REQUEST['Alamat'];
        $KodeDivisi     = $_REQUEST['KodeDivisi'];

        $sql = "INSERT INTO userlogin VALUE ('$UserName','$UserPsw','$ActualName','$Address','$Phone','$HPNo','$Email','$UserStatus','$LevelID','$IsAktif','$StatusUser','$NamaLengkap','$NoTelp','$Alamat','$KodeDivisi') ";
        

        if(mysqli_query($conn, $sql))
        {
            echo "<h8>Data Berhasil Di simpan."
            . "Periksa Kembali Data Anda"
            . "Untuk Melihat Hasil Simpan</h8>";
            echo "<meta http-equiv=refresh content=2;URL='index.php'>";
        }
        else{
            echo "Eror Broo Data Tidak Bisa di Simpan $sql. "
            . mysqli_error($conn);
            echo "<meta http-equiv=refresh content=2;URL='tambah.php'>";
        }

        mysqli_close($conn);


        ?>
    
    </center>
</body>
</html>