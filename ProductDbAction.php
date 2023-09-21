<?php

$productName = $_POST["productName"];
$productImg = $_POST['productLink'];
$productPrice = $_POST['productPrice'];
$productDesc = $_POST['productDesc'];


$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "bpdb";
$handler = mysqli_connect($servername, $username, $password, $dbname);
if (!$handler) {
    die("Connection failed: " . mysqli_connect_error());
     } else {
     echo "Connected successfully";
     }
$sql_query = "INSERT INTO product (productName, productImg, productPrice, productDesc) VALUES ('$productName' , '$productImg', $productPrice,'$productDesc')";


if (mysqli_query($handler, $sql_query)) {
    echo "Data inserted successfully";
     } else {
     echo "Error inserting data: " . mysqli_error($handler);
     }

exit;
?> 