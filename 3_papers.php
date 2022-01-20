<?php
require 'partials/db.php';

$name = $_POST['name'];                         //наименование бумаги
$type = $_POST['type'];                         //тип бумаги
$x_size = $_POST['x_size'];                     // ширина листа, мм
$y_size = $_POST['y_size'];                     // высота листа, мм
$weight = $_POST['weight'];                     // плотность, г/кв.м
$thickness = $_POST['thickness'];               // толщина листа, мкн
$price_sheet = $_POST['price_sheet'];           // Стоимость листа
$price_range = $_POST['price_range'];           // ценовой диапазон
$k_up_paper = $_POST['k_up_paper'];             // коэффициент накрутки на бумагу
$one_side = $_POST['one_side'];                 // 1-сторонняя (true), 2-стороняя (false)
$roll = $_POST['roll'];                         // Рулонная (true), листовая (false)
$const = $_POST['const'];                       // Постоянная (1), временная (2), удалённая (0)
$tex_process_var = $_POST['tex_process_var'];   // Техпроцессы использования (бинарный шаблон)
$amount = $_POST['amount'];                     // Текущий остаток листов (для листовых) или м (для рулонных)


// Create
if (isset($_POST['create-submit'])) {
    $sql = ("INSERT INTO `papers`(`name`, `type`, `x_size`, `y_size`, `weight`, `thickness`, `price_sheet`, `price_range`, `k_up_paper`, `one_side`, `roll`, `const`, `tex_process_var`, `amount`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $query = $pdo->prepare($sql);
    $query->execute([$name, $type, $x_size, $y_size, $weight, $thickness, $price_sheet, $price_range, $k_up_paper, $one_side, $roll, $const, $tex_process_var, $amount]);
}

// Read
$sql = $pdo->prepare("SELECT * FROM `papers`");
$sql->execute();
$result = $sql->fetchAll();


// Update
$get_id = $_GET['id'];
if (isset($_POST['edit-submit'])) {
    $sqll = "UPDATE papers SET name=?, type=?, x_size=?, y_size=?, weight=?, thickness=?, price_sheet=?, price_range=?, k_up_paper=?, one_side=?, roll=?, const=?, tex_process_var=?, amount=? WHERE id=?";
    $querys = $pdo->prepare($sqll);
    $querys->execute([$name, $type, $x_size, $y_size, $weight, $thickness, $price_sheet, $price_range, $k_up_paper, $one_side, $roll, $const, $tex_process_var, $amount, $get_id]);
    //    header('Location: '. $_SERVER['HTTP_REFERER']);
    echo '<META HTTP-EQUIV="Refresh" CONTENT="0">';     // обновляем страницу
}


// Delete
if (isset($_POST['delete-submit'])) {
    $sql = "DELETE FROM papers WHERE id=?";
    $query = $pdo->prepare($sql);
    $query->execute([$get_id]);
    //    header('Location: '. $_SERVER['HTTP_REFERER']);
    echo '<META HTTP-EQUIV="Refresh" CONTENT="0">';     // обновляем страницу
}
?>

<!-- ============================================================== -->

<!DOCTYPE html>
<html lang='ru'>

<head>
    <?php include "partials/title-meta.php" ?>
    <?php include "partials/head-css.php" ?>
</head>


<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php  include "partials/topbar.php" ?>
        <?php  include "partials/sidebar.php" ?>


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

                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="header-title">Бумага и материалы</h4>
                                            <p class="card-title-desc">Стоимость и параметры печатных материалов</p>
                                            
                                            <button class="btn btn-primary btn-lg mb-3" data-toggle="modal" data-target="#Modal"><i class="dripicons-plus align-middle"></i></button>
            
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap table-sm table-striped" style="border-collapse: collapse; border-spacing: 0; width: 100%; vertical-align: middle;">
                                                <thead>
                                                <tr>
                                                    <?php
                                                    $sql_col = $pdo->prepare("DESC papers"); // выбираем названия колонок из таблицы
                                                    $sql_col->execute();
                                                    $result_col = $sql_col->fetchAll();
                                                    
                                                    foreach ($result_col as $value_col) { ?>
                                                    <th><?=$value_col[0] ?></th>
                                                    <?php } ?>
                                                    <th>Действие</th>

                                                </tr>
                                                </thead>
                                                <tbody>

                                                <?php foreach ($result as $value) { ?>
                                                <tr>

                                                    <?php foreach ($result_col as $value_col) { ?>
                                                    <td><?=$value[$value_col[0]] ?></td>
                                                    <?php } ?>

                                                    <td>
                                                        <a href="?edit=<?=$value['id'] ?>" class="btn btn-outline-secondary btn-sm mb-0" 
                                                            data-toggle="modal" data-target="#editModal<?=$value['id'] ?>">
                                                            <i class="fas fa-pencil-alt"></i></a> 
                                                        <a href="?delete=<?=$value['id'] ?>" class="btn btn-outline-danger btn-sm mb-0" 
                                                            data-toggle="modal" data-target="#deleteModal<?=$value['id'] ?>">
                                                            <i class="far fa-trash-alt"></i></a>
                                                        <?php require 'partials/modal-papers.php'; ?>
                                                    </td>
                                                </tr> <?php } ?>

                                                </tbody>
                                            </table>
            
                                        </div> <!-- card-body -->
                                    </div> <!-- card -->
                                </div> <!-- col-12 -->

<!-- ============================================================== -->

                        </div> <!-- row -->
                    </div> <!-- page-content-wrapper -->
                </div> <!-- container-fluid -->
            </div> <!-- page-content -->
        </div> <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <?php include "partials/vendor-scripts.php" ?>

</body>

</html>