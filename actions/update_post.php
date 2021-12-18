<?php
include '../connect.php';
session_start();

if (isset($_POST['post_id']) && isset($_POST['content']))
{
    $post_id = intval($_POST['post_id']);
    $content = $_POST['content'];
    $user_id = $_SESSION['id'];

    $updatePost = $con->prepare("UPDATE posts SET content = ? WHERE id = ? AND user_id = ?");
    $updatePost->execute(array($content, $post_id , $user_id));

    if ($updatePost->rowCount() > 0)
    {
         header('Location: ../index.php');
    }
    else
    {
        echo 'error';
    }
}