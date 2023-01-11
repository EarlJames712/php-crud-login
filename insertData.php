<?php
# Connect to the MySQL database
require_once 'conn.php';

# Get form data
$firstname = $_POST['fn'];
$lastname = $_POST['ln'];
$department = $_POST['d'];

# Prepare the insert query
$sqlInsert = "INSERT INTO student_list (firstname, lastname, department) VALUES('$firstname','$lastname','$department')";

# Execute query
mysqli_query($conn, $sqlInsert);

# Head back to index
header("location: index.php");