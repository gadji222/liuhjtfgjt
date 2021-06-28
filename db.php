<?php
$servrname = "localhost";
$username = "root";
$passwordd = "";

$conn = new mysqli($servrname, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}
echo "";


?>