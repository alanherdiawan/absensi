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
$UserName       = "";
$UserPsw        = "";
$ActualName     = "";
$Address        = "";
$Phone          = "";
$HPNo           = "";
$Email          = "";
$UserStatus     = "";
$LevelID        = "";
$IsAktif        = "";
$StatusUser     = "";
$NamaLengkap    = "";
$NoTelp         = "";
$Alamat         = "";
$KodeDivisi     = "";
$sukses         = "";
$error          = "";

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
                Create / Edit Data
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
                <form action="simpan.php" method="POST">
                <div class="mb-3 row">
                        <label for="UserName" class="col-sm-2 col-form-label">User Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="UserName" name="UserName" value="<?php echo $UserName ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="UserPsw" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="UserPsw" name="UserPsw" value="<?php echo $UserPsw ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ActualName" class="col-sm-2 col-form-label">Actual Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ActualName" name="ActualName" value="<?php echo $ActualName ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Address" name="Address" value="<?php echo $Address ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Phone" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Phone" name="Phone" value="<?php echo $Phone ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="HPNo" class="col-sm-2 col-form-label">HP No</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="HPNo" name="HPNo" value="<?php echo $HPNo ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Email" name="Email" value="<?php echo $Email ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="UserStatus" class="col-sm-2 col-form-label">User Status</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="UserStatus" name="UserStatus" value="<?php echo $UserStatus ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="LevelID" class="col-sm-2 col-form-label">LevelID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="LevelID" name="LevelID" value="<?php echo $LevelID ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="IsAktif" class="col-sm-2 col-form-label">Is Aktif</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IsAktif" name="IsAktif" value="<?php echo $IsAktif ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="StatusUser" class="col-sm-2 col-form-label">Status User</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="StatusUser" name="StatusUser" value="<?php echo $StatusUser ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NamaLengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="NamaLengkap" name="NamaLengkap" value="<?php echo $NamaLengkap ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NoTelp" class="col-sm-2 col-form-label">No Telp</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="NoTelp" name="NoTelp" value="<?php echo $NoTelp ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Alamat" name="Alamat" value="<?php echo $Alamat ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="KodeDivisi" class="col-sm-2 col-form-label">Kode Divisi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="KodeDivisi" name="KodeDivisi" value="<?php echo $KodeDivisi ?>">
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