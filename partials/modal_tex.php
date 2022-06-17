<!-- Modal Create-->
<div class="modal fade" tabindex="-1" role="dialog" id="Modal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">

        <div class="modal-header">
            <h5 class="modal-title">Добавить техпроцесс</h5>
            <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="name" value="" placeholder="name">
                </div>
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
<div class="modal fade" id="editModal<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Редактировать запись № <?=$value['id'] ?></h5>
          <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="?id=<?=$value['id'] ?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="name" value="<?=$value['name'] ?>" placeholder="name">
                </div>
              	<div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
              		<button type="submit" name="edit-submit" class="btn btn-primary">Обновить</button>
                </div>
          </form>
        </div> <!-- modal-body -->
    </div> <!--modal-content -->
  </div> <!-- modal-dialog -->
</div> <!-- modal fade -->
<!-- Modal Delete -->
<div class="modal fade" id="deleteModal<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удалить запись № <?=$value['id'] ?></h5>
        <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
          <form action="?id=<?=$value['id'] ?>" method="post">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
            	<button type="submit" name="delete-submit" class="btn btn-danger">Удалить</button>
    	   </form>
      </div>
    </div> <!-- modal-content -->
  </div> <!-- modal-dialog -->
</div> <!-- modal fade -->