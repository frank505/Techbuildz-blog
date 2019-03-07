<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once "../classes/config.php";
require_once "../vendor/autoload.php";

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
class forgot_password{
    public $conn;
    public $mail;
public function __construct(){
    $this->conn = new config();
    $this->mail = new PHPMailer(true);
}
public function email_notification(){
if(isset($_POST["send_email"])){
    $user_email = $_POST["email_validation"];
    if($user_email ==""){
        echo "<script>alert('email field is empty please enter an email')</script>";
    }else if(!(filter_var($user_email, FILTER_VALIDATE_EMAIL))){
        echo "<script>alert('incorrect email address')</script>";
    } else{
        $sql_select = "SELECT * from admin where email='$user_email'";
        $run_query = $this->conn->query($sql_select);
        $total = $this->conn->rowcount($run_query);
        if($total==0){
            echo"<script>alert('this email is not registered')</script>";
        }else if($total > 0){
           // phpinfo();
                foreach ($run_query as $key => $value) {
                    @$tempoary_password = $value["tmp_password"];

                    $this->mail->isSMTP();                            // Set mailer to use SMTP
                    $this->mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
                    $this->mail->SMTPAuth = true;                     // Enable SMTP authentication
                    // $this->mail->Username = 'akpufranklin333@gmail.com';          // SMTP username
                    // $this->mail->Password = 'akpufranklin202'; // SMTP password
                    $this->mail->Username = 'akpufranklin333@gmail.com';          // SMTP username
                    $this->mail->Password = 'akpufranklin202'; // SMTP password
                    $this->mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
                    $this->mail->Port = 587;                          // TCP port to connect to
                    $this->mail->addAddress($user_email);   // Add a recipient
                    $this->mail->isHTML(true);  // Set email format to HTML
                    $this->mail->setFrom('techmiz@techmiz.com', 'TechBuildz');
                    $this->mail->addAddress($user_email);   // Add a recipient
                   $this->mail->SMTPDebug  = 0; 
                    $bodyContent = "you asked if you wanted to reset your password if it you were not the one then
                    ignore this message else here is your tempoary passsword to login with  &nbsp; $tempoary_password 
                    use this link to login and then change your password once logged in &nbsp;<a href='192.168.43.235/TechMiz/administrator-section/reset.php'>here</a>
                    please note that this is only a tempoary password and once you log out it can no more be used to log 
                    you in again so please klindly change your email once your logged in </b>"; 
                    $this->mail->Subject = 'From Surelinkx Media Reset Password';
                    $this->mail->Body    = $bodyContent;
                    
                    if(!$this->mail->send()) {
                        echo '<script>alert("there seems to be an error please check your internet connection")</script>';
                    } else {
                        echo '<script>alert("message was sent successfully")</script>';
                    }
                     
           

                }

            
        }
    }
}
}


public function change_password(){
    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password = trim($_POST["password"]);
        if($email ==""){
        echo "<script>alert('email field cannot be left empty')</script>";
        }else if($password == ""){
            echo "<script>alert('password field cannot be left empty')</script>";
        }else if(!(filter_var($email, FILTER_VALIDATE_EMAIL))){
            echo "<script>alert('invalid email')</script>";
        }else{
            $sql_select = "SELECT * FROM register_data where tm_password='$password'";
            $run_query = $this->conn->query($sql_select);
            $count = $this->conn->rowcount($run_query);
            if($count==0){
                echo "<script>alert('tempoary password is incorrect')</script>";
            }else if($count > 0){
                foreach ($run_query as $key => $value) {
                    $email_value = $value["username"];
                    if($email==$email_value){
                        $new_tmp_pass = "tmp".md5(time())."me";
                        $update_tmp_pass = "UPDATE register_data set tm_password='$new_tmp_pass' where username='$email'";
                        $run_update = $this->conn->query($update_tmp_pass);
                        if($run_update){
                          setcookie($this->conn->cookie_name, $email, time() + (86400 * 1), "/", TRUE, TRUE);
                          header("location:affiliate-user/index.php");
                        }
                  
                    }
                else if($email != $email_value){
                    echo "<script>alert('email is not valid')</script>";
                }    
             }
            }
        }
    }

}
//end of password reset function



}

