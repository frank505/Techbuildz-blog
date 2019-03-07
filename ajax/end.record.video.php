<?php
require_once "../classes/config.php";
$conn = new config();
$get_var  = htmlspecialchars( $_GET["id"]); 
$sql_select = "SELECT * FROM videos where id='$get_var'";
$run_query = $conn->query($sql_select);
if($run_query){
    foreach ($run_query as $key => $value) {
            $clicks = $value["watch_to_end"];
            $clicks_multiply = $clicks * 1;
            $clicks_multiply++;
$sql_update = "UPDATE videos SET watch_to_end='$clicks_multiply' WHERE id='$get_var'";
$run_this = $conn->query($sql_update);
if($run_this){
    echo "updated";
}
    }
    
}

?>