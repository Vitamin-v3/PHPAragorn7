<?php
function f_view_table ( $pdo, $db, $title, $title_comment)
{
        // Create
        if (isset($_POST['create-submit'])) {
            $sql = ("INSERT INTO $db (`name`, `type`, `x_size`, `y_size`) VALUES (?,?,?,?)");
            $query = $pdo->prepare($sql);
            $query->execute([$name, $type, $x_size, $y_size]);
        }

        // Read
        $sql = $pdo->prepare("SELECT * FROM $db");
        $sql->execute();
        $result = $sql->fetchAll();

        // Update
        $get_id = $_GET['id'];
        if (isset($_POST['edit-submit'])) {
            $sqll = "UPDATE $db SET name=?, type=?, x_size=?, y_size=? WHERE id=?";
            $querys = $pdo->prepare($sqll);
            $querys->execute([$name, $type, $x_size, $y_size, $get_id]);
            //    header('Location: '. $_SERVER['HTTP_REFERER']);
            //echo '<META HTTP-EQUIV="Refresh" CONTENT="0">';     // обновляем страницу
        }

        // Delete
        if (isset($_POST['delete-submit'])) {
            $sql = "DELETE FROM $db WHERE id=?";
            $query = $pdo->prepare($sql);
            $query->execute([$get_id]);
            //    header('Location: '. $_SERVER['HTTP_REFERER']);
            //echo '<META HTTP-EQUIV="Refresh" CONTENT="0">';     // обновляем страницу
        }
?>


        <div class="main-content">
        <div class="page-content">
            <?php include_once "partials/page-title.php" ?>
            <!-- @@include("partials/page-title.html", {"pagetitle": "Morvin", "subtitle":"Dashboard" ,"title":"Dashboard"}) -->

            <div class="container-fluid">
            <div class="page-content-wrapper">
            <div class="row">
<!-- ============================================================== -->
                    <div class="col-12">
                    <div class="card">
                    <div class="card-body">
            
                                <h4 class="header-title"><?=$title ?></h4>
                                <p class="card-title-desc"><?=$title_comment ?></p>
                                            
                                <button class="btn btn-primary btn-lg mb-3" data-toggle="modal" data-target="#Modal"><i class="dripicons-plus align-middle"></i></button>
            
                                <table id="datatable" class="table table-bordered dt-responsive nowrap table-sm table-striped" style="border-collapse: collapse; border-spacing: 0; width: 100%; vertical-align: middle;">

                                    <style>
                                        .col1 { width: 70px;  text-align: center;} /* Ширина ячейки */
                                    </style>

                                    <thead>
                                    <tr>
                                        <?php
                                        $sql_col = $pdo->prepare("DESC $db"); // выбираем названия колонок из таблицы
                                        $sql_col->execute();
                                        $result_col = $sql_col->fetchAll();
                                
                                        foreach ($result_col as $value_col) { ?>
                                        <th><?=$value_col[0] ?></th>
                                        <?php } ?>
                                        <th  class="col1">Действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($result as $value) { ?>
                                        <tr>
                                            <?php foreach ($result_col as $value_col) { ?>
                                            <td><?=$value[$value_col[0]] ?></td>
                                            <?php } ?>

                                            <td class="col1">
                                                <a href="?edit=<?=$value['id'] ?>" class="btn btn-outline-secondary btn-sm mb-0" 
                                                    data-toggle="modal" data-target="#editModal<?=$value['id'] ?>">
                                                    <i class="fas fa-pencil-alt"></i></a> 
                                                <a href="?delete=<?=$value['id'] ?>" class="btn btn-outline-danger btn-sm mb-0" 
                                                    data-toggle="modal" data-target="#deleteModal<?=$value['id'] ?>">
                                                    <i class="far fa-trash-alt"></i></a>
                                                <?php require_once 'partials/modal-zakaz0.php'; ?>
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




<?php
}
?>