<?php
require 'partials/db.php';

$id=$_POST['Id_Client'];
$name = $_POST['Name_client'];
$login = $_POST['Login_client'];
$password = $_POST['Password_client'];
$mail = $_POST['Mail_client'];
$phone = $_POST['Phone_client'];
$contactperson = $_POST['ContactPerson'];
$phonecontactperson = $_POST['Phone_ContactPerson'];
$contractor= $_POST['Contractor'];
$id_discount= $_POST['Id_Discount'];

// Create
$get_id = $_GET['Id_Client'];
if (isset($_POST['create-submit'])) {
    $sql = ("INSERT INTO client(`Name_client`, `Login_client`, `Password_client`, `Mail_client`, `Phone_client`, `ContactPerson`, `Phone_ContactPerson`, `Contractor`, `Id_Discount`) VALUES(?,?,?,?,?,?,?,?,?)");
    $query = $pdo->prepare($sql);
    $query->execute([$name, $login, $password, $mail, $phone, $contactperson, $phonecontactperson, $contractor, $id_discount]);
}

// Read
$sql = $pdo->prepare("SELECT * FROM client");
$sql->execute();
$result = $sql->fetchAll();

// Update
$get_id = $_GET['Id_Client'];
if (isset($_POST['edit-submit'])) {
    $sqll = "UPDATE client SET Name_client=? , Login_client=? , Password_client=? , Mail_client=? , Phone_client=? , ContactPerson=?, Phone_ContactPerson=?, Contractor=? WHERE Id_Client=?";
    $querys = $pdo->prepare($sqll);
    $querys->execute([$name, $login, $password, $mail, $phone, $contactperson, $phonecontactperson, $contractor, $get_id]);
    //header('Location: '. $_SERVER['HTTP_REFERER']);
    echo '<META HTTP-EQUIV="Refresh" CONTENT="0">';     // обновляем страницу
}

// Delete
$get_id = $_GET['Id_Client'];
if (isset($_POST['delete-submit']))
 {
    $sql = "DELETE FROM client WHERE Id_Client=?";
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


//$sql = $pdo->prepare("DESC `clients_table`"); // SHOW COLUMNS FROM users
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
                                            <h4 class="header-title">Пользователи</h4>
                                            <p class="card-title-desc">Учетные записи и параметры пользователей системы.</p> 
                                            <button class="btn btn-primary btn-lg mb-2" data-toggle="modal" data-target="#Modal"><i class="dripicons-plus"></i></button>          
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap table-sm table-striped" style="border-collapse: collapse; border-spacing: 0; width: 100%; vertical-align: middle;">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Login</th>
                                                    <th>Password</th>
                                                    <th>Mail</th>
                                                    <th>Phone_client</th>
                                                    <th>ContactPerson</th>
                                                    <th>Подрядчик</th>
                                                    <th>Действие</th>
                                                </tr>
                                                </thead>
                                                <tbody>

<!--
//$name = $_POST['Name_client'];
//$login = $_POST['Login_client'];
//$password = $_POST['Password_client'];
//$mail = $_POST['Mail_client'];
//$phone = $_POST['Phone_client'];
//$contactperson = $_POST['ContactPerson'];
//$phonecontactperson = $_POST['Phone_ContactPerson'];
//$contractor= $_POST['Contractor']; 
-->
                                                <?php foreach ($result as $value)
                                                 { ?>
                                                <tr>
                                                    <td><?=$value['Id_Client'] ?></td>
                                                    <td><?=$value['Name_client'] ?></td>
                                                    <td><?=$value['Login_client'] ?></td>
                                                    <td><?=$value['Password_client'] ?></td>
                                                    <td><?=$value['Mail_client'] ?></td>
                                                    <td><?=$value['Phone_client'] ?></td>
                                                    <td><?=$value['ContactPerson'] ?></td>
                                                    <td><?=$value['Contractor'] ?></td>
                                                    <td>
                                                        <a href="?edit=<?=$value['Id_Client'] ?>" class="btn btn-primary btn-sm mb-0" 
                                                            data-toggle="modal" data-target="#editModal<?=$value['Id_Client'] ?>">
                                                            <i class="dripicons-document-edit"></i></a> 
                                                        <a href="?delete=<?=$value['Id_Client'] ?>" class="btn btn-danger btn-sm mb-0" 
                                                            data-toggle="modal" data-target="#deleteModal<?=$value['Id_Client'] ?>">
                                                            <i class="dripicons-trash"></i></a>
                                                        <?php require 'partials/modal.php'; ?>
                                                    </td>
                                                </tr> <?php 
                                            } ?>
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