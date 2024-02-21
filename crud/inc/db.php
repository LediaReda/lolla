<?php

$servername ="localhost";
$username ="root";
$password ="";
$dbname ="crud_php_mysql";


$conn = mysqli_connect("localhost", "root", "", "news_app");

if(!$conn)
{
    
    die("connection Error : " . mysqli_connect_error());
}
