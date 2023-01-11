<?php
$server_name = "localhost";
$uname = "root";
$password = "";
$db_name = "school_db";
$koneksyon = false;
try {
    $koneksyon = mysqli_connect($server_name, $uname, $password, $db_name,4306);
}
catch (Exception $e) {
    $koneksyon = mysqli_connect($server_name, $uname, $password, $db_name);
}

if (!$koneksyon) {
    echo "Connection failed!";
}
