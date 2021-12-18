<!-- Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../actions/Edit.php" enctype="multipart/form-data" method="post">
      <div class="modal-body">
           <input type="hidden" value="" class="user_id" name="user_id">
               <div class="photo">
                   <img style=" width: 100px; " id="photo" src="<?=$_SESSION['photo']?>" class="img-fluid" alt="" srcset="">
                   <input type="file" class="form-control" name="photo" id="photo">
               </div>
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="username">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" id="phone">
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>