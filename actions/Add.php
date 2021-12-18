<?php
include '../connect.php';
session_start();

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['phone'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];    
    $phone = $_POST['phone'];
    $password = sha1($_POST['password']);

    if ($_FILES['photo']['size'] !=0)
    {
        $photo_path = $_FILES['photo']['tmp_name'];
        $photo_name = $_FILES['photo']['name'];

        $photo = "layout/uploads/" . $photo_name;

        move_uploaded_file($photo_path, "../layout/uploads/$photo_name");
    }
    else
    {
        $photo = NULL;
    }

    $user = $con->prepare("INSERT INTO users(username, email , password , phone ,photo) VALUES(?,?,?,?,?)");
    $user->execute(array($username,$email,$password,$phone,$photo));
    
    header("Location: ../dashboard/users.php");

}else
{
    echo "Error";
}