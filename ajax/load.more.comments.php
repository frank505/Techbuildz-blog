<?php
require_once "../classes/config.php";
$conn = new config();
$post_id = htmlspecialchars($_GET["post_id"]);
$id = htmlspecialchars($_GET["id"]);
$sql_comments = "SELECT * FROM comments_table where post_id='$post_id' AND id < '$id' ORDER BY ID DESC LIMIT 3";
$run_query = $conn->query($sql_comments);
$count_rows = $conn->rowcount($run_query);
if($count_rows==0){
    echo"<center><b class=''><i class='fa fa-warning'></i>&nbsp;there are no more comments</b></center>";
}else{
  
    foreach ($run_query as $key => $value) {
        $id= $value["id"];
        $username = $value["username"];
        $post_content = $value["post_content"];
        $post_id  = $value["post_id"];
        echo"
          <div class='content-comment'>
          <b >$username</b><br>
          <b class='more_here'>$post_content</b><br>
          <button class='btn-load-replies btn btn-primary' id-replies='$id'>Replies</button><br>
          <div class='replies-area'>
          <center><p><b>reply to <b style='color:rgb(251, 126, 168);'>$username</b> comment</b></p></center>
          <textarea class='form-control text-inputter-replies'></textarea><br>
          <div class='validation-inputter-replies  more-designs-here'></div><br>
          <button class='btn-post-replies btn btn-primary' id-pst-replies='$post_id' comment-id='$id'>Submit</button>
          </div>
          </div>
          
        ";
   }
   echo "<center><button class='more-comments btn btn-primary' style='margin-top:10px;margin-bottom:10px;'post-id='$post_id' id='$id'>More&nbsp;<i class='fa fa-arrow-circle-o-right' aria-hidden='true'></i></button></center>";
   
}

?>