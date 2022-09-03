<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "absen";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
$KodeDivisi       = "";
$NamaDivisi        = "";
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
    <title>Data Divisi</title>
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
                    header("refresh:1;url=tambahdatadivisi.php");
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                    header("refresh:1;url=datadivisi.php");
                }
                ?>
                <form action="simpandatadivisi.php" method="POST">
                <div class="mb-3 row">
                        <label for="KodeDivisi" class="col-sm-2 col-form-label">Kode Divisi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="KodeDivisi" name="KodeDivisi" value="<?php echo $KodeDivisi ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NamaDivisi" class="col-sm-2 col-form-label">Nama Divisi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="NamaDivisi" name="NamaDivisi" value="<?php echo $NamaDivisi ?>">
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