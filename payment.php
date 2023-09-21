<?php


    $firstname=$_POST['fname'];
    $contactno=$_POST['contactno'];
    $email=$_POST['email'];
    $shipaddress=$_POST['shipaddress'];

    $boxqty = $_POST['boxqty'];
    $bubbleqty = $_POST['bubbleqty'];
    $cornqty = $_POST['cornqty'];
    $courierqty = $_POST['courierqty'];
    $honeyqty = $_POST['honeyqty'];
    $mushqty = $_POST['mushqty'];
    $paperqty = $_POST['paperqty'];
    $peanutqty = $_POST['peanutqty'];
    $tapeqty = $_POST['tapeqty'];
    $total = $_POST['total'];


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
$sql_query = "INSERT INTO purchaselist (custname, contactno, email, shipaddress, boxqty, bubbleqty, cornqty, courierqty, honeyqty, mushqty, paperqty, peanutqty, tapeqty,  total)
 VALUES ('$firstname' , '$contactno', '$email', '$shipaddress', '$boxqty', '$bubbleqty', '$cornqty', '$courierqty', '$honeyqty', '$mushqty', '$paperqty', '$peanutqty', '$tapeqty', '$total')";
mysqli_query($handler, $sql_query)


/*if (mysqli_query($handler, $sql_query)) {
    echo "Data inserted successfully";
     } else {
     echo "Error inserting data: " . mysqli_error($handler);
     }*/





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio-Packs | Payment</title>
    
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
        <br>
        <h1 style="text-align: center;">Payment</h1>
        <h2 style="text-align: center;"><label for="m1">Credit / Debit</label>&nbsp;<img src="./images/visa_master_amex.png" width= 80px>  </h2>
     <div class="center">
        <div class="paymentMethod">
            
            <form class="paymentMethod"  action ="thankyou.php" method="post">
        <div class="BillingAdd">
            <label for="fullname"> Full Name:</label><br>
            <input class="paymentfield"type="text" id="fullname" name="fullname" placeholder="James Bond" autocomplete="off" minlength="8" maxlength="30" required><br>

            <label for="email"> Email:</label><br>
            <input class="paymentfield"type="text" id="email" name="email" placeholder="Bond@example.com" autocomplete="off" minlength="11" required><br>

            <label for="address"> Address:</label><br>
            <input class="paymentfield"type="text" id="address" name="address" placeholder="156, Jalan Timon" autocomplete="off" minlength="15" maxlength="80" required><br>

            <label for="city"> City:</label><br>
            <input class="paymentfield"type="text" id="city" name="city" placeholder="Subang" autocomplete="off" minlength="5" maxlength="20" required><br>

            <label for="state">State:</label><br>
            <input class="paymentfield"type="text" id="state" name="state" placeholder="Selangor" autocomplete="off" minlength="5" maxlength="25" required>
           
            
        </div>
              
                
            
                
                    <div class="creditDebitDetail">
        
                        
                            <div>Name on Card:</div>
                            <input class="paymentfield"type="text" name= "NOC" id="NOC" placeholder="Name on Card" autocomplete="off" minlength="8" maxlength="30" required><br>

                            <div>Card Number:</div>
                            <input class="paymentfield" type="number" name="cnumber" id="cnumber" placeholder="Card Number (no spacing)" autocomplete="off" pattern="/^-?\d+\.?\d*$/" onKeyPress="if((this.value.length > 15) && (this.value.length < 17)) return false;" required><br>

                            <div>Expiry Date:</div>
                            <input class="paymentfield"type="month" name=" expDate" value="expDate" autocomplete="off" maxlength="5" required><br>
                                
                            <div>CVV:</div>
                            <input class="paymentfield"type="number" name="cvv" id="cvv" placeholder="604" autocomplete="off" pattern="/^-?\d+\.?\d*$/" onKeyPress="if((this.value.length > 2) && (this.value.length < 4)) return false;" required><br>
                            <br><br>
                    
                    <div style="text-align: center;">
                        
                       <button id="confirmpurchase" class="purchasebutton" type = "submit"  method="POST"> Complete Purchase </button>
             
                    </div>
                    </div>
                       
                      </form>
                      
                           
                    </div>
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

