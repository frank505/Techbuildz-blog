<?php
require_once "../classes/config.php";
$conn = new config();
$approved = "approved";
$get_variable = htmlspecialchars($_GET["id"]);
$sql_select = "UPDATE replies_table SET approval='$approved' where id='$get_variable'";
$run_me = $conn->query($sql_select);
if($run_me){
    $sql_select = "SELECT * FROM replies_table where id='$get_variable'";
    $run_query = $conn->query($sql_select);
    foreach ($run_query as $key => $value) {
        echo "".$value["approval"]."";
    }
    
}


?>