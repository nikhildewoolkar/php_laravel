<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nisarg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$input = $_REQUEST["n"];

$query = "DELETE FROM `Student` WHERE id='".$input."'";

$result = $conn->query($query);
    
if ($result) {
    
    setcookie("delete", $input ,time() + (86400 * 30), "/");
    header("Location: display.php");
}

?>