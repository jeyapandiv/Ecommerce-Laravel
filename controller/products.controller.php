<?php

$config = require("model/config.php");
$db=require("model/Database.php");
$databaseConnection = new Database($config);
$conn = $databaseConnection->connectionDB();

$sql = "SELECT * FROM product_details";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

