<?php
require_once "../classes/config.php";
class admin_login{
public $conn;
public function __construct(){
$this->conn = new config();
}
public function login_admin(){
    if(isset($_POST["login"])){
     $email = $_POST["email"];
     $password = trim($_POST["password"]);
     $bytes = random_bytes(20);
     $hashed_param = bin2hex($bytes);
     if($email==""){
         echo "<script>alert('email field is empty')</script>";
     }else if($password==""){
        echo "<script>alert('password field is empty')</script>";
     } else if(!(filter_var($email, FILTER_VALIDATE_EMAIL))){
        echo "<script>alert('invalid email')</script>";
     } else {
         $sql_select = "SELECT email, password FROM admin where email='$email'";
         $run_query = $this->conn->query($sql_select);
         $return_total = $this->conn->rowcount($run_query);
         if($return_total !== 0){
               foreach ($run_query as $key => $value) {
                  $password_hash = $value["password"];
                  $id = $value["id"];
                  $email_hash = $value["hashed_email"];
                 if(!(password_verify($password, $password_hash))){
                     echo "<script>alert('password or email is incorrect')</script>";
                 }else{
                    $_SESSION["email"] = $email;
                    $sql_query = "UPDATE admin SET hashed_email='$hashed_param' where email='$email'";
                    $run_query_sec = $this->conn->query($sql_query);
                  setcookie($this->conn->cookie_name,$hashed_param, time() + (86400 * 30), "/");
                    header("location:register.php");
                    
                }
                 }

               }else{
                echo "<script>alert('email is not correct')</script>";
               }
            
     }
    }
}










}


?>