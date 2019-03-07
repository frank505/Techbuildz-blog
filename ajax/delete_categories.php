<?php
require_once "../classes/config.php";
$conn = new config();
$get_var = htmlspecialchars($_GET["get_var"]);
$delete_query = "DELETE FROM categories where id='$get_var'";
$run_query = $conn->query($delete_query);
if($run_query){
    echo "this category has been deleted";
}else{

}


?>