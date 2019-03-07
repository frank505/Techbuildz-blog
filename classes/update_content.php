<?php
require_once "../classes/config.php";
class update_content{
private $conn;
public function __construct(){
$this->conn = new config();
}

public function fetch_content(){
    $get_variable = htmlspecialchars($_GET["update"]);
    $sql_select = "SELECT * FROM post_content where id='$get_variable' ";
    $run_query = $this->conn->query($sql_select);
    foreach ($run_query as $key => $value) {
       $content = $value["post"];
       return $content;
    }
}

public function main_image(){
    $get_variable = htmlspecialchars($_GET["update"]);
    $sql_select = "SELECT * FROM  post_content where id='$get_variable'";
    $run_query = $this->conn->query($sql_select);
    foreach ($run_query as $key => $value) {
       $content = $value["file_name"];
      echo "<img src='../assets/post_header_img/$content' class='main_img' height='100' width='100'/>";
    }
}

public function content_show(){
    $get_variable = htmlspecialchars($_GET["update"]);
    $sql_select = "SELECT * FROM  post_content where id='$get_variable'";
    $run_query = $this->conn->query($sql_select);
    foreach ($run_query as $key => $value) {
       $content = $value["header"];
     echo $content;
    }
}

//end of class
}




?>