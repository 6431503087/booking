<?php
$base_url = "http://localhost/caft_items";

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "caft_items";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
