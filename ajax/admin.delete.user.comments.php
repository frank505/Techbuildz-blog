<?php
require_once "../classes/config.php";
$conn = new config();
$get_var = htmlspecialchars($_GET["id"]);
$sql_delete = "DELETE FROM comments_table where id='$get_var'";
$run_query = $conn->query($sql_delete);
if($run_query){
   echo "<div class='alert more-alert alert-danger'style='width:70%; margin-left:15%;margin-right:15%;'><i class='fa fa-check-circle-o'></i>&nbsp; 
    this content is succesfully deleted</div>";
}else{
    echo "<div class='alert alert-danger' style='width:70%; margin-left:15%;margin-right:15%;'><i class='fa fa-warning'></i>&nbsp; there seems to be a problem</div>";
}


?>