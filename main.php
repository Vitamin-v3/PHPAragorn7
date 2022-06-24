<?php session_start();
require 'partials/db.php';
?>
<?
$Id_Orders=$_POST['Id_Orders'];
$Date_Order = $_POST['Date_Order'];
$Date_Done_Order = $_POST['Date_Done_Order'];
$Id_Order_status = $_POST['Id_Order_status'];
$Id_Client = $_POST['Id_Client'];
$Id_managers = $_POST['Id_managers'];
$Name_Order = $_POST['Name_Order'];
$Comment_order = $_POST['Comment_order'];
$Path_order = $_POST['Path_order'];
$Id_сalculation_paid=$_POST['Id_сalculation_paid'];

// Create
$get_id = $_GET['Id_Orders'];
if (isset($_POST['create-submit'])) {
    $sql = ("INSERT INTO orders_args(`Date_Order`, `Date_Done_Order`, `Id_Order_status`, `Id_Client`, `Id_managers`, `Name_Order`, `Comment_order`, `Path_order`, `Id_сalculation_paid` ) VALUES(?,?,?,?,?,?,?,?,?)");
    $query = $pdo->prepare($sql);
    $query->execute([ $Date_Order,  $Date_Done_Order, $Id_Order_status, $Id_Client, $Id_managers, $Name_Order , $Comment_order ,$Path_order ,$Id_сalculation_paid]);
}

// Read
$sql = $pdo->prepare("SELECT * FROM orders_args");
$sql->execute();
$result = $sql->fetchAll();

// Update
$get_id = $_GET['Id_Orders'];
if (isset($_POST['edit-submit'])) {
    $sqll = "UPDATE orders_args SET  Date_Done_Order =?, Id_Order_status=?, Id_managers=?, Name_Order=?, Comment_order=?, Path_order=? WHERE Id_Orders=?";
    $querys = $pdo->prepare($sqll);
    $querys->execute([$Date_Order, $Date_Done_Order, $Id_Order_status, $Id_Client, $Id_managers, $Name_Order, $Comment_order, $Path_order, $Id_сalculation_paid, $get_id]);
    //header('Location: '. $_SERVER['HTTP_REFERER']);
    echo '<META HTTP-EQUIV="Refresh" CONTENT="0">';     // обновляем страницу
}

// Delete
$get_id = $_GET['Id_Orders'];
if (isset($_POST['delete-submit'])) 
{
    $sql = "DELETE FROM order_args WHERE Id_Orders=?";
    $query = $pdo->prepare($sql);
    $query->execute([$get_id]);
    //header('Location: '. $_SERVER['HTTP_REFERER']);
    echo '<META HTTP-EQUIV="Refresh" CONTENT="0">';     // обновляем страницу
}
?>


<!doctype html>
<html lang="ru">

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
                                        <button class="btn btn-primary btn-lg mb-2" data-toggle="modal" data-target="#Modal"><i class="dripicons-plus"></i></button>   
                                            <h4 class="header-title">Заказы.</h4>
                                            <p class="card-title-desc"> <code>Заказы и их готовность.</code>.
                                            </p>
                                            
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Дата расчета</th>
                                                    <th>Дата "Готово"</th>
                                                    <th>Статус</th>
                                                    <th>Клиент</th>
                                                    <th>Работник</th>
                                                    <th>Наименование</th>
                                                    <th>Комментарий</th>
                                                    <th>Путь</th>
                                                    <th>Id расчета</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
<!--$Id_Orders=$_POST['Id_Orders'];
$Date_Order = $_POST['Date_Order'];
$Date_Done_Order = $_POST['Date_Done_Order'];
$Id_Order_status = $_POST['Id_Order_status'];
$Id_Client = $_POST['Id_Client'];
$Id_managers = $_POST['Id_managers'];
$Name_Order = $_POST['Name_Order'];
$Comment_order = $_POST['Comment_order'];
$Path_order = $_POST['Path_order'];
$Id_сalculation_paid= $_POST['Id_сalculation_paid']; -->

                                                <?php foreach ($result as $value)
                                                 { ?>
                                                <tr>
                                                    <td><?=$value['Id_Orders'] ?></td>
                                                    <td><?=$value['Date_Order'] ?></td>
                                                    <td><?=$value['Date_Done_Order'] ?></td>
                                                    <td><?=$value['Id_Order_status'] ?></td>
                                                    <td><?=$value['Id_Client'] ?></td>
                                                    <td><?=$value['Id_managers'] ?></td>
                                                    <td><?=$value['Name_Order'] ?></td>
                                                    <td><?=$value['Comment_order'] ?></td>
                                                    <td><?=$value['Path_order'] ?></td>
                                                    <td><?=$value['Id_сalculation_paid'] ?></td>
                                                    <td>   
                                                    <a href="?edit=<?=$value['Id_Orders'] ?>" class="btn btn-primary btn-sm mb-0" 
                                                            data-toggle="modal" data-target="#editModal<?=$value['Id_Orders'] ?>">
                                                            <i class="dripicons-document-edit"></i></a> 
                                                    </td>
                                                    <td>
                                                            <a href="?delete=<?=$value['Id_Orders'] ?>" class="btn btn-danger btn-sm mb-0" 
                                                            data-toggle="modal" data-target="#deleteModal<?=$value['Id_Orders'] ?>">
                                                            <i class="dripicons-trash"></i></a>
                                                        <?php require 'partials/modalOrder.php'; ?>
                                                    </td>
                                                </tr> <?php 
                                            } ?>
                                             </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->



                         


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