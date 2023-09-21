<?php
    session_start();

    require_once ('./productFetch.php');
    require_once ('./prodfunc.php');
    $database= new ConnectDb();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio-Packs | Products</title>
    
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

    <div class="main ">
        <br>
        <h1 style="padding-left:50px">All Products</h1>
        <br>
        <div class="content">
        <?php
                $data = $database->fetchData();
                while ($record = mysqli_fetch_assoc($data)){
                    product($record['productID'],$record['productName'], $record['productImg'],$record['productPrice'], $record['productDesc']);
                }
        ?>
        </div>
    
       
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