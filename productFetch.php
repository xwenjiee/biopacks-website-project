<?php


class ConnectDb
{
    public $dbname;
    public $servername ;
    public $username ;
    public $password ;

    

        // class constructor
    public function __construct(
        $dbname = "bpdb",
        $servername = "127.0.0.1",
        $username = "root",
        $password = ""
       
    )
    {
    

      // create connection
        $handler = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$handler){
            die("Connection failed : " . mysqli_connect_error());
        }
    }
    public function fetchData(
        $dbname = "bpdb",
        $servername = "127.0.0.1",
        $username = "root",
        $password = ""

    ){

        
        $product_query = "SELECT * FROM product";

        $handler = mysqli_connect($servername, $username, $password, $dbname);

        $data = mysqli_query($handler, $product_query);

        if(mysqli_num_rows($data) > 0){
            return $data;
        }
    }
}

?>