<?php
require_once "../classes/config.php";
$conn = new config();
$get_variable = htmlspecialchars($_GET["get_var"]);
$space_checker = preg_match("/\s/",$get_variable);
if($get_variable==""){

 }else{

 if($space_checker==0){


    $sql_search = "SELECT header,ID FROM post_content WHERE header LIKE '%$get_variable%' UNION SELECT header,ID 
    FROM videos WHERE header LIKE '%$get_variable%' ORDER BY ID DESC LIMIT 20";
    $run_me = $conn->query($sql_search);
    $count_me = $conn->rowcount($run_me);
    if($count_me==0){
        echo "<center><b> <i class='fa fa-warning'></i>&nbsp; oops! $get_variable cannot be found. </b></center>";
    }else{
        foreach ($run_me as $key => $value) {
        $header = $value["header"];
   $sql_me = "SELECT * FROM post_content where header='$header'";
   $run_this_query = $conn->query($sql_me);
   $count_me = $conn->rowcount($run_this_query);
   if($count_me==0){
    $sql_mess = "SELECT * FROM videos where header='$header'";
    $run_this_p = $conn->query($sql_mess);
    foreach ($run_this_p as $key => $values) {
        $videos = $values["video_name"];
        echo "<div class='search_vid'><video src='assets/videos/$videos'controls height='100' width='100'></video>";
        echo"<a href='assets/videos/$videos'/>$header</a></div>";
    } 
   } else{
    foreach ($run_this_query as $key => $valuess) {
        $id_val =$valuess["id"];
        $file_name = $valuess["file_name"];
        $header = $valuess["header"];
        $category = $valuess["category"];
        echo "<div class='search_post'><a href='blog/read-more/$category/$header'/>
        <img src='assets/post_header_img/$file_name' width='100' height='100'/>
       <b class='bold_me' style='font-size: 20px;margin-left: 30px;margin-right: 10px;'>$header</b>
        <small>$category</small>
        </a><br></div>";
    }        
    
   }
        }  
       
    }
    
 } else if($space_checker > 0){   
    $value_explode = explode(" ",$get_variable);
 foreach ($value_explode as $key => $value) {
     $sql = "SELECT header,ID FROM post_content WHERE header LIKE '%$get_variable%' OR header like '%$value%'
      UNION SELECT header,ID FROM videos WHERE header LIKE '%$get_variable%' OR header LIKE '%$value%'";
 }
     $sql.="ORDER BY ID DESC LIMIT 20";

     $result = $conn->query($sql);
     $rowcount = $conn->rowcount($result);
     if($rowcount == 0){
        echo "<center><b> <i class='fa fa-warning'></i>&nbsp; oops! $get_variable cannot be found. </b></center>";
     } else{
            foreach ($result as $key => $value) {
            $header = $value["header"];
       $sql_me = "SELECT * FROM post_content where header='$header'";
       $run_this_query = $conn->query($sql_me);
       $count_me = $conn->rowcount($run_this_query);
       if($count_me==0){
        $sql_mess = "SELECT * FROM videos where header='$header'";
        $run_this_p = $conn->query($sql_mess);
        foreach ($run_this_p as $key => $values) {
            $videos = $values["video_name"];
            echo "<div class='search_vid'><video src='assets/videos/$videos'controls height='100' width='100'></video>";
            echo"<a href='assets/videos/$videos'/>$header</a></div><br>";
        } 
       } else{
        foreach ($run_this_query as $key => $valuess) {
            $id_val =$valuess["id"];
            $file_name = $valuess["file_name"];
            $header = $valuess["header"];
            $category = $valuess["category"];
            echo "<div class='search_post'><a href='blog/read-more/$category/$header'/>
            <img src='assets/post_header_img/$file_name' width='100' height='100'/>
            <b style='font-size: 20px;margin-left: 30px;margin-right: 10px;'>$header</b>
            <small>$category</small></a></div><br>";
        }        
        
       }
            }
               
    
        }       
    
    }
        
              
     }


 



 



?>