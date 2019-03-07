<?php
require_once "../classes/config.php";
$conn = new config();
$get_variable = htmlspecialchars($_GET["id"]);
$sql_select = "SELECT * FROM replies_table where id='$get_variable'";
$run_query = $conn->query($sql_select);
if($run_query){
    foreach ($run_query as $key => $value) {
          $comments = $value["post_content"];
          echo "$comments";
    }
}
