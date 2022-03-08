<?php
$current='message';
include 'design/header.php';
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Message</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

              


    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Date</th>
                     <th>View</th>
                    <th >Read</th>
                    <th >Delete</th>
                  


                </tr>
            </thead>
            
            <tbody>
                <?php
           $query = $conn -> query("SELECT * FROM messages");

           foreach($query as $message) {
         
         
                ?>
               
                <tr>
                    <td><?= $message['id'] ?></td>
                    <td><?= $message['name'] ?></td>
                    <td><?= $message['phone'] ?></td>
                    <td><?= $message['email'] ?></td>
                    <td><?= $message['date'] ?></td>
                    <td class="view"><?= $message ['view'] == 0 ? 'unread' : 'read' ?></td>
                   <td> 	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary modalbtn" data-id="<?= $message['id'] ?>" data-toggle="modal" data-target="#e<?= $message['id'] ?>">
  View message
</button>

<!-- Modal -->
<div class="modal fade" id="e<?= $message['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= $message['message'] ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</td>
                        <td ><a  class="btn btn-danger" href="function/deleteMessage.php?id=<?= $message['id']  ?>">
                           Delete
                        </a></td>                   
                   
                    

                </tr>
                <?php
            }
                ?>
            </tbody>
        </table>

    </div>



</div>
<!-- End of Main Content -->

            </div>
            <!-- End of Main Content -->

            <?php
include 'design/footer.php';
            ?>