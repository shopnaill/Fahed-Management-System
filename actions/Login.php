<?php
include '../connect.php';
session_start();

if (isset($_POST['username']) &&  isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
  
    $username = htmlspecialchars($username);
    $password = sha1($password);

 
    $login = $con->prepare("SELECT * FROM users WHERE username = ? AND `password` = ?");
    $login->execute(array($username, $password));
    $check = $login->rowCount();
    $user = $login->fetch();
     
      if ($check > 0)
    {
      $_SESSION['username'] = $user['username'];
      $_SESSION['photo'] = $user['photo'];
      $_SESSION['email'] = $user['email'];
      $_SESSION['phone'] = $user['phone'];
      $_SESSION['id'] = $user['id'];
      if ($user['role'] == 1)
        {
          $_SESSION['role'] = 1;
          header("Location: ../dashboard/dashboard.php");
        }elseif ($user['role'] == null)
        {
          header("Location: ../demo.php");
        }
    }
    else
    {
         header("Location: ../login.php");
    }

}
