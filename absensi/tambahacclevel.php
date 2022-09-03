<?php

include 'koneksi.php';

?>
<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "absen";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}

$LevelID        = "";
$LevelName        = "";
$IsAktif        = "";
$error        = "";
$sukses        = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <div class="card">
            <div class="card-header">
                Create 
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                    header("refresh:5;url=index.php");//5 : detik
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                    header("refresh:5;url=index.php");
                }
                ?>
                <form action="simpanacclevel.php" method="POST">
                <div class="mb-3 row">
                        <label for="LevelID" class="col-sm-2 col-form-label">Level ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="LevelID" name="LevelID" value="<?php echo $LevelID ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="LevelName" class="col-sm-2 col-form-label">Lavel Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="LevelName" name="LevelName" value="<?php echo $LevelName ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="IsAktif" class="col-sm-2 col-form-label">IS Aktif</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IsAktif" name="IsAktif" value="<?php echo $IsAktif ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>