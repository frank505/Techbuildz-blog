<?php
sleep(2);
require_once "../classes/config.php";
$conn = new config();
$data = filter_var($_POST["data"],FILTER_VALIDATE_EMAIL);
if($data==""){
    echo"email field is empty";
}else{

    $sql_query = "SELECT * FROM subscription where email='$data'";
    $run_this = $conn->query($sql_query);
    $count_this = $conn->rowcount($run_this);
    if($count_this==0){
    $sql_insert="INSERT INTO subscription(email) values('$data')";
    $run_this = $conn->query($sql_insert);
    if($run_this){
        echo"thanks for subscribing to our news letter";
    }
    }else{
        echo"this user is already subscribed.";
    }
    

}



?>