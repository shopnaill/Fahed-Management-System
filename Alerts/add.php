<!-- Modal -->
<div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../actions/Add.php" enctype="multipart/form-data" method="post">

      <div class="modal-body">
               <div class="photo">
                    <input type="file" class="form-control" name="photo" id="photo">
               </div>
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" >
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" >
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>

    </div>
  </div>
</div>