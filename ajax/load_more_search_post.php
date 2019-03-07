<?php
require_once "../classes/config.php";
$conn = new config();
$get_var = htmlspecialchars($_GET["search"]);
$id = htmlspecialchars($_GET["id"]);

$space_checker = preg_match("/\s/",$get_var); 

if($get_var==""){

  

}else{
 if($space_checker==0){

    $sql = "SELECT * FROM post_content where id > '$id' AND header LIKE '%$get_var%' LIMIT 3";
     
    
$result = $conn->query($sql);
$rowcount = $conn->rowcount($result);
if($rowcount == 0){
    echo "<center><b> <i class='fa fa-warning'></i>&nbsp; oops!no more content with the word $get_var. </b></center>";
}else{

    foreach ($result as $key => $value) {
        $id = $value["id"];
        echo "<tr>";
        echo"<td><center><b>". $cat_value = substr($value["header"],0,25)."</b></center></td>";
        echo"<td><center><button class='btn  header-bg  view' data-toggle='modal' data-target='#myModal' style='color:white;' id='{$value["id"]}'><b class='delete' >
        &nbsp;<i class='fa fa-eye' aria-hidden='true'></i>&nbsp;
        </b></button></center></td>";
        echo"<td><center><a href='update-content.php?update=$id'><button class='btn  header-bg ' style='color:white;'><b class='delete'>
       &nbsp;<i class='fa fa-refresh' aria-hidden='true'></i>&nbsp;</b></button></a></center></td>";
         echo"<td><center><input type='checkbox' class='check-all' id='$id'/></center></td>";
        echo "</tr>";  
    
    }
    echo " <center><button class='header-bg btn custom_btn search-more' id='$id'>More <i class='fa fa-arrow-circle-o-right' aria-hidden='true'></i> </button></center>";  
 
}




} else if($space_checker > 0){

    $value_explode = explode(" ",$get_var);

 foreach ($value_explode as $key => $value) {
     $sql = "SELECT * FROM post_content where id > '$id' AND header LIKE '%$get_var%' OR '%$value%' ";
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
    echo"<td><center><b>". $cat_value = substr($value["header"],0,25)."</b></center></td>";
    echo"<td><center><button class='btn  header-bg  view' data-toggle='modal' data-target='#myModal' style='color:white;' id='{$value["id"]}'><b class='delete' >
    &nbsp;<i class='fa fa-eye' aria-hidden='true'></i>&nbsp;
    </b></button></center></td>";
    echo"<td><center><a href='update-content.php?update=$id'><button class='btn  header-bg ' style='color:white;'><b class='delete'>
   &nbsp;<i class='fa fa-refresh' aria-hidden='true'></i>&nbsp;</b></button></a></center></td>";
     echo"<td><center><input type='checkbox' class='check-all' id='$id'/></center></td>";
    echo "</tr>";
    
    }
   
    echo " <center><button class='header-bg btn custom_btn search-more' id='$id'>More <i class='fa fa-arrow-circle-o-right' aria-hidden='true'></i> </button></center>";  

}


}
  

}
    





?>