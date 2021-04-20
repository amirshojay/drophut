<?php

class Database{
    
    public $server;
    public $db_username;
    public $db_password;
    public $db_name;
    public $table_name;
    public $conn;

    public function __construct($server="",$db_username="",$db_password="",$db_name="")
    {
        $this->server=$server;
        $this->db_username=$db_username;
        $this->db_password=$db_password;
        $this->db_name=$db_name;
        $this->conn=mysqli_connect($server,$db_username,$db_password,$db_name);
    }
    

    public function create_table($table_name)
    {
        if(!$this->conn){
            die("Failed, ".mysqli_connect_error());
        }

        $sql="CREATE TABLE IF NOT EXISTS $table_name (
            id INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            product_name VARCHAR (100) NOT NULL,
            product_price VARCHAR (10) NOT NULL,
            product_image TEXT NOT NULL
        );";

        if(!mysqli_query($this->conn,$sql)){
            echo "Error while creating a table";
            exit();
        };

    }
    
    public function add_product($table_name,$product_name,$product_price,$product_image){
        $sql="INSERT INTO $table_name (product_name, product_price, product_image) VALUES ('$product_name', '$product_price', '$product_image');";
        if(!$this->conn){
            die("Failed, ".mysqli_connect_error());
        }
        if(!mysqli_query($this->conn,$sql)){
            echo "Error while inserting data into database";
            exit();
        }
    }
    
    public function delete_product($table_name,$product_id){
        $sql="DELETE FROM $table_name WHERE id = '$product_id';";
        if(!$this->conn){
            die("Failed, ".mysqli_connect_error());
        }
        if(!mysqli_query($this->conn,$sql)){
            echo "Error while deleting data from database";
            exit();
        }
    }

    public function get_result($table_name)
    {
        $sql = "SELECT * FROM $table_name;";
        $result = mysqli_query($this->conn,$sql);

            if(mysqli_num_rows($result)>0){
                while($row= mysqli_fetch_assoc($result)){
                    $product_name2=$row['product_name'];
                    $product_price2=$row['product_price'];
                    $product_image2=$row['product_image'];
                    
                    $display_content[].="
                    <div class='col-md-4 my-3'>
                    <div class='card' style=''>
                    <div class='card-header'>
                    <img src='img/$product_image2' alt='' class='card-img-top' width='300px' height='300px'>
                    </div>
                    <div class='card-body'>
                    <h4 class='card-title'>$product_name2</h4>
                    <p class='card-text'>$product_price2</p>
                    <a href='#' class='btn btn-primary'>Button</a>
                    </div>
                    </div>
                    </div>
                    ";
                }
                
                    foreach($display_content as $value){
                        echo $value;
                    }
                
                
            }

    }

}

?>