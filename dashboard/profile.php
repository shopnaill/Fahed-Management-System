<?php 
include '../connect.php';
$dashboard = true;
include '../check.php';
include '../app/header.php';


?>
<div class="container-fluid page-body-wrapper">
 
    <?php include '../app/sidebar.php'?>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
   
        <div class="row">
            <div class="col-md-4">
                <img style=" max-width: 350px; " src="<?=$_SESSION['photo'] ? $_SESSION['photo'] : 'https://jf-staeulalia.pt/img/other/39/collection-person-icon-14.png' ?>" class="img-fluid" alt="" srcset="">
            </div>
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">User Info</h4>
                    <p class="card-description">
                        <?=$_SESSION['username'] ?>
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <address>
                          <p class="font-weight-bold">Address</p>
                          <p>
                            695 lsom Ave,
                          </p>
                          <p>
                             Suite 00
                          </p>
                          <p>
                            San Francisco, CA 94107
                          </p>
                        </address>
                      </div>
                      <div class="col-md-6">
                        <address class="text-primary">
                          <p class="font-weight-bold">
                            E-mail
                          </p>
                          <p class="mb-2">
                            <?=$_SESSION['email']?>
                          </p>
                          <p class="font-weight-bold">
                            Phone Number
                          </p>
                          <p>
                            <?=$_SESSION['phone']?>
                          </p>
                        </address>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">About</h4>

                    <p class="lead">
                        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                    </p>
                  </div>
                  <div class="btn btn-primary" data-toggle="modal" data-target="#editUser">Edit</div>

                </div>
              </div>
         </div>

      </div>
      <!-- content-wrapper ends -->

    </div>
    <!-- main-panel ends -->
  </div>
 
 
<?php 
include 'edit.php';
include '../app/footer.php';
?>