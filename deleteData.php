<?php
# Connect to the MySQL database
require_once 'conn.php';

# Get ID from form data
$id = $_GET['id'];

# Prepare the delete query
$query = "DELETE FROM student_list WHERE id = '$id' ";

# Execute the query
mysqli_query($conn, $query);

# Head back to index
header("location: index.php");