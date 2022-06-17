<!doctype html>
<html lang="ru">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

<head>
    <?php include "partials/title-meta.php" ?>
    <!-- @@include("partials/title-meta.html", {"title": "Dashboard"}) -->

    <?php include "partials/head-css.php" ?>
</head>


<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include "partials/topbar.php" ?>
        <?php include "partials/sidebar.php" ?>


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                <?php include "partials/page-title.php" ?>
                <!-- @@include("partials/page-title.html", {"pagetitle": "Morvin", "subtitle":"Dashboard" ,"title":"Dashboard"}) -->


                <div class="container-fluid">

                    <div class="page-content-wrapper">

                        <div class="row">

         <!-- ============================================================== -->
        <!-- Тело страницы -->
        <!-- ============================================================== -->                           


                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <border>Your Profile</border>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                                <div>
                                    
                                <div class="product2-items">
                                <img src="assets/images/users/vit.jpg" id="img" alt="">
                                        Личные данные пользователя:
                                <div class="akk">
                                    <p>Login</p>
                                </div>
                                <div class="akk">
                                    <p>Password</p>
                                </div>
                                <div class="price">
                                    <p>Mail@mail.ru</p>
                                </div>
                                <button class="zak">Изменить</button>
                                 </div>
                                
                            </div>
                        </div>
                    </div>

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php include "partials/footer.php" ?>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <?php include "partials/vendor-scripts.php" ?>
</body>

</html>