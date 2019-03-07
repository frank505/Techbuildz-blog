<?php
require_once "../classes/config.php";
$conn = new config();
$get_content = filter_var($_POST["cat"], FILTER_SANITIZE_STRING);
$select_query = "SELECT cat_value from categories where cat_value='$get_content'";
$run_this = $conn->query($select_query);
$run_total = $conn->rowcount($run_this);
 if($run_total > 0){
echo "<i class='fa fa-warning'></i>&nbsp; this category already exist in the database";
 }else {
$enter_content = "INSERT into categories(cat_value) values('$get_content')";
   $run_query = $conn->query($enter_content);
   if($run_query){
       echo "<b style='margin-top:20px;'><i class='fa fa-check-circle-o'></i>&nbsp; new category added succefully</b>";
   }else{
    echo "<b><i class='fa fa-warning'></i>&nbsp; there seems to be a problem</b>";
   } 

 }



?>