<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flutter_test";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM products";
$result = $conn->query($query);

while($row = $result->fetch_assoc()){
    echo $row['Id'] . ") " . $row['product_name'] . "<br />";
}


$conn->close();
