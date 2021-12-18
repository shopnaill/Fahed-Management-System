<?php
include '../connect.php';
session_start();

if (isset($_POST['post_id']))
{
    $post_id = intval($_POST['post_id']);
    $user_id = $_SESSION['id'];
    $deletePost = $con->prepare("DELETE FROM posts WHERE id = ? AND user_id = ?");
    $deletePost->execute(array($post_id, $user_id));

    // check if post deleted
     if ($deletePost)
        {
          header('Location: ../index.php');
        }
        else
        {
            echo 'Error , Post not deleted';
        }

}