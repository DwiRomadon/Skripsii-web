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

$query = mysqli_query($con,"select * from t_klausal");

$data  = $_GET['id'];
$querys = mysqli_query($con,"select * from t_keamanan join t_klausal on t_keamanan.kode_klausal=t_klausal.kode_klausal where id_keamanan = '$data'");
$r = mysqli_fetch_array($querys);
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

    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Objektif Kontrol</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Master Data</a></li>
                                <li class="active">Data Objektif Kontrol</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <strong>Data</strong> Objektif Kontrol
                        </div>
                        <div class="card-body card-block">
                            <form action="../function/admin/keamanan/edit_keamanan.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <input type="hidden" value="<?php echo $r['id_keamanan']?>" id="text-input" name="id" placeholder="Text..." class="form-control">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Nama Klausal</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="kodekalusal" id="select" class="form-control">
                                            <option value="<?php echo $r['kode_klausal']?>"><?php echo $r['klausal']?></option>
                                            <?php foreach ($query as $data){ ?>
                                                <option value="<?php echo $data['kode_klausal'] ?>"><?php echo $data['klausal'] ?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kode Kontrol</label></div>
                                    <div class="col-12 col-md-9"><input type="text" value="<?php echo $r['kode_keamanan']?>" id="text-input" name="kodekeamanan" placeholder="Text..." class="form-control"><small class="form-text text-muted">Ex : A.5.1</small></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Kontrol</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" value="<?php echo $r['keamanan']?> " name="nama" placeholder="Text..." class="form-control"><small class="form-text text-muted">Ex : Arah manajemen untuk informasi Objektif Kontrol</small></div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <strong>Deskripsi</strong>
                        </div>
                        <div class="card-body card-block">
                            <p>#Deskripsi fungsi form</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <?php require_once "../views/footer.php" ?>

</div>

</body>
</html>
