<?php
require_once "../classes/config.php";
$conn = new config();
$get_var = htmlspecialchars($_GET["value"]);
$id = htmlspecialchars($_GET["id"]);

$space_checker = preg_match("/\s/",$get_var); 

if($get_var==""){

  

}else{
 if($space_checker==0){

    $sql = "SELECT * FROM comments_table where id > '$id' AND post_content LIKE '%$get_var%' LIMIT 3";
     
    
$result = $conn->query($sql);
$rowcount = $conn->rowcount($result);
if($rowcount == 0){
    echo "<center><b> <i class='fa fa-warning'></i>&nbsp; oops!no more content with the word $get_var. </b></center>";
}else{

    foreach ($result as $key => $value) {
        $id = $value["id"];
        echo "<tr>";
        echo"<td><center><b>". $username = $value["username"]."</b></center></td>";
        echo"<td><center><button class='btn  header-bg view-comments ' data-toggle='modal' data-target='#myModal' style='color:white;' id-view-comments='{$value["id"]}'><b class='delete' ><i class='fa fa-eye'></i></b></button></center></td>";
        echo"<td><center><button class='btn  header-bg view-post ' style='color:white;' data-toggle='modal' data-target='#myModal' id-view='{$value["post_id"]}'><b class='delete' ><i class='fa fa-eye'></i></b></button></center></td>";
        echo"<td><center><a href='replies.php?id=$id'><button class='btn  header-bg ' style='color:white;' ><b class='delete' ><i class='fa fa-reply' aria-hidden='true'></i></b></button></a></center></td>";
        echo"<td><center><button class='btn  header-bg approve-comments ' style='color:white;' id-approve='{$value["id"]}'><b class='delete' ><i class='fa fa-plus' aria-hidden='true'></i></b></button><br>
        <b class='approve-text' id-text-approve='$id'>{$value["approval"]}</b></center></td>";
        echo"<td><center><input type='checkbox' class='check_comments' id-delete='$id'/></center></td>";
        echo "</tr>";
    
                    
                
                }
                echo " <center><button class='header-bg btn custom_btn search-more-comments' id='$id'>More <i class='fa fa-arrow-circle-o-right' aria-hidden='true'></i> </button></center>";  
    


}




} else if($space_checker > 0){

    $value_explode = explode(" ",$get_var);

 foreach ($value_explode as $key => $value) {
     $sql = "SELECT * FROM comments_table where id > '$id' AND post_content LIKE '%$get_var%' OR '%$value%' ";
 }
     $sql.="LIMIT 3";
          
$result = $conn->query($sql);
$rowcount = $conn->rowcount($result);
if($rowcount == 0){
    echo "<center><b> <i class='fa fa-warning'></i>&nbsp; oops!no more content with the word $get_var</b></center>";
}else{

    foreach ($result as $key => $value) {
        $id = $value["id"];
        echo "<tr>";
        echo"<td><center><b>". $username = $value["username"]."</b></center></td>";
        echo"<td><center><button class='btn  header-bg view-comments ' data-toggle='modal' data-target='#myModal' style='color:white;' id-view-comments='{$value["id"]}'><b class='delete' ><i class='fa fa-eye'></i></b></button></center></td>";
        echo"<td><center><button class='btn  header-bg view-post ' style='color:white;' data-toggle='modal' data-target='#myModal' id-view='{$value["post_id"]}'><b class='delete' ><i class='fa fa-eye'></i></b></button></center></td>";
        echo"<td><center><a href='replies.php?id=$id'><button class='btn  header-bg ' style='color:white;' ><b class='delete' ><i class='fa fa-reply' aria-hidden='true'></i></b></button></a></center></td>";
        echo"<td><center><button class='btn  header-bg approve-comments ' style='color:white;' id-approve='{$value["id"]}'><b class='delete' ><i class='fa fa-plus' aria-hidden='true'></i></b></button><br>
        <b class='approve-text' id-text-approve='$id'>{$value["approval"]}</b></center></td>";
        echo"<td><center><input type='checkbox' class='check_comments' id-delete='$id'/></center></td>";
        echo "</tr>";
    
                    
                
                }
                echo " <center><button class='header-bg btn custom_btn search-more-comments' id='$id'>More <i class='fa fa-arrow-circle-o-right' aria-hidden='true'></i> </button></center>";  
    
}


}
  

}
    





?>