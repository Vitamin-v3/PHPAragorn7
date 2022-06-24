<?php
require 'partials/db.php';
$id=$_POST['Id_paper'];
$name = $_POST['Name_paper'];                         //наименование бумаги
$type = $_POST['Id_paper_type'];                         //тип бумаги
$x_size = $_POST['X_size_paper'];                     // ширина листа, мм
$y_size = $_POST['Y_size_paper'];                     // высота листа, мм
$density = $_POST['Paper_density'];                     // плотность, г/кв.м
$thickness = $_POST['Thickness'];               // толщина листа, мкн
$price_sheet = $_POST['Id_Price_range'];         // ценовой диапазон
$coeff = $_POST['Сoefficient_cheating'];    // коэффициент накрутки на бумагу
$two_sides = $_POST['Two_sides'];                 // 1-сторонняя (true), 2-стороняя (false)
$roll = $_POST['Sheet_roll'];                         // Рулонная (true), листовая (false)
$permanent = $_POST['Permanent'];                       // Постоянная (1), временная (2), удалённая (0)
$Number_sheets_stock = $_POST['Number_sheets_stock'];   // Техпроцессы использования (бинарный шаблон)
$remaining_sheets = $_POST['Number_remaining_sheets'];                     // Текущий остаток листов (для листовых) или м (для рулонных)


// Create
if (isset($_POST['create-submit'])) {
    $sql = ("INSERT INTO `paper`(`Name_paper`, `Id_paper_type`, `X_size_paper`, `Y_size_paper`, `Paper_density`, `Thickness`, `Id_Price_range`, `Сoefficient_cheating`, `Two_sides`, `Sheet_roll`, `Permanent`, `Number_sheets_stock`, `Number_remaining_sheets`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $query = $pdo->prepare($sql);
    $query->execute([$name, $type, $x_size, $y_size, $density, $thickness, $price_sheet, $price_range, $coeff, $two_sides, $roll, $permanent, $Number_sheets_stock, $remaining_sheets]);
}

// Read
$sql = $pdo->prepare("SELECT * FROM `paper`");
$sql->execute();
$result = $sql->fetchAll();


// Update
$get_id = $_GET['Id_paper'];
if (isset($_POST['edit-submit'])) {
    $sqll = "UPDATE paper SET name=?, type=?, x_size=?, y_size=?, density=?, thickness=?, price_sheet=?, price_range=?, coeff=?, two_sides=?, roll=?, permanent=?, Number_sheets_stock=?, remaining_sheets=? WHERE id=?";
    $querys = $pdo->prepare($sqll);
    $querys->execute([$name, $type, $x_size, $y_size, $density, $thickness, $price_sheet, $price_range, $coeff, $two_sides, $roll, $permanent, $Number_sheets_stock, $remaining_sheets, $get_id]);
    //    header('Location: '. $_SERVER['HTTP_REFERER']);
    echo '<META HTTP-EQUIV="Refresh" CONTENT="0">';     // обновляем страницу
}


// Delete
if (isset($_POST['delete-submit'])) {
    $sql = "DELETE FROM paper WHERE id=?";
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
            
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap table-sm table-striped" style="border-collapse: collapse; border-spacing: 0; width: 70%; vertical-align: middle;">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Название</th>
                                                    <th>Тип бумаги</th>
                                                    <th>Х</th>
                                                    <th>У</th>
                                                    <th>Плотность</th>
                                                    <th>Толщина</th>
                                                    <th>Номер ценового диапазона</th>
                                                    <th>Коэффициент накрутки на бумагу</th>
                                                    <th>2-х сторонняя</th>
                                                    <th>Рулонная</th>
                                                    <th>Постоянная</th>
                                                    <th>Кол-во листов на складе</th>
                                                    <th>Минимальный остаток</th>
                                                </tr>
                                                </thead>
                                                <tbody>
<!--$name = $_POST['Name_paper'];                         //наименование бумаги
$type = $_POST['Id_paper_type'];                         //тип бумаги
$x_size = $_POST['X_size_paper'];                     // ширина листа, мм
$y_size = $_POST['Y_size_paper'];                     // высота листа, мм
$density = $_POST['Paper_density'];                     // плотность, г/кв.м
$thickness = $_POST['Thickness'];               // толщина листа, мкн
$price_sheet = $_POST['Id_Price_range'];         // ценовой диапазон
$coeff = $_POST['Сoefficient_cheating'];    // коэффициент накрутки на бумагу
$two_sides = $_POST['Two_sides'];                 // 1-сторонняя (true), 2-стороняя (false)
$roll = $_POST['Sheet_roll'];                         // Рулонная (true), листовая (false)
$permanent = $_POST['Permanent'];                       // Постоянная (1), временная (2), удалённая (0)
$Number_sheets_stock = $_POST['Number_sheets_stock'];   // Техпроцессы использования (бинарный шаблон)
$remaining_sheets = $_POST['Number_remaining_sheets']; -->
                                                <?php foreach ($result as $value)
                                                 { ?>
                                                <tr>                                               
                                                    <td><?=$value['Id_paper'] ?></td>
                                                    <td><?=$value['Name_paper'] ?></td>
                                                    <td><?=$value['Id_paper_type'] ?></td>
                                                    <td><?=$value['X_size_paper'] ?></td>
                                                    <td><?=$value['Y_size_paper'] ?></td>
                                                    <td><?=$value['Thickness'] ?></td>
                                                    <td><?=$value['Id_Price_range'] ?></td>
                                                    <td><?=$value['Сoefficient_cheating'] ?></td>
                                                    <td><?=$value['Two_sides'] ?></td>
                                                    <td><?=$value['Sheet_roll'] ?></td>
                                                    <td><?=$value['Permanent'] ?></td>
                                                    <td><?=$value['Sheet_roll'] ?></td>
                                                    <td><?=$value['Number_sheets_stock'] ?></td>
                                                    <td><?=$value['Number_remaining_sheets'] ?></td>
                                                
                                                    <td>
                                                        <a href="?edit=<?=$value['Id_paper'] ?>" class="btn btn-outline-secondary btn-sm mb-0" 
                                                            data-toggle="modal" data-target="#editModal<?=$value['Id_paper'] ?>">
                                                            <i class="fas fa-pencil-alt"></i></a> 
                                                    </td>
                                                    <td>  <a href="?delete=<?=$value['Id_paper'] ?>" class="btn btn-outline-danger btn-sm mb-0" 
                                                            data-toggle="modal" data-target="#deleteModal<?=$value['Id_paper'] ?>">
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