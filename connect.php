<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "class7";

$con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

if ($con)
{
   // echo "Connected successfully";
}else 
{
    echo "Failed To Connect";
}
