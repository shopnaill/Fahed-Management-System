<?php
include '../connect.php';
session_start();

if (isset($_POST['user_id']))
{
    
   
    $user_id = intval($_POST['user_id']);
    
    $delete_user = $con->prepare("DELETE FROM users WHERE id = ?");
    $delete_user->execute(array($user_id));

    if ($delete_user)
    {
         header('Location: ../dashboard/users.php');
    }
   
}