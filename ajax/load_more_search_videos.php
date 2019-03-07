<?php
require_once "../classes/config.php";
$conn = new config();
$get_var = htmlspecialchars($_GET["search"]);
$id = htmlspecialchars($_GET["id"]);

$space_checker = preg_match("/\s/",$get_var); 

if($get_var==""){

  

}else{
 if($space_checker==0){

    $sql = "SELECT * FROM videos where id > '$id' AND header LIKE '%$get_var%' LIMIT 3";
     
    
$result = $conn->query($sql);
$rowcount = $conn->rowcount($result);
if($rowcount == 0){
    echo "<center><b> <i class='fa fa-warning'></i>&nbsp; oops!no more content with the word $get_var. </b></center>";
}else{

    foreach ($result as $key => $value) {
        $id = $value["id"];
        echo "<tr>";
        echo"<td><center><b>". $cat_value = $value["header"]."</b></center></td>";
        echo"<td><center><video  src='../assets/videos/". $cat_value = $value["video_name"]."' controls width='100' height='100'/></video></center></td>";
        echo"<td><center><input type='checkbox'class='check_me' id='{$value["id"]}'><b class='delete' ></b></button></center></td>";
        echo "</tr>";
    }
    echo " <center><button class='header-bg btn custom_btn search-more-content' id='$id'>More <i class='fa fa-arrow-circle-o-right' aria-hidden='true'></i> </button></center>";  
 
}




} else if($space_checker > 0){

    $value_explode = explode(" ",$get_var);

 foreach ($value_explode as $key => $value) {
     $sql = "SELECT * FROM videos where id > '$id' AND header LIKE '%$get_var%' OR '%$value%' ";
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
        echo"<td><center><b>". $cat_value = $value["header"]."</b></center></td>";
        echo"<td><center><video  src='../assets/videos/". $cat_value = $value["video_name"]."' controls width='100' height='100'/></video></center></td>";
        echo"<td><center><input type='checkbox'class='check_me' id='{$value["id"]}'><b class='delete' ></b></button></center></td>";
        echo "</tr>";
    }
   
    echo " <center><button class='header-bg btn custom_btn search-more-content' id='$id'>More <i class='fa fa-arrow-circle-o-right' aria-hidden='true'></i> </button></center>";  

}


}
  

}
    





?>