<?php 
include '../connect.php';
$dashboard = true;
include '../check.php';
include '../app/header.php';

$users = $con->prepare("SELECT * FROM users");
$users->execute();
$users = $users->fetchAll();


 ?>

 <div class="container-fluid page-body-wrapper">
 
  <?php include '../app/sidebar.php'?>
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <h1 class="text-center">Manage Users</h1>

      <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Username</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Role</th>
                  <th>Action</th>
                </tr>
              </thead>
            
            
              <?php foreach ($users as $user) { ?>
              <tbody>
                <tr>
                  <th scope="row">
                     <img class="img-fluid" style="width:70px;" src="<?=$user['photo'] ? $_SESSION['url'] . $user['photo'] : 'https://jf-staeulalia.pt/img/other/39/collection-person-icon-14.png' ?>" alt="" srcset="">
                  </th>
                  <td><?=$user['username']?></td>
                  <td><?=$user['email']?></td>
                  <td><?=$user['phone']?></td>
                  <td><?=$user['role'] ? '<span class="badge badge-warning">Admin</span>' : '<span class="badge badge-success">User</span>'?></td>
                  <td class="d-flex">
                   <?php
                   if ($user['role'] == 1)
                    {
                      ?>
                      <form action="../actions/UserRole.php" method="post">
                        <input type="hidden" name="user_id" value="<?=$user['id']?>">
                        <input type="hidden" name="role" value="">
                        <button type="submit" class="btn btn-success">Remove Admin</button>
                      </form>
                       <?php
                    }else
                    {
                      ?>
                      <form  action="../actions/UserRole.php" method="post">
                        <input type="hidden" name="user_id" value="<?=$user['id']?>">
                        <input type="hidden" name="role" value="1">
                        <button type="submit" class="btn btn-warning">Make Admin</button>
                      </form>
                      <?php
                    }
                   ?>
                  <div data-bs-toggle="modal" user_id="<?=$user['id']?>" photo="<?=$user['photo']?>" username="<?=$user['username']?>" email="<?=$user['email']?>" phone="<?=$user['phone']?>" data-bs-target="#editUser" class="btn btn-primary edit-btn">Edit</div>
                  <div type="button" data-bs-toggle="modal" user_id="<?=$user['id']?>" data-bs-target="#deleteUser" class="btn btn-danger delete-btn">Delete</div>
                  </td>
                </tr>
              </tbody>
            <?php } ?>
            
            </table>
          </div>
      </div>
   
    </div>
    <!-- content-wrapper ends -->

  </div>
  <!-- main-panel ends -->
</div>


 

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
 <script>
    $(document).ready(function(){
        $(document).on('click', '.delete-btn' , function(){
              $('.user_id').val($(this).attr('user_id'));
         });

         $(document).on('click', '.edit-btn' , function(){
          $('.user_id').val($(this).attr('user_id'));
          $('#username').val($(this).attr('username'));
          $('#email').val($(this).attr('email'));
          $('#phone').val($(this).attr('phone'));
          $('#photo').attr('src' , $(this).attr('photo'));
         });

    });
</script>

<?php 
include '../Alerts/delete.php';
include '../Alerts/edit.php';
include '../Alerts/add.php';
include '../app/footer.php';
?>
