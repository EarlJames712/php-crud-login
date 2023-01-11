<?php
session_start();
include 'koneksyon.php';

$username = $_POST['uname'];
$password = $_POST['password'];


   $result = mysqli_query($koneksyon, "SELECT * FROM users WHERE user_name = '$username' ");
    while($row = mysqli_fetch_array($result)){
        if($row['user_password'] == $password && $row['user_type'] == 'admin'){
            $_SESSION['id'] = $row['user_id'];
            $_SESSION['username'] = $row['user_name'];
            header('location: admin.php');
        }
        elseif($row['user_password'] == $password && $row['user_type'] == 'faculty'){
            $_SESSION['id'] = $row['user_id'];
            $_SESSION['username'] = $row['user_name'];
            header('location: faculty.php');
        }
        elseif($row['user_password'] == $password && $row['user_type'] == 'student'){
            $_SESSION['id'] = $row['user_id'];
            $_SESSION['username'] = $row['user_name'];
            header('location: student.php');
        }else{
            echo "<script>alert('Cannot find acount');</script>";
        }   
}

?>


