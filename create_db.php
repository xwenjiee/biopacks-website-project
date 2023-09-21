<?php
class CreateDb
{
        public $servername;
        public $username;
        public $password;
        public $dbname;
        public $tablename;
        public $con;


        // class constructor
    public function __construct(
        $dbname = "bpdb",
        $tablename = "product",
        $servername = "127.0.0.1",
        $username = "root",
        $password = ""
    )
    {
      $this->dbname = $dbname;
      $this->tablename = $tablename;
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;

      // create connection
        $this->con = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$this->con){
            die("Connection failed : " . mysqli_connect_error());
        }

        // query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        // execute query
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            // sql to create new table
            $sql = "CREATE TABLE IF NOT EXISTS $tablename(
                productID INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              productName Varchar (80) NOT NULL,
              productImg text NOT NULL,
              productPrice float (4,2) NOT NULL,
              productDesc text NOT NULL)";


            if (mysqli_query($this->con, $sql)){
                echo "Database created successfully. ";
            }

        }else{
            echo "Error creating table : " . mysqli_error($this->con);
        }
    }

    // get product from the database
    public function fetchData(){
        $sql = "SELECT * FROM $this->tablename";

        $data = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($data) > 0){
            return $data;
        }
    }
}
new CreateDb();

?>