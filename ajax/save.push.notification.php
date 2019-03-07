<?php
require_once "../classes/config.php";
$conn = new config();
if(isset($_POST["token"])){
$date = time();
$token_value = filter_var($_POST["token"],FILTER_SANITIZE_STRING);
$sql_check = "SELECT * FROM push_table where token='$token_value'";
$run_me = $conn->query($sql_check);
$count_me = $conn->rowcount($run_me);
if($count_me == 0){
    $sql_insert ="INSERT into push_table(token,cdate) values('$token_value','$date')";
    $run_query = $conn->query($sql_insert);
    if($run_query){
        echo"token saved successfully";
    }else{
        echo"error";
    }
}else{



}


    
}



?>