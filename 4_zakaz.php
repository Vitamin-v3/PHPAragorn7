<?php
require_once 'partials/db.php';
require_once 'partials/func_view_table.php';

$name = $_POST['name'];                         //наименование бумаги
$type = $_POST['type'];                         //тип бумаги
$x_size = $_POST['x_size'];                     // ширина листа, мм
$y_size = $_POST['y_size'];                     // высота листа, мм

?>

<!-- ============================================================== -->

<!DOCTYPE html>
<html lang='ru'>

<head>
    <?php include_once "partials/title-meta.php" ?>
    <?php include_once "partials/head-css.php" ?>
</head>



<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php  //include "partials/topbar.php" ?>
        <?php  //include "partials/sidebar.php" ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

        <?php     f_view_table($pdo, 'access', 'Заказы', 'Список заказов на предприятии'); ?>

    </div>
    <!-- END layout-wrapper -->

    <?php include_once "partials/vendor-scripts.php" ?>

</body>

</html>