<?php
include '../connect.php';
session_start();

if (isset($_POST['user_id']) )
{
    
    $role = $_POST['role'];
    if ($role == 1)
    {
        $role = 1;
    }elseif ($role == null)
    {
        $role = null;
    }
    $user_id = intval($_POST['user_id']);
    $user = $con->prepare("UPDATE  users SET `role`=? WHERE id = ? ");
    $user->execute(array($role,$user_id));

    if ($user)
    {
        header('Location: ../dashboard/users.php');
    }
   
}