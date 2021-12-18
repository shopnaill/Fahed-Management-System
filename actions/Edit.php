<?php
session_start();
include '../connect.php';

if (isset($_POST['username']) &&  isset($_POST['user_id'])) {

    $user_id = $_POST['user_id'];
    $userData = $con->prepare('SELECT * FROM users WHERE id = ?');
    $userData->execute(array($user_id));
    $userData = $userData->fetch();

    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
 

      if ( $_FILES['photo']['size'] !=0)
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
 


      $user = $con->prepare("UPDATE `users` SET `username`=? , email =? , phone = ? , `photo`=? WHERE id = ?");
      $user->execute(array($username,$email,$phone,$photo,$user_id));

     
    if ($user)
    {
        $_SESSION['username'] = $username;
        $_SESSION['photo'] = $photo;

         header("Location: ../dashboard/users.php");
    }
    else
    {
         header("Location: ../index.php");
    }

}