<?php 
include 'connect.php';
$hideNavbar = false;
$login = true;
include 'check.php';
include 'app/header.php';
if (!isset($_SESSION['url'])) {
  $_SESSION['url'] = 'http://127.0.0.1:8080/FahedClass/Class12/';
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
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form  action="actions/Register.php" enctype="multipart/form-data" method="post" class="pt-3">
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" class="form-control" name="photo" id="photo">
                  </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg"  name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="phone" id="exampleInputEmail1" placeholder="Phone">
                </div>
  
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
 
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"  >SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.php" class="text-primary">Login</a>
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