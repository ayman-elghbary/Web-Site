
              
<a href="?do=add">

<button 
class="btn btn-success">AddNew</button>
</a>
<?php print_r($_SESSION)   ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                   
                    <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <!-- <th>الاسم</th>
                                            <th>Name</th> -->
                                            <th>Cover</th>
                                            <th>Edite</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <!-- <th>الاسم</th>
                                            <th>Name</th> -->
                                            <th>Cover</th>
                                            <th>Edite</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                $query = $conn -> query("SELECT * FROM slider");
                                foreach($query as $product) {
                                    ?> 
                                        <tr>
                                        <!-- <th><?= $product['name_ar'] ?></th>
                                            <th><?= $product['name_en'] ?></th> -->
                                            <th><?php $imgname=$product['cover'];
                                            $arr=explode(",","$imgname");
                                            ?>
                                              <img style='width:100px;height:auto' src='incloude/imageslider/<?= $arr[0] ;?>'>
                                              <?php
                                            ?></th>
                                            <th ><a  class="btn btn-info" href="?do=edite&id=<?=  $product['id']  ?>">
                           Edit
                        </a></th>
                        <th > 
                        
                        <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger modaldeleteslider " data-id="<?= $product['id'] ?>" data-toggle="modal" data-target="#buttondeleteslider">
                  Delete
                </button>

                </th> 
                                        </tr>
                                        <?php
                                         }
                                        ?>
                                        <!-- Modal -->
                <div class="modal fade" id="buttondeleteslider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Are You Sure
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger confirmdeleteslider" data-dismiss="modal">Confirm</button>
                      </div>
                    </div>
                  </div>
                </div>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                   

                </div>
                <!-- /.container-fluid -->

            

            <!-- Footer -->
            