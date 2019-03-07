<?php
require_once "../classes/config.php";
$conn = new config();
$post =  filter_var($_POST["post"], FILTER_SANITIZE_STRING);
$comment_id = filter_var(htmlspecialchars($_POST["comment_id"]), FILTER_SANITIZE_STRING);
$post_id = filter_var(htmlspecialchars($_POST["post_id"]), FILTER_SANITIZE_STRING);
$cookie_checker = filter_var($_POST["cookie_checker"], FILTER_VALIDATE_EMAIL);
$approval = "unapproved";
if($post==""){
    echo "<b><i class='fa fa-warning'></i>&nbsp; please fill the empty field</b>";
}else if($cookie_checker==""){
    echo "<b><i class='fa fa-warning'></i>&nbsp; oops! there seems to be a problem</b>";
}else if($post_id==""){
    echo "<b><i class='fa fa-warning'></i>&nbsp; oops! there seems to be a problem</b>";
}else {
    $sql_check = "SELECT * FROM user_data where email='$cookie_checker'";
    $run_query = $conn->query($sql_check);
    $total_row = $conn->rowcount($run_query);
    if($total_row==0){
        echo "<i class='fa fa-warning'></i>&nbsp;there is an error and requires you to sign in&nbsp;<a href='#' class='sign-me-com'>here</a>";
    }else{
              foreach ($run_query as $key => $value) {
               $username = $value["username"];
                $sql_insert = "INSERT into replies_table(post_content,email,username,post_id,approval,comment_id) VALUES('$post', '$cookie_checker', '$username','$post_id','$approval','$comment_id')";
                $run_insert = $conn->query($sql_insert);
                if($run_insert){
                    echo"<b><i class='fa fa-check-circle-o' aria-hidden='true'></i>&nbsp;comment sent successfully waiting to be approved</b>";
                }          
              }
   
        
    }
    
}

?>