<?php 
    include 'koneksi.php';

    $LevelID=$_GET['LevelID'];
    $sql=mysqli_query($koneksi, "SELECT * FROM accesslevel WHERE LevelID = '$LevelID'");
    $data=mysqli_fetch_array($sql);
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
                <form action="" method="POST">
                                    <div class="mb-3 row">
                                        <label for="LevelName" class="col-sm-2 col-form-label">Lavel Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="LevelName" name="LevelName" value="<?php echo $data['LevelName'] ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="IsAktif" class="col-sm-2 col-form-label">IS Aktif</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="IsAktif" name="IsAktif" value="<?php echo $data['IsAktif'] ?>">
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

<?php 
    if(isset($_POST['simpan']))
    {
        mysqli_query($koneksi, "UPDATE accesslevel SET LevelName = '$_POST[LevelName]', IsAktif = '$_POST[IsAktif]' WHERE LevelID = '$_GET[LevelID]'");

        header('location:acceslevel.php');
        echo 'Data Berhasil Diubah';
    }
?>