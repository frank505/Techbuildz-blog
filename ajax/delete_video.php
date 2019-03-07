<?php
require_once "../classes/config.php";
$conn = new config();
$get_var = htmlspecialchars($_GET["delete_id"]);
$sql_delete = "DELETE FROM videos where id='$get_var'";
$run_query = $conn->query($sql_delete);
if($run_query){
   echo "<center><div class='alert  more-alert alert-danger'style='width:40%; margin-left:40%;margin-right:15%;'><i class='fa fa-check-circle-o'></i>&nbsp; 
    this content is succesfully deleted</div></center>";
}


?>