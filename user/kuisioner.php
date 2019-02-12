<?php
session_start();

if(isset($_SESSION['username']) && $_SESSION['level'] == '2'){

    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
}else{
    echo "<script>alert('Anda tidak diizinkan mengakses halaman ini'); window.location=('http://localhost/ratih/');</script>";
}
require_once("../function/koneksi.php");

$klausal    = mysqli_query($con,"select * from t_klausal");

$query      = mysqli_query($con,"select * from t_kuisioner");
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aplikasi Ratih</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="../images/favicon.png">
    <link rel="shortcut icon" href="../images/favicon.png"> 

    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="../assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/lib/chosen/chosen.min.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
 

</head>
<body>    

    <?php include "../views/sidebar-user.php" ?>
    
    <div id="right-panel" class="right-panel">

        <?php include "../views/header.php" ?>

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Extra</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Extra</a></li>                                    
                                    <li class="active">Kuisioner</li>
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
                    <div class="col-xs-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Pilihan Klausal</strong>
                            </div>
                            <div class="card-body">

                              <select data-placeholder="Pilih Klausal..." class="standardSelect" tabindex="1">
                                <option value="" label="default"></option>
                                  <?php foreach ($klausal as $data){ ?>
                                    <option value="<?php echo $data['kode_klausal'];?>"><?php echo $data['klausal'];?></option>
                                  <?php }?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Pertanyaan</strong>
                        </div>
                        <div class="card-body card-block">
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <?php foreach ($query as $data){ ?>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Pertanyaan</label></div>
                                        <div class="col-12 col-md-9">
                                            <p class="form-control-static"><?php echo $data['kuisioner']?></p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Jawaban</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check-inline form-check">
                                                <label for="inline-checkbox1" class="form-check-label jwb">
                                                    <input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" value="option1" class="form-check-input">Jawaban A 
                                                </label>
                                                <label for="inline-checkbox2" class="form-check-label jwb">
                                                    <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2" value="option2" class="form-check-input">Jawaban B
                                                </label>
                                                <label for="inline-checkbox3" class="form-check-label jwb">
                                                    <input type="checkbox" id="inline-checkbox3" name="inline-checkbox3" value="option3" class="form-check-input">Jawaban C
                                                </label>
                                                <label for="inline-checkbox4" class="form-check-label jwb">
                                                    <input type="checkbox" id="inline-checkbox4" name="inline-checkbox4" value="option4" class="form-check-input">Jawaban D
                                                </label>
                                                <label for="inline-checkbox5" class="form-check-label jwb">
                                                    <input type="checkbox" id="inline-checkbox5" name="inline-checkbox5" value="option5" class="form-check-input">Jawaban E
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
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
            </div>

        </div>
    </div>
    
    <div class="clearfix"></div>

    <?php include "../views/footer.php" ?>

</div>

<script src="../assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/lib/chosen/chosen.jquery.min.js"></script>

<script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>

</body>
</html>
