<?php 
include 'connect.php';
$hideNavbar = false;
$login = true;
include 'check.php';
include 'app/header.php';
if (!isset($_SESSION['url'])) {
  $_SESSION['url'] = 'http://127.0.0.1:8080/FahedClass/Class14/';
}
 ?>



<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="https://associationsnow.com/wp-content/uploads/2015/09/Association-Surveys-600x360.jpg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" action="actions/Login.php" enctype="multipart/form-data" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
 
 
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.php" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

 

<?php 
include 'app/footer.php';
?>