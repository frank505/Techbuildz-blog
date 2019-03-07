<?php
require_once "../classes/config.php";
$conn =new config();
$username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
$email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
$password = trim($_POST["password"]);
$confirm = trim($_POST["confirm"]);
if($username==""){
    echo "<b><i class='fa fa-warning'></i>&nbsp;username field cannot be left empty</b>";
}else if($email==""){
    echo "<b><i class='fa fa-warning'></i>&nbsp;email field cannot be left empty</b>";
}else if($password==""){
    echo "<b><i class='fa fa-warning'></i>&nbsp;password field cannot be left empty</b>";
}else if($confirm==""){
    echo "<b><i class='fa fa-warning'></i>&nbsp;confirm field cannot be left empty</b>";
} else if($password!=$confirm){
    echo "<b><i class='fa fa-warning'></i>&nbsp;passwords and confirm dont match</b>";
}
else{
 $sql_select = "SELECT * FROM user_data where email='$email'";
 $run_query = $conn->query($sql_select);
 $rowcount = $conn->rowcount($run_query);
 if($rowcount > 0){
     echo "<b><i class='fa fa-warning'></i>&nbsp;this user already exist</b>";
 }else{
  $sql_check_name = "SELECT * FROM user_data where username='$username'";
  $run_me  = $conn->query($sql_check_name);
  $rowcounts = $conn->rowcount($run_me);
  if($rowcounts > 0){
    echo "<b><i class='fa fa-warning'></i>&nbsp;this username is already taken choose another name</b>";
  }else{

    $password_hash = password_hash($password, PASSWORD_DEFAULT);
     $confirm_hash = password_hash($confirm, PASSWORD_DEFAULT);
    $sql_insert="INSERT into user_data(username, email,password,confirm) VALUES('$username','$email','$password_hash','$confirm_hash')";
    $run_query = $conn->query($sql_insert);
    if($run_query){
        echo "<b><i class='fa fa-check-circle-o' aria-hidden='true'></i>&nbsp;registration is complete</b>";
    }
    
  }


    
 }



}
?>