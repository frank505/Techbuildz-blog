<?php
require_once "../classes/config.php";
$conn = new config();
$approved = "approved";
$unapproved ="unapproved";
$sql_update = "UPDATE comments_table SET approval='$approved' where approval='$unapproved'";
$run_query = $conn->query($sql_update);
if($run_query){
    echo"
    <b class='alert alert-danger alert-me'><i class='fa fa-check-circle-o'></i> all comments have been approved</b>
    ";
}else{
    echo"<b class='alert alert-danger alert-me'><i class='fa fa-warning'></i> not approved check internet connection</b>";
}

?>