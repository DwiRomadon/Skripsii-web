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

$query = mysqli_query($con,"select * from t_kuisioner");
?>
<!doctype html>
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

        <!-- Header-->
        <?php require_once "../views/header.php" ?>

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Kuisioner</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Master Data</a></li>                                    
                                    <li class="active">Tabel Kuisioner</li>
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

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Kuisioner</strong>
                                <a href="add-kuisioner" type="button" class="btn btn-success btn-sm btn-add"><i class="fa fa-plus"></i>&nbsp; Tambah Data</a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kode Klausal</th>
                                            <th>Kode Objektif Kontrol</th>
                                            <th>Kode Kontrol Keamanan</th>
                                            <th>Pertanyaan</th>
                                            <th>Tanggal Input</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($query as $data){ ?>
                                        <tr>
                                            <td><?php echo $data['kode_klausal'] ?></td>
                                            <td><?php echo $data['kode_keamanan'] ?></td>
                                            <td><?php echo $data['kode_tujuan'] ?></td>
                                            <td><?php echo $data['kuisioner'] ?></td>
                                            <td><?php echo $data['created_at'] ?></td>
                                            <td><a href="edit_kuisioner.php?id=<?php echo $data['id_kuisioner']?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></a>
                                                <a href="../function/admin/kuisioner/delete.php?id=<?php echo $data['id_kuisioner'] ?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a></td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <?php require_once "../views/footer.php" ?>

    </div>

<script src="../assets/js/lib/data-table/datatables.min.js"></script>
<script src="../assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="../assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="../assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="../assets/js/lib/data-table/jszip.min.js"></script>
<script src="../assets/js/lib/data-table/pdfmake.min.js"></script>
<script src="../assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="../assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="../assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="../assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="../assets/js/lib/data-table/datatables-init.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#bootstrap-data-table-export').DataTable();
    } );
</script>


</body>
</html>
