<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" ="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- plugins:css -->
  <link rel="stylesheet" href="<?=$_SESSION['url']?>layout/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?=$_SESSION['url']?>layout/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?=$_SESSION['url']?>layout/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->

  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?=$_SESSION['url']?>layout/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?=$_SESSION['url']?>layout/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="<?=$_SESSION['url']?>layout/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?=$_SESSION['url']?>layout/css/vertical-layout-light/style.css">
  <link rel="stylesheet" href="<?=$_SESSION['url']?>layout/css/style.css">
  <!-- endinject -->
  <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet">
    <title>Regestration System</title>
</head>
<body>

<?php 
if (!isset($hideNavbar)) {
    include 'navbar.php'; 
 }
?>
 
