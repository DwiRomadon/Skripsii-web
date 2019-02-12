<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php require_once "../views/style.php"?>
</head>
<body>    

    <?php require_once "../views/sidebar-user.php" ?> 

    <div id="right-panel" class="right-panel">

        <?php require_once "../views/header.php" ?>

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Profile</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>                                    
                                    <li class="active">Profile</li>
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
                        <section class="card">
                            <div class="twt-feed blue-bg">                                
                                <div class="media">
                                    <a href="#">
                                        <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg">
                                    </a>
                                    <div class="media-body">
                                        <h2 class="text-white display-6">Nama Administrator</h2>
                                        <p class="text-light">Title Administrator</p>
                                    </div>
                                </div>
                            </div>
                            <div class="weather-category twt-category">
                                <ul>
                                    <li class="active">
                                        <h5>admin@mail.com</h5>
                                        Email
                                    </li>
                                    <li>
                                        <h5 style="color: green">Active</h5>
                                        Status
                                    </li>
                                    <li>
                                        <h5>20/01/2019</h5>
                                        Registered
                                    </li>
                                </ul>
                            </div>
                            <footer class="twt-footer">                                
                                <a href="#"><i class="fa fa-map-marker"></i></a>
                                Bandar Lampung, Indonesia
                                <span class="pull-right">
                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                </span>
                            </footer>
                        </section>
                    </div>                                        

                </div>
            </div>
        </div>

    <div class="clearfix"></div>

    <?php require_once "../views/footer.php" ?>

    </div>

</body>
</html>
