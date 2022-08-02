<?php
require 'partials/db.php';

$id = $_POST['Id_manager'];
$name = $_POST['Name_manager'];
$login = $_POST['Login_manager'];
$password = $_POST['Password_manager'];
$mail = $_POST['Mail_manager'];
$phone = $_POST['Phone_manager'];
$id_access = $_POST['id_access'];



// Create
if (isset($_POST['create-submit'])) {
    $sql = ("INSERT INTO managers(`Id_manager`, `Name_manager`, `Login_manager`, `Password_manager`,`Mail_manager`,`Phone_manager`,`id_access`) VALUES(?,?,?,?,?,?,?)");
    $query = $pdo->prepare($sql);
    $query->execute([$id, $name, $login,$password,$mail,$phone,$id_access]);
}

// Read
$sql = $pdo->prepare("SELECT * FROM managers");
$sql->execute();
$result = $sql->fetchAll();

// Update
$get_id = $_GET['id'];
if (isset($_POST['edit-submit'])) {
    $sqll = "UPDATE managers SET Name_manager=?, access_num=? , Login_manager=? , Password_manager=? , Mail_manager=? ,Phone_manager=? , id_access=?  WHERE Id_managers=?";
    $querys = $pdo->prepare($sqll);
    $querys->execute([$name, $access_num,$get_id]);
    //header('Location: '. $_SERVER['HTTP_REFERER']);
    echo '<META HTTP-EQUIV="Refresh" CONTENT="0">';     // обновляем страницу
}

// Delete
if (isset($_POST['delete-submit'])) {
    $sql = "DELETE FROM managers WHERE id=?";
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
                <?php include "partials/page-title_copy.php" ?>
                <!-- @@include("partials/page-title.html", {"pagetitle": "Morvin", "subtitle":"Dashboard" ,"title":"Dashboard"}) -->
<?php
//$sql = $pdo->prepare("DESC `access`"); // SHOW COLUMNS FROM users
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
                                            <h4 class="header-title">Работники</h4>
                                            <p class="card-title-desc">Информация о работниках.</p> 
                                            <button class="btn btn-primary btn-lg mb-2" data-toggle="modal" data-target="#Modal"><i class="dripicons-plus"></i></button>          
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap table-sm table-striped" style="border-collapse: collapse; border-spacing: 0; width: 100%; vertical-align: middle;">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Login</th>
                                                    <th>Mail</th>
                                                    <th>Phone</th>                                            
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach ($result as $value) { ?>
                                                <tr>                                        
                                                    <td><?=$value['Id_managers'] ?></td>
                                                    <td><?=$value['Name_manager'] ?></td>
                                                    <td><?=$value['Login_manager'] ?></td>
                                                    <td><?=$value['Mail_manager'] ?></td>
                                                    <td><?=$value['Phone_manager'] ?></td>                                          
                                                    <td>
                                                        <a href="?edit=<?=$value['id'] ?>" class="btn btn-primary btn-sm mb-0" 
                                                            data-toggle="modal" data-target="#editModal<?=$value['id'] ?>">
                                                            <i class="dripicons-document-edit"></i></a> 
                                                        <a href="?delete=<?=$value['id'] ?>" class="btn btn-danger btn-sm mb-0" 
                                                            data-toggle="modal" data-target="#deleteModal<?=$value['id'] ?>">
                                                            <i class="dripicons-trash"></i></a>
                                                        <?php require 'partials/modal_people.php'; ?>
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
