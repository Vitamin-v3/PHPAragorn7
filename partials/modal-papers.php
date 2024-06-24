<!-- Modal Create-->
<div class="modal fade" tabindex="-1" role="dialog" id="Modal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">

        <div class="modal-header">
            <h5 class="modal-title">Добавить бумагу</h5>
            <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <form action="" method="post">

                <?php
                $sql_col = $pdo->prepare("DESC paper"); // выбираем названия колонок из таблицы
                $sql_col->execute();
                $result_col = $sql_col->fetchAll();
                                            
                foreach ($result_col as $value_col) { ?>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="<?=$value_col[0] ?>" value="" placeholder="<?=$value_col[0] ?>">
                </div>
                <?php } ?>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                    <button type="submit" name="create-submit" class="btn btn-primary">Добавить</button>
                </div>
            </form>
        </div> <!-- modal-body -->

    </div> <!-- modal-content -->
  </div> <!-- modal-dialog -->
</div> <!-- modal fade -->


<!-- Modal Edit-->
<div class="modal fade" id="editModal<?=$value['Id_paper'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Редактировать запись № <?=$value['id'] ?></h5>
          <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form action="?Id_paper=<?=$value['Id_paper'] ?>" method="post">
               <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Name_paper" value="<?=$value['Name_paper'] ?>" placeholder="Name_paper">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Id_paper_type" value="<?=$value['Id_paper_type'] ?>" placeholder="Id_paper_type">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="X_size_paper" value="<?=$value['X_size_paper'] ?>" placeholder="X_size_paper">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Y_size_paper" value="<?=$value['Y_size_paper'] ?>" placeholder="Y_size_paper">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Thickness" value="<?=$value['Thickness'] ?>" placeholder="Thickness">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Id_Price_range" value="<?=$value['Id_Price_range'] ?>" placeholder="Id_Price_range">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Сoefficient_cheating" value="<?=$value['Сoefficient_cheating'] ?>" placeholder="Сoefficient_cheating">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Two_sides" value="<?=$value['Two_sides'] ?>" placeholder="Two_sides">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Sheet_roll" value="<?=$value['Sheet_roll'] ?>" placeholder="Sheet_roll">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Permanent" value="<?=$value['Permanent'] ?>" placeholder="Permanent">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Sheet_roll" value="<?=$value['Sheet_roll'] ?>" placeholder="Sheet_roll">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Number_sheets_stock" value="<?=$value['Number_sheets_stock'] ?>" placeholder="Number_sheets_stock">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Number_remaining_sheets" value="<?=$value['Number_remaining_sheets'] ?>" placeholder="Number_remaining_sheets">
                </div>
              	<div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
              		<button type="submit" name="edit-submit" class="btn btn-primary">Обновить</button>
                </div>
          </form>
        </div> <!-- modal-body -->

    </div> <!-- modal-content -->
  </div> <!-- modal-dialog -->
</div> <!-- modal fade -->


<!-- Modal Delete -->
<div class="modal fade" id="deleteModal<?=$value['Id_paper'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удалить запись № <?=$value['Id_paper'] ?></h5>
        <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-footer">
          <form action="?Id_paper=<?=$value['Id_paper'] ?>" method="post">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
            	<button type="submit" name="delete-submit" class="btn btn-danger">Удалить</button>
    	   </form>
      </div>

    </div> <!-- modal-content -->
  </div> <!-- modal-dialog -->
</div> <!-- modal fade -->