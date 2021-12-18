<?php
session_start();
include '../connect.php';

if (isset($_POST['content']))

{
    $content = $_POST['content'];
    
    $post = $con->prepare("INSERT INTO posts (content, user_id) VALUES (?,?)");
    $post->execute(array($content, $_SESSION['id']));

    if ($post->rowCount() > 0)
    {
        header('Location: ../index.php');
    }
    else
    {
        echo "Error";
    }
}