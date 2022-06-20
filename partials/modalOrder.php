<!-- Modal Create-->

<div class="modal fade" tabindex="-1" role="dialog" id="Modal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">

        <div class="modal-header">
            <h5 class="modal-title">Добавить пользователя</h5>
            <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
                                                                                                              <!--//$login = $_POST['Login_client'];
                                                                                                              //$password = $_POST['Password_client'];
                                                                                                              //$mail = $_POST['Mail_client'];
                                                                                                              //$phone = $_POST['Phone_client'];
                                                                                                              //$contactperson = $_POST['ContactPerson'];
                                                                                                              //$phonecontactperson = $_POST['Phone_ContactPerson'];
                                                                                                              //$contractor= $_POST['Contractor']; -->
        <div class="modal-body">
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Date_order" value="" placeholder="Date_order">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Date_Done_Order" value="" placeholder="Date_Done_Order">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Id_Order_status" value="" placeholder="Id_Order_status">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Id_Client" value="" placeholder="Id_Client">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Id_managers" value="" placeholder="Id_managers">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Name_Order" value="" placeholder="Name_Order">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Comment_order" value="" placeholder="Comment_order">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Path_order" value="" placeholder="Path_order">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Id_сalculation_paid" value="" placeholder="Id_сalculation_paid">
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
<div class="modal fade" id="editModal<?=$value['Id_Orders'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Редактировать запись № <?=$value['Id_Orders'] ?></h5>
          <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="?Id_Orders=<?=$value['Id_Orders'] ?>" method="post">
               <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Id_Orders" value="<?=$value['Id_Orders'] ?>" placeholder="Id_Orders">
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Date_Done_Order" value="<?=$value['Date_Done_Order'] ?>" placeholder="Date_Done_Order">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Id_Order_status" value="<?=$value['Id_Order_status'] ?>" placeholder="Id_Order_status">
                </div>
              
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Id_managers" value="<?=$value['Id_managers'] ?>" placeholder="Id_managers">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Name_Order" value="<?=$value['Name_Order'] ?>" placeholder="Name_Order">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Comment_order" value="<?=$value['Comment_order'] ?>" placeholder="Comment_order">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Path_order" value="<?=$value['Path_order'] ?>" placeholder="Path_order">
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
<div class="modal fade" id="deleteModal<?=$value['Id_Orders'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удалить запись № <?=$value['Id_Orders'] ?></h5>
        <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
          <form action="?Id_Orders=<?=$value['Id_Orders'] ?>" method="post">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
            	<button type="submit" name="delete-submit" class="btn btn-danger">Удалить</button>
    	   </form>
      </div>
    </div> <!-- modal-content -->
  </div> <!-- modal-dialog -->
</div> <!-- modal fade -->