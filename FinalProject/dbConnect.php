<?php
//function untuk connect ke database

function my_connectDB()
{
    $host = "localhost";
    $user = "root";
    $pwd = "";
    $db = "mycrypto_signal";

    $conn = mysqli_connect($host, $user, $pwd, $db) or die("Error connect to database");


    return $conn;
}
//function untuk close database

function my_closeDB($conn)
{
    mysqli_close($conn);
}


?>