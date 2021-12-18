<?php
include '../connect.php';
session_start();

if (isset($_POST['username']) &&  isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $photo_path = $_FILES['photo']['tmp_name'];
    $photo_name = $_FILES['photo']['name'];

    $username = htmlspecialchars($username);
    $password = sha1($password);

    $photo = "layout/uploads/" . $photo_name;

    move_uploaded_file($photo_path, "../layout/uploads/$photo_name");

      $user = $con->prepare("INSERT INTO users(username, password , photo) VALUES(?,?,?)");
      $user->execute(array($username,$password,$photo));

     
    if ($user)
    {
        $_SESSION['username'] = $username;
        $_SESSION['photo'] = $photo;
        $_SESSION['email'] = $user['email'];
        $_SESSION['phone'] = $user['phone'];
         header("Location: ../dashboard/profile.php");
    }
    else
    {
         header("Location: ../index.php");
    }

}
