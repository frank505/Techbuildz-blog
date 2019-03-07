<?php
require_once "../classes/config.php";
$conn = new config();
$comment_id = htmlspecialchars($_GET["comment_id"]);
$post_id = htmlspecialchars($_GET["post_id"]);
$id = htmlspecialchars($_GET["id"]);
$approved ="approved";
if($comment_id==""){
    echo "<center><b><i class='fa fa-warning'></i>there seems to be an error</b></center>";
}else if($post_id==""){
    echo "<center><b><i class='fa fa-warning'></i>there seems to be an error</b></center>";
}else{
    $sql_select = "SELECT * FROM replies_table where id < '$id'AND comment_id='$comment_id' AND post_id='$post_id' AND approval='$approved' ORDER BY ID DESC LIMIT 4";
    $run_query = $conn->query($sql_select);
    $row_counting = $conn->rowcount($run_query);
    if($row_counting==0){
        echo"<b><i class='fa fa-warning'></i>&nbsp;oops no more replies available.</b>";
    }else{
        foreach ($run_query as $key => $value) {
            $username = $value["username"];
            $post_content = $value["post_content"];
            $Id = $value["id"];
            echo"<div class='div-replies-single'><br><b style='margin-left:30px;'>$username</b><br>";
            echo"<b class='' style='font-weight:normal;font-size:15px;margin-left:30px;'>$post_content</b></div>";
        }
        echo"<center>
        <button class='btn btn-primary load_user_replies_here' style='margin-top:10px;margin-bottom:10px;' comment-id-replies='$comment_id' post-id-replies='$post_id' id='$Id'>More&nbsp;<i class='fa fa-arrow-circle-o-right' aria-hidden='true'></i></button>
        </center>";
    }
}




?>