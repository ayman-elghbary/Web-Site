 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add User
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php
if($_SESSION['priv']<300){
    echo "<p style='font-size:50px'>You do not have a permit To add users</p> ";
   
}

?>

						
<form  class="formadmin"   >
<label>Name</label>
<input type="text" name="name" class="form-control">
</br>
<label>Email</label>
<input type="Email" name="email" class="form-control">
</br>
<label>password</label>
<input type="password" name="password" class="form-control">
</br>
<select name="pr" class="form-control">
    <option style="display:none">choose Pr</option>
    <option>300</option>
    <option>200</option>
</select>
</br>
<input value="go" type="submit" class="form-control btn btn-primary">

</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

 <!-- end model -->
    <div class="table-responsive">
        <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0" >
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Pr</th>
                    <th >Delete</th>


                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Pr</th>
                     <th >Delete</th>

                </tr>
            </tfoot>
            <tbody>
                <?php
            $sql=$conn->query("SELECT * FROM users");
            while($row=$sql->fetch_assoc()){
                ?>
                <tr class="tr-<?= $row['id'] ?>">
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['pr'] ?></td>
                    <td >
                        <!-- Button trigger modal -->
  <button type="button" class="btn btn-danger modaldeleteadmin" data-id="<?= $row['id'] ?>" data-toggle="modal" data-target="#bottondeleteadmin">
      Delete</button>

                </td>

                </tr>
                <?php
            }
                ?>
                <!-- Modal -->
<div class="modal fade" id="bottondeleteadmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are You Sure </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger confirmdelet" data-dismiss="modal" >Confirm</button>

      </div>
    </div>
  </div>
</div>
            </tbody>
        </table>

    </div>



</div>
<!-- End of Main Content -->
