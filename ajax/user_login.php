<?php
require_once "../classes/config.php";
$conn = new config();
$username = filter_var(htmlspecialchars($_GET["email"]), FILTER_VALIDATE_EMAIL);
$password = trim($_GET["password"]);

if($username==""){
    echo "<b><i class='fa fa-warning'></i>&nbsp;incorrect or empty email field</b>";
}else if($password==""){
    echo "<b><i class='fa fa-warning'></i>&nbsp;password cannot be left empty</b>";
}else{
    $sql_query = "SELECT * FROM user_data where email='$username' ";
    $run_query = $conn->query($sql_query);
    $count_total = $conn->rowcount($run_query);
    if($count_total==0){
      echo "<b><i class='fa fa-warning'></i>&nbsp;this email or password is incorrect t</b>";
    }else{
      foreach ($run_query as $key => $value) {
         $password_hash = $value["password"];
         if(!(password_verify($password, $password_hash))){
           echo "<b><i class='fa fa-warning'></i>&nbsp;this email or password is incorrect </b>";
        }else{
            echo "<b class='cookie_val'>{$value["email"]} </b><b>&nbsp;can now post comments</b>";
        }
      }
    }
}

?>