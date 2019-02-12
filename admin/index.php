<?php
session_start();

if(isset($_SESSION['username']) && $_SESSION['level'] == '1'){

    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
}else{
    echo "<script>alert('Anda tidak diizinkan mengakses halaman ini'); window.location=('http://localhost/ratih/');</script>";
}
require_once("../function/koneksi.php");
$query = mysqli_query($con,"SELECT COUNT(id_user) as totuser FROM user_access");
$r = mysqli_fetch_array($query);

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php require_once "../views/style.php"?>
</head>
<body>

   <?php require_once "../views/sidebar.php" ?>

    <div id="right-panel" class="right-panel">
        
        <?php require_once "../views/header.php" ?>

        <div class="content pb-0">

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-4">
                                    <i class="pe-7f-users"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                        <div class="stat-text"><span class="count"><?php echo $r['totuser'] ?></span></div>
                                        <div class="stat-heading">Pengguna</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-1">
                                    <i><img src="../images/qr.png"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                        <div class="stat-text">Title</div>
                                        <div class="stat-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                               
            </div>

        </div>

        <div class="clearfix"></div>

        <?php require_once "../views/footer.php" ?>

    </div>

<div id="container">
  
</div>

</body>
</html>
