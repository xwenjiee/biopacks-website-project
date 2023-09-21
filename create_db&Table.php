<?php

        // class constructor
        $dbname = "bpdb";
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
    
      // create connection
        $handler = mysqli_connect($servername, $username, $password);

        // create database 
        $sql_db = "CREATE DATABASE IF NOT EXISTS $dbname";

        // execute query
        if(mysqli_query($handler, $sql_db)){

            echo "Database successfully created. ";

            $handler = mysqli_connect($servername, $username, $password, $dbname);

            // sql to create new tables
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

            if(mysqli_query($handler, $the_query)){
                echo "Purchaselist table added. ";
            } else{
                echo "Error creating table: " .mysqli_error($handler);
            }


            if(mysqli_query($handler, $the_query2)){
                echo "Product table added. ";

                $insert="INSERT INTO product(productName, productImg, productPrice, productDesc)
                    VALUES
                            ( ' Shipping Box', ' ./products/box.png', 25.00, ' ./box.html'),
                            ( 'Bubblewrap', ' ./products/bubblewrap.png', 15.00, ' ./bubblewrap.html'),
                            ( 'Lunchbox Packaging', ' ./products/corn_starch.png', 30.00, './cornstarch.html'),
                            (' Parcel Shipping Bag', ' ./products/courier_bag.png', 5.00, ' ./courierbag.html'),
                            ( 'Parcel Wrapper', ' ./products/honeycomb.png', 20.00, ' ./honeycomb.html'),
                            ( ' Fragile Item Shipping Box', ' ./products/mushroom.png', 30.00, ' ./mushroom.html'),
                            ( ' Paper Bag', ' ./products/paper_bag.png', 15.00, ' ./paperbag.html'),
                            ( ' Shipping Packing Peanuts', './products/peanuts.png', 10.00, ' ./peanuts.html'),
                            ( ' Multipurpose Tape', './products/tape.png', 10.00, ' ./tape.html')";


                if(mysqli_query($handler, $insert)){
                    echo "Product data succesfully inserted. ";
                }
                else{
                    echo "Error inserting data: " .mysqli_error($insert);
                }
                
            } else{
                echo "Error creating table: " .mysqli_error($handler);
            }


            if(mysqli_query($handler, $the_query3)){
                echo "Paymentdetails table added. ";
            } else{
                echo "Error creating table: " .mysqli_error($handler);
            }


        }else{
            echo "Error creating database: " .mysqli_error($handler);
        }
    


?>