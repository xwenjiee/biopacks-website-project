<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "bpdb";

$handler = mysqli_connect($servername, $username, $password, $dbname);

$the_query = "CREATE TABLE IF NOT EXISTS purchaselist(
    purchaseID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    custName VARCHAR(30) NOT NULL,
    contactNo VARCHAR(10) NOT NULL,
    email VARCHAR(40),
    shipAddress VARCHAR(200),
    boxqty INT(100),
    bubbleqty INT(100),
    cornqty INT(100),
    courierqty INT(100),
    honeyqty INT(100),
    mushqty INT(100),
    paperqty INT(100),
    peanutqty INT(100),
    tapeqty INT(100),
    total INT(255))";


$the_query2="CREATE TABLE IF NOT EXISTS product(
    productID INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  productName Varchar (80) NOT NULL,
  productImg text NOT NULL,
  productPrice float (4,2) NOT NULL,
  productDesc text NOT NULL)";

$the_query3="CREATE TABLE IF NOT EXISTS paymentDetails(
    fullname VARCHAR(30) NOT NULL,
    email VARCHAR(40),
    address VARCHAR(200),
    city VARCHAR(30),
    state VARCHAR(30),
    NOC VARCHAR(40) NOT NULL,
    cnumber VARCHAR(16) NOT NULL,
    expDate VARCHAR(7),
    cvv VARCHAR(3) NOT NULL)";

mysqli_query($handler,$the_query);

if(mysqli_query($handler, $the_query)){
    echo "Database TABLE ADDED!!!";
} else{
    echo "Error creating database: " .mysqli_error($handler);
}
mysqli_query($handler,$the_query2);

if(mysqli_query($handler, $the_query2)){
    echo "Database TABLE ADDED!!!";
} else{
    echo "Error creating database: " .mysqli_error($handler);
}

mysqli_query($handler,$the_query3);

if(mysqli_query($handler, $the_query3)){
    echo "Database TABLE ADDED!!!";
} else{
    echo "Error creating database: " .mysqli_error($handler);
}

?>