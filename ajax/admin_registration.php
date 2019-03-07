<?php
require_once "../classes/config.php";
$conn = new config();
$username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
$email =  $_POST["email"];
$password =  trim($_POST["password"]);
$tmp_password = $username.time()."me";
$confirm =  trim($_POST["confirm"]);
$message =  filter_var($_POST["message"], FILTER_SANITIZE_STRING);
$file_name = $_FILES["image"]["name"];
$tempoary_name = $_FILES["image"]["tmp_name"];
$file_size = $_FILES["image"]["size"];
$mime_type  = array("image/jpeg","image/png", "image/jpg");
$password_hash = password_hash($password, PASSWORD_DEFAULT);
$confirm_hash = password_hash($password, PASSWORD_DEFAULT);
$file_mime_type = mime_content_type(strtolower($tempoary_name));
$email_hash = md5($email);
if($username==""){
    echo " <b><i class='fa fa-exclamation-circle' aria-hidden='true'></i> &nbsp;oops! username field is empty</b>";
}else if($password==""){
    echo " <b><i class='fa fa-exclamation-circle' aria-hidde_n='true'></i> &nbsp;oops! password field is empty</b>";
}
else if($confirm==""){
    echo "<b><i class='fa fa-exclamation-circle' aria-hidden='true'></i> &nbsp;oops! confirm password field is empty</b>";
}
else if($file_name==""){
    echo " <b><i class='fa fa-exclamation-circle' aria-hidden='true'></i> &nbsp;oops! no image selected</b>";
}
else if($message==""){
    echo " <b><i class='fa fa-exclamation-circle' aria-hidden='true'></i> &nbsp;oops! description field is empty</b>";
} else if(!(filter_var($email, FILTER_VALIDATE_EMAIL))){
    echo "<b><i class='fa fa-exclamation-circle' aria-hidden='true'></i>&nbsp;please enter a valid email adress</b> ";
}else if(!in_array($file_mime_type, $mime_type)){
    echo "<b><i class='fa fa-exclamation-circle' aria-hidden='true'></i>&nbsp;only png and jpg files are allowed</b> ";
} else if($password !=$confirm){
    echo "<b><i class='fa fa-exclamation-circle' aria-hidden='true'></i>&nbsp;passwords dont match</b> ";
}

else{
      $check_email = "SELECT email FROM admin where email='$email'";
      $run_query = $conn->query($check_email);
      $return_total = $conn->rowcount($run_query);
      if($return_total > 0){
        echo "<b><i class='fa fa-exclamation-circle' aria-hidden='true'></i>&nbsp;this email already exists</b> ";
      }else{
        $temp = explode(".", $file_name);
        $newfilename = round(microtime(true)) . '.' . end($temp);
            $sql_insert = "INSERT INTO admin(username,email,password,confirm,image,description,tmp_password,hashed_email) values('$username','$email',
           '$password_hash', '$confirm_hash','$newfilename','$message','$tmp_password','$email_hash')";
           $run_query = $conn->query($sql_insert);
           if($run_query){
            move_uploaded_file($tempoary_name, "../assets/admin_image/" . $newfilename);        
echo"<b><i class='fa fa-check-circle-o' aria-hidden='true'></i>&nbsp;new user registered successfully</b>";
        }
        
      }
     
    
}

?>
