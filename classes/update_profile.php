<?php
require_once "../classes/config.php";
class update_profile{
public $conn;
public $cookie_val;
public function __construct(){
    $this->conn = new config();
    $this->cookie_val = $this->conn->cookie_name;
}

public function select_username(){
    $co_val = $_COOKIE[$this->cookie_val];
    $sql_select = "SELECT * FROM admin where email='$co_val'";
$run_query = $this->conn->query($sql_select);
foreach ($run_query as $key => $value) {
   echo $username = $value["username"];
}
}

public function select_email(){
    $co_val = $_COOKIE[$this->cookie_val];
          $sql_select = "SELECT * FROM admin where email='$co_val'";
     $run_query = $this->conn->query($sql_select);
     foreach ($run_query as $key => $value) {
         echo $username = $value["email"];
     }
}


public function select_description(){
    $co_val = $_COOKIE[$this->cookie_val];
          $sql_select = "SELECT * FROM admin where email='$co_val'";
     $run_query = $this->conn->query($sql_select);
     foreach ($run_query as $key => $value) {
         echo $username = $value["description"];
     }
}


}