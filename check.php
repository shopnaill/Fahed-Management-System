<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['role']) && $_SESSION['role'] == 1 && !isset($dashboard)) {
    header('location: dashboard/dashboard.php');
}elseif (isset($_SESSION['id']) && !isset($_SESSION['role'])) {
    header('location: index.php');
}
elseif (!isset($_SESSION['id']) && !isset($login)) {
    header('location: login.php');
}
