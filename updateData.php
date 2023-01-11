<?php
# Connect to the MySQL database
require_once 'conn.php';

echo "<pre>";
echo var_dump($_GET);
echo "</pre>";
echo "<pre>";
echo var_dump($_POST);
echo "</pre>";


# Get the form data
$firstname = $_POST['fn'];
$lastname = $_POST['ln'];
$department = $_POST['d'];
$id = $_GET['id'];

# Prepare the update query
$query = "UPDATE student_list SET firstname = '$firstname', lastname = '$lastname', department = '$department' WHERE id = '$id'";

# Execute the query
mysqli_query($conn, $query);

# Head back to index
header("location: index.php");
