<?php
$config = require("model/config.php");
require("model/Database.php");
$dbConnection = new Database($config);
$conn = $dbConnection->connectionDB();

$query = "SELECT blogs.*, user_details.user_name AS author FROM blogs LEFT JOIN user_details ON blogs.author = user_details.user_id WHERE blogs.status='Published'";

$result = mysqli_query($conn, $query);
$success_query = false;

// checking the query response status
if ($result) {
    $success_query = true;
} else {
    $success_query = false;
    die("Query failed: " . mysqli_error($conn));
}

mysqli_close($conn);
