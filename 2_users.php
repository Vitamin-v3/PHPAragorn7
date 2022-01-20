<?php
require 'partials/db.php';

$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];
$k_press = $_POST['k_press'];
$k_papers = $_POST['k_papers'];
$limit_oplata = $_POST['limit_oplata'];

// Create
if (isset($_POST['create-submit'])) {
    $sql = ("INSERT INTO `clients_table`(`name`, `login`, `password`, `k_press`, `k_papers`, `limit_oplata`) VALUES(?,?,?,?,?,?)");
    $query = $pdo->prepare($sql);
    $query->execute([$name, $login, $password, $k_press, $k_papers, $limit_oplata]);
}

// Read
$sql = $pdo->prepare("SELECT * FROM `clients_table`");
$sql->execute();
$result = $sql->fetchAll();

// Update
$get_id = $_GET['id'];
if (isset($_POST['edit-submit'])) {
    $sqll = "UPDATE clients_table SET name=?, login=?, password=?, k_press=?, k_papers=?, limit_oplata=? WHERE id=?";
    $querys = $pdo->prepare($sqll);
    $querys->execute([$name, $login, $password, $k_press, $k_papers, $limit_oplata, $get_id]);
    //header('Location: '. $_SERVER['HTTP_REFERER']);
    echo '<META HTTP-EQUIV="Refresh" CONTENT="0">';     // обновляем страницу
}

// Delete
if (isset($_POST['delete-submit'])) {
    $sql = "DELETE FROM clients_table WHERE id=?";
    $query = $pdo->prepare($sql);
    $query->execute([$get_id]);
    //header('Location: '. $_SERVER['HTTP_REFERER']);
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

                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="header-title">Пользователи</h4>
                                            <p class="card-title-desc">Учетные записи и параметры пользователей системы.</p>
                                            
                                            <button class="btn btn-primary btn-lg mb-3" data-toggle="modal" data-target="#Modal"><i class="dripicons-plus align-middle"></i></button>
            
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap table-sm table-striped" style="border-collapse: collapse; border-spacing: 0; width: 100%; vertical-align: middle;">
                                                <thead>
                                                <tr>
                                                    <?php
                                                    $sql_col = $pdo->prepare("DESC clients_table"); // выбираем названия колонок из таблицы
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
                                                        <?php require 'partials/modal.php'; ?>
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