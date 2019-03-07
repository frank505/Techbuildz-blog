<?php
require_once "../classes/config.php";
$conn = new config();
$username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
$email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
$subject= filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
$message=filter_var($_POST["message"], FILTER_SANITIZE_STRING);
if($username==""){
    echo "<i class='fa fa-warning'></i>&nbsp;username cannot be left empty";
}else if($email==""){
    echo "<i class='fa fa-warning'></i>&nbsp;email cannot be left empty";
} else if($subject==""){
    echo "<i class='fa fa-warning'></i>&nbsp;subject cannot be left empty";
}else if($message==""){
    echo "<i class='fa fa-warning'></i>&nbsp;message cannot be left empty";
} else{
  $sql_insert ="INSERT into Messages(username,email,subject,message) values('$username','$email','$subject','$message')";
  $run_query = $conn->query($sql_insert);
  if($run_query){
      echo"<I class='fa fa-check-circle-o'></I>&nbsp;message was sent successfully you will be notified by mail any response thanks.";
  }
}
?>

 