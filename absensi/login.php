<?php 
  session_start();

  include 'koneksi.php';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login LAPAKU</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2>Login</h2>
                 <br />
            </div>
        </div>
         <div class="row ">

                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Enter Details To Login </strong>
                            </div>
                            <div class="panel-body">
                                <form role="form" method="post">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" name="user" placeholder="Username" required />
                                        </div>
                                             <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  name="pass" placeholder="Password" required />
                                        </div>


                                     <button class="btn btn-primary" name="login">Login</button>
                                    <hr />
                                    
                            </div>

                        </div>
                    </div>


        </div>
    </div>


    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>

  <?php 
    if(isset($_POST['login']))
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        //die("SELECT * FROM userlogin WHERE UserName = '$user' AND UserPsw ='$pass'");
        $data_user = mysqli_query($koneksi, "SELECT * FROM userlogin WHERE UserName = '$user' AND UserPsw ='$pass' AND LevelId = 1");
        $r = mysqli_fetch_array($data_user);
        //var_dump($r);die();
        $kodedivisi = $r['KodeDivisi'];
        $UserName = $r['UserName'];
        $UserPsw = $r['UserPsw'];
        //die('user : '.$user .', UserName : '. $UserName.', pass : '.$pass.', UserPsw : '.$UserPsw);
        if($user == $UserName && $pass == $UserPsw)
        {
          if(is_array($r))
          {
            $_SESSION['UserName'] = $r ['UserName'];
          }
        }
        else
        {
          echo "<div class='alert alert-danger'>Login Failed</div>";
          echo "<meta http-equiv='refresh' content='3;url=login.php'>";
        }
    }
    if(isset($_SESSION['UserName'])){
      header('location:index.php');
    }
  ?>
