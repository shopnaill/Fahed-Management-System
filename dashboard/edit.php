<!-- Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../actions/UpdateProfile.php" enctype="multipart/form-data" method="post">
      <div class="modal-body">
            <div class="card px-5 py-5">  
                <h5 class="mt-3"> Edit Profile</h5>
                    <img src="<?=$_SESSION['photo'] ?  $_SESSION['url'] . $_SESSION['photo'] : 'https://jf-staeulalia.pt/img/other/39/collection-person-icon-14.png' ?>" height="100" width="100" />

                    <div class="form-input">
                        <i class="fa fa-photo"></i>
                         <input type="file" name="photo" class="form-control"> 
                       </div>
                   <div class="form-input"> 
                       <i class="fa fa-user"></i> 
                       <input value="<?=$_SESSION['username']?>" type="text" class="form-control" name="username" placeholder="User name"> 
                   </div>
                   <div class="form-input"> 
                       <i class="fa fa-phone"></i> 
                       <input value="<?=$_SESSION['phone']?>" type="text" class="form-control" name="phone" placeholder="Phone Number"> 
                   </div>
                   <div class="form-input"> 
                       <i class="fa fa-lock"></i> 
                       <input value="" type="password" class="form-control" name="password" placeholder="password"> 
                   </div>
               
               </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>

