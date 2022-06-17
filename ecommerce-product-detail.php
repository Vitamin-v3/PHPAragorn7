<?php
require 'partials/db.php';

$name = $_POST['name'];


// Create
if (isset($_POST['create-submit'])) {
    $sql = ("INSERT INTO `tex_process`(`name` ) VALUES(?)");
    $query = $pdo->prepare($sql);
    $query->execute([$name]);
}

// Read
$sql = $pdo->prepare("SELECT * FROM `tex_process`");
$sql->execute();
$result = $sql->fetchAll();

// Update
$get_id = $_GET['id'];
if (isset($_POST['edit-submit'])) {
    $sqll = "UPDATE `tex_process` SET name=? WHERE id=?";
    $querys = $pdo->prepare($sqll);
    $querys->execute([$name, $get_id]);
    //header('Location: '. $_SERVER['HTTP_REFERER']);
    echo '<META HTTP-EQUIV="Refresh" CONTENT="0">';     // обновляем страницу
}

// Delete
if (isset($_POST['delete-submit'])) {
    $sql = "DELETE FROM `tex_process` WHERE id=?";
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


<?php


//$sql = $pdo->prepare("DESC ``tex_process``"); // SHOW COLUMNS FROM users
//$sql->execute();
//$result = $sql->fetchAll();

//foreach ($result as $value) { 
//echo '<pre>';
//print_r( $value[0] );           // выводит массив данных по Заказчику
//echo '</pre>';
//}
//exit();

?>



                <div class="container-fluid">
                    <div class="page-content-wrapper">
                        <div class="row">
<!-- ============================================================== -->
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Техпроцессы</h4>
                                            <p class="card-title-desc">Техпроцессы производства.</p> 
                                            <button class="btn btn-primary btn-lg mb-2" data-toggle="modal" data-target="#Modal"><i class="dripicons-plus"></i></button>          
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap table-sm table-striped" style="border-collapse: collapse; border-spacing: 0; width: 100%; vertical-align: middle;">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>                                                
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <?php foreach ($result as $value) { ?>
                                                <tr>
                                                    <td><?=$value['id'] ?></td>
                                                    <td><?=$value['name'] ?></td>
                                                    <td>
                                                        <a href="?edit=<?=$value['id'] ?>" class="btn btn-primary btn-sm mb-0" 
                                                            data-toggle="modal" data-target="#editModal<?=$value['id'] ?>">
                                                            <i class="dripicons-document-edit"></i></a> 
                                                        <a href="?delete=<?=$value['id'] ?>" class="btn btn-danger btn-sm mb-0" 
                                                            data-toggle="modal" data-target="#deleteModal<?=$value['id'] ?>">
                                                            <i class="dripicons-trash"></i></a>
                                                        <?php require 'partials/modal_tex.php'; ?>
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