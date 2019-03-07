<?php
require_once "../classes/config.php";
class admin_notifications{
private $conn;
public function __construct(){
    $this->conn = new config();
}
public function comments(){
$zero = 0;
 $sql_select = "SELECT * FROM comments_table where seen='$zero'";
 $run_query = $this->conn->query($sql_select);
 $row_counting = $this->conn->rowcount($run_query);
 return $row_counting;
}
public function replies(){
    $zero = 0;
    $sql_select = "SELECT * FROM replies_table where seen='$zero'";
    $run_query = $this->conn->query($sql_select);
    $row_counting = $this->conn->rowcount($run_query);
    return $row_counting;
}


public function total_notifications(){
    $comments = $this->comments();
    $replies  = $this->replies();
    $total = $comments + $replies;
    if($total==0){
        return;
    }else{
  return $total;
    }
    
}


//end of this class
}