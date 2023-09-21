<?php

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$NOC = $_POST['NOC'];
$cnumber = $_POST['cnumber'];
$expDate = $_POST['expDate'];
$cvv = $_POST['cvv'];

$title='';


$servername = "127.0.0.1";
$username = "root";
$password = NULL;
$dbname = "bpdb";
$handler = mysqli_connect($servername, $username, $password, $dbname);
/*if (!$handler) {
    die("Connection failed: " . mysqli_connect_error());
        } else {
        echo "Connected successfully";
        }*/
$sql_query = "INSERT INTO paymentdetails (fullname, email, address, city, state, NOC, cnumber, expDate, cvv) 
          VALUES ('$fullname' , '$email', '$address', '$city', '$state','$NOC','$cnumber','$expDate', '$cvv')";
mysqli_query($handler, $sql_query)    
    
    /*if (mysqli_query($handler, $sql_query)) {
        echo "Data inserted successfully";
         } else {
         echo "Error inserting data: " . mysqli_error($handler);
         }
    
    exit;
  
    exit;*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio-Packs | Order Successful</title>
    
        <link rel="stylesheet" href="./websitecss/maincss.css" type="text/css">
    
</head>

<body>
    <header >
        
        <table class="logobar" >
            <td><a href="index.html"><img class="logo2"  src="./images/logo.svg"></a></td>
            
        </table>
        
       
  </header>
  <nav>
    <div style=" display:flex; " >

        <div class="navCont "><a  class="bar "href="index.html">Home</a></div>
    <div class="navCont "><a class="bar "href="about.html">About Us</a></div>
    <div class="navCont "><a class="bar "href="product.php">Products</a></div>
        <div class="navCont"><a  class="bar "href="contact.html">Contact Us</a></div>
        
            <a href="mycart.html"><div class="carticon"><img class="cart" src="./images/cart.png"></div></a>

    
    </div>
    
</nav>

    <div class="main">
        <br><br>
        <h2 style="text-align: center;">Your order has been successful.<br>Thank You for making our world a better place.</h2>
        <br>
        <div class="center">
         <img src="./images/logo.png">
        </div>
        <br><br>
    </div>

     
    <footer>
        <div class= "footer">
            <div class = "div1">
            <a href="index.html"><img class="logo2"  src="./images/logo.svg"></a>
            </div>
            <div class = "div2"><b>Contact Us</b> <br><br>
                +603 7491 8622<br>
                5, Jalan University, <br>
                Bandar Sunway, <br>
                47500, <br>
                Petaling Jaya, <br>
                Selangor. <br>
            </div>
            <div class = "div3">
                <b>Navigation </b><br><br>
                <a class="bar3" href="index.html">Home</a> <br>
                <a class="bar3" href="about.html">About Us</a> <br>
                <a class="bar3" href="product.php">Products</a> <br>
                <a class="bar3" href="mycart.html">My Cart</a> <br>
    
            </div>
            <div class = "div4">
                <b>Social Media </b><br><br>
                <a href="https://www.facebook.com/"><img class="social"src="./images/fb.png"></a><a href="https://www.instagram.com/"><img class="social"src="./images/ig.png"></a><a href="https://twitter.com/"><img class="social"src="./images/twitter.jpg"></a><br>

                <small>
                    &copy; Copyright 1996 - 2021. All Rights Reserved. VISA <br>
                    &copy; 2021 American Express. All rights reserved. <br>
                    &copy; 1994-2021 Mastercard. <br>
                </small>
            </div>
        </div>
        
    </footer>
   
</body>
</html>

