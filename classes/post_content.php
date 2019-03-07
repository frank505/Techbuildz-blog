<?php
require_once "../classes/post_content.php";
class post_content{
protected $conn;
public function __construct(){
    $this->conn = new config();
}

public function fetch_categories(){
    $sql_select = "SELECT * FROM categories";
    $run_query = $this->conn->query($sql_select);
    foreach ($run_query as $key => $value) {
        $values = $value["cat_value"];
        echo "<option value='$values'>$values</option>";
    }
}

//end of this class
}


?>


