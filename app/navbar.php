<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="https://associationsnow.com/wp-content/uploads/2015/09/Association-Surveys-600x360.jpg" class="mr-2" alt="logo"></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="https://associationsnow.com/wp-content/uploads/2015/09/Association-Surveys-600x360.jpg" alt="logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">

          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="<?= $_SESSION['photo'] ? $_SESSION['url'] . $_SESSION['photo'] : 'https://jf-staeulalia.pt/img/other/39/collection-person-icon-14.png' ?>" alt="profile">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              
            <?php if($_SESSION['role'] == 1)  { ?>
              <a href="<?=$_SESSION['url']?>dashboard/dashboard.php" class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Dashboard
              </a>
              <?php } ?>
             <a href="profile.php" class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a href="logout.php" class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
 
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>