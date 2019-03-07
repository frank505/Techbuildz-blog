<?php
require_once "../classes/config.php";
class side_bar {
    private $conn;
    public $cookie_val;
 public function __construct(){
$this->conn = new config(); 
$this->cookie_val = $this->conn->cookie_name;
 }

 public function load_username(){
           $co_val = $_COOKIE[$this->cookie_val];
          $sql_select = "SELECT * FROM admin where hashed_email='$co_val'";
     $run_query = $this->conn->query($sql_select);
     foreach ($run_query as $key => $value) {
         echo $username = $value["username"];
     }
 }

public function load_image(){
    $co_val = $_COOKIE[$this->cookie_val];
          $sql_select = "SELECT * FROM admin where hashed_email='$co_val'";
     $run_query = $this->conn->query($sql_select);
     foreach ($run_query as $key => $value) {
         echo $image = $value["image"];
     }
}

}