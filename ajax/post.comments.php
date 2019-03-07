<?php
require_once "../classes/config.php";
$conn = new config();
$hidden_value = filter_var(htmlspecialchars($_POST["cookie_checker"]), FILTER_VALIDATE_EMAIL);
$post = filter_var($_POST["post"], FILTER_SANITIZE_STRING);
$post_id = filter_var($_POST["post_id"], FILTER_SANITIZE_STRING);
$approval = "unapproved";
if($hidden_value==""){
    echo"<b><i class='fa fa-warning'></i>&nbsp;please sign in first&nbsp;<a href='#' class='sign-me-com'>here</a></b>";
}else if($post==""){
    echo"<b><i class='fa fa-warning'></i>&nbsp;comment area is empty</b>";
}else {
   
    $sql_check = "SELECT * FROM user_data where email='$hidden_value'";
    $run_query = $conn->query($sql_check);
    $total_row = $conn->rowcount($run_query);
    if($total_row==0){
        echo "<i class='fa fa-warning'></i>&nbsp;there is an error and requires you to sign in&nbsp;<a href='#' class='sign-me-com'>here</a>";
    }else{
              foreach ($run_query as $key => $value) {
               $username = $value["username"];
                $sql_insert = "INSERT into comments_table(post_content,email,username,post_id,approval) VALUES('$post', '$hidden_value', '$username','$post_id','$approval')";
                $run_insert = $conn->query($sql_insert);
                if($run_insert){
                    echo"<b><i class='fa fa-check-circle-o' aria-hidden='true'></i>&nbsp;comment sent successfully waiting to be approved</b>";
                }          
              }
   
        
    }
    
}

?>