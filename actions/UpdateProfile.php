<?php
session_start();
include '../connect.php';

if (isset($_POST['username']) &&  isset($_POST['password'])) {

    
    $userData = $con->prepare('SELECT * FROM users WHERE id = ?');
    $userData->execute(array($_SESSION['id']));
    $userData = $userData->fetch();

    $username = $_POST['username'];
    $phone = $_POST['phone'];

 
    if (!empty($_POST['password'])) {
        $password = sha1($_POST['password']);
    }
     else
      {
        $password =  $userData['password'];
      }

      if (!empty($_FILES['photo']['tmp_name']))
      {
        $photo_path = $_FILES['photo']['tmp_name'];
        $photo_name = $_FILES['photo']['name'];
        $photo = "layout/uploads/" . $photo_name;

        move_uploaded_file($photo_path, "../layout/uploads/$photo_name");

      }else
      {
          $photo = $userData['photo'];
      }
     

     $username = htmlspecialchars($username);
 


      $user = $con->prepare("UPDATE `users` SET `username`=? , phone =? , password`=? `photo`=? WHERE id = ?");
      $user->execute(array($username, $phone ,$password,$photo,$_SESSION['id']));

     
    if ($user)
    {
        $_SESSION['username'] = $username;
        $_SESSION['photo'] = $photo;
        $_SESSION['phone'] = $phone;

         header("Location: ../dashboard/profile.php");
    }
    else
    {
         header("Location: ../index.php");
    }

}