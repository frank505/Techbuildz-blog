<?php
require_once "../classes/config.php";
class read_more{
private $conn;
private $user_cookie;
public function __construct(){
    $this->conn = new config();
$this->user_cookie =  $this->conn->user_cookie;
}

public function fetch_full_post($get_var,$categories){
$sql_select = "SELECT * FROM post_content WHERE header='$get_var' AND category='$categories'";
$run_query = $this->conn->query($sql_select);
$rowcount = $this->conn->rowcount($run_query);
if($rowcount==0){
   
}else{
  foreach ($run_query as $key => $value) {
      $header = $value["header"];
      $post = $value["post"];
      $category = $value["category"];
      $mth_yr_upload = $value["mth_yr_upload"];
      $file_name = $value["file_name"];
      $clicks = $value["clicks"];
      $shares  = $value["shares"];
      echo "
      <div class='line-under'>
<div class='first-line'></div><center class='margin-bottom'><h4 class='first-header-post'> <b>$category</b></h4></center><div class='second-line second-line-rewrite'></div>
</div>
<center style='margin-bottom:1px solid  #f5f3f3;'><h4 class='second-header-post'><b>$header</b></h4></center><br>
<div class='second-core-content'>
<center style='margin-bottom:20px;margin-top:20px;'><b><i class='fa fa-eye'></i>&nbsp;$clicks views&nbsp;&nbsp;<i class='fa fa-calendar-o'></i>&nbsp;$mth_yr_upload
</b></center>
 <div class='row'>
 <div class='col-md-12'>
 <center>
 <img src='assets/post_header_img/$file_name' style='width:90%;margin-left:5%;margin-right:5%;height:300px;margin-bottom:20px;'/> 
 </center>
</div>
<div class='col-md-12 col-12 col-lg-12 read-me'>
<center>$post</center>

</div>
 
 </div>  

</div>      
      "; 

}
 }
}


public function related_post($get_var,$categories){
$sql_select = "SELECT * FROM post_content where header='$get_var' AND category='$categories'";
$run_query = $this->conn->query($sql_select);
foreach ($run_query as $key => $value) {
        $category = $value["category"];
        $id_post = $value["id"];
        $sql = "SELECT * from post_content where category='$category' and id<'$id_post' ORDER BY ID DESC LIMIT 6";
        $run_this= $this->conn->query($sql);
        foreach ($run_this as $key => $value) {
            $header = $value["header"];
            $post = $value["post"];
            $category = $value["category"];
            $mth_yr_upload = $value["mth_yr_upload"];
            $file_name = $value["file_name"];
            $clicks = $value["clicks"];
            $shares  = $value["shares"];
            $id = $value["id"];
        echo "
          <div class='col-md-5 col-lg-3 col-5 bordered-cont border-me-please'>
          <a href='blog/read-more/$category/$header' class='custom-text-decoration'/>
          <div class='header more-style-me' style='margin-top:20px;margin-bottom:20px;'><b>".$header."</b></div>
          <img src='assets/post_header_img/$file_name' style='width:100%;height:140px;'/></a>        
          </div>  ";
               }
}


}

public function clicks_adder($get_var,$categories){
    $get_variable_check = htmlspecialchars($get_var);
    if(isset($get_variable_check)){
        $sql_checker = "SELECT * FROM post_content where header='$get_variable_check'AND category='$categories'";
        $run_query = $this->conn->query($sql_checker);
        if($run_query){
            foreach ($run_query as $key => $value) {
                 $clicks = $value["clicks"];
                 $multiply = $clicks * 1;
                 $multiply++;
                 $sql_update = "UPDATE post_content SET clicks='$multiply' WHERE header='$get_variable_check' AND category='$categories' ";
                 $run_this = $this->conn->query($sql_update);

            }
        }
    }
}

public function hidden_cookie(){
    if(!isset($_COOKIE[$this->user_cookie])){
     return "";
    }else{
        return $_COOKIE[$this->user_cookie];
    }
   
}

public function most_shared_post(){
$sql_select = "SELECT * FROM post_content ORDER BY shares DESC LIMIT 7";
$run_query = $this->conn->query($sql_select);
foreach ($run_query as $key => $value) {
   $file_name = $value["file_name"];
   $category = $value["category"];
   $shares = $value["shares"];
   $header = $value["header"];
   $id = $value["id"];
   echo "
   <div class='content'>
   <a href='blog/read-more/$category/$header' class='custom-text-decoration'>
   <div class='row'>

<div class='col-md-3'>
    <img src='assets/post_header_img/$file_name' style='width:100%;height:70px;margin-top: 5px;margin-bottom: 10px;' alt='image' srcset=''>
</div>

<div class='col-md-9'>
    <div class='reduce-size'>$category | <i class='fa fa-share-square' aria-hidden='true'></i> $shares shares</div>
    <b>$header</b>
</div>
</div>
</a>
    </div> ";
}

}

public function fetch_paginated_comments($get_var,$cateogries){
    $get_var = htmlspecialchars($get_var);
    $sql_select="SELECT * FROM post_content where header='$get_var' AND category='$categories'";
    $run_query = $this->conn->query($sql_select);
    foreach ($run_query as $key => $values) {
        $id = $values["id"];
        $approved="approved";
        $sql_comments = "SELECT * FROM comments_table where post_id='$id' AND approval='$approved' ORDER BY ID DESC LIMIT 3";
        $run_queries = $this->conn->query($sql_comments);
        foreach ($run_queries as $key => $value) {
             $comment_id= $value["id"];
             $username = $value["username"];
             $post_content = $value["post_content"];
             $post_id  = $value["post_id"];
             echo"
               <div class='content-comment'>
               <b>$username</b><br>
               <b>$post_content</b><br>
               <button class='btn-load-replies btn btn-primary' id-post='$post_id' id-replies='$comment_id'>Replies</button><br>
               <div class='replies-area'>
               <center><p><b>reply to <b style='color:rgb(251, 126, 168);'>$username</b> comment</b></p></center>
               <textarea class='form-control text-inputter-replies'></textarea><br>
               <div class='validation-inputter-replies  more-designs-here'></div><br>
               <button class='btn-post-replies btn btn-primary' id-pst-replies='$post_id' comment-id='$comment_id'>Submit</button>
               </div>
               </div>
               
             ";
        }
        echo "<center><button class='more-comments btn btn-primary' style='margin-top:10px;margin-bottom:10px;'post-id='$post_id' id='$comment_id'>More&nbsp;<i class='fa fa-arrow-circle-o-right' aria-hidden='true'></i></button></center>";     
    }
  
}

public function get_post_id($get_var,$categories)
{
    $sql_select = "SELECT * FROM post_content where header='$get_var' AND category='$categories'";
    $run_me = $this->conn->query($sql_select);
    foreach ($run_me as $key => $value) {
       $id = $value["id"];
       return $id;
    }
}

public function fetch_total_comments($get_var,$categories){
    $sql_select = "SELECT * FROM post_content where header='$get_var' AND category='$categories'";
    $run_me = $this->conn->query($sql_select);
    foreach ($run_me as $key => $value) {
       $id = $value["id"];
       $approved = "approved";
       $sql="SELECT * from comments_table where post_id='$id' AND approval='$approved'";
    $run_query = $this->conn->query($sql);
    $rowcount = $this->conn->rowcount($run_query);
    return $rowcount;
    }
    
}
  
public function fetch_posters_details($get_var, $categories)
{
$sql_select = "SELECT * FROM post_content where header='$get_var' AND category='$categories'";
$run_query = $this->conn->query($sql_select);
foreach ($run_query as $key => $value) {
    $username = $value["content_creator_name"];
    $Image = $value["content_creator_image"];
    $description = $value["content_creator_description"];
    echo"<center><img src='assets/admin_image/$Image' style='width:100px;height:100px;border-radius:50%;'/></center>";
    echo "<center><h4><b>$username</b></h4></center>";
    echo"<center><div style='font-size:15px;'>$description</div></cente>";
}
}

//end of this class
}