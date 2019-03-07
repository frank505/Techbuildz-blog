<?php
require_once "../classes/config.php";
class header_blog{
private $conn;
public function __construct(){
    $this->conn= new config();
} 
public function fetch_categories(){
    $select_query = "SELECT * FROM categories";
    $run_query = $this->conn->query($select_query);
    foreach ($run_query as $key => $value) {
          echo "
          <a class='dropdown-item drop-down-content' href='blog/category/{$value["cat_value"]}'><b class='drop-down-content'>{$value["cat_value"]}</b></a>
          <div class='dropdown-divider'></div>
          ";
    }
    
    
}


}
