<?php
require_once "../classes/config.php";
$conn = new config();
$get_var = htmlspecialchars($_GET["get_var"]);
$space_checker = preg_match("/\s/",$get_var);
if($get_var==""){

 } else {
   if($space_checker==0){
    $sql = "SELECT * FROM messages where message LIKE '%$get_var%' LIMIT 3";


$result = $conn->query($sql);
        $rowcount = $conn->rowcount($result);
        if($rowcount == 0){
            echo "<center><b> <i class='fa fa-warning'></i>&nbsp; oops!this content doesnt exist. </b></center>";
        }else{
        
            foreach ($result as $key => $value) {
                echo "<tr>";
                echo"<td><center><button data-toggle='modal' data-target='#myModal' class='header-bg btn' id='{$value["id"]}'><i class='fa fa-eye'></i></button></center></td>";
                echo"<td><center><button data-toggle='modal' data-target='#myModal1'class='header-bg btn' id-reply={$value["id"]}><i class='fa fa-mail-reply' aria-hidden='true'></i></button></center></td>";
            echo"<td><center><input type='checkbox'class='check_me_message' id='{$value["id"]}'><b class='delete' ></b></button></center></td>";
                echo "</tr>"; 
                
            }
            echo " <center><button class='header-bg btn custom_btn search-more-content-messages' id='{$value["id"]}'>More <i class='fa fa-arrow-circle-o-right' aria-hidden='true'></i> </button></center>";  
         
        }
    



   }elseif ($space_checker > 0) {
        
$value_explode = explode(" ",$get_var);

 foreach ($value_explode as $key => $value) {
     $sql = "SELECT * FROM advert where header LIKE '%$get_var%' OR '%$value%' ";
 }
     $sql.="LIMIT 3";
          
$result = $conn->query($sql);
$rowcount = $conn->rowcount($result);
if($rowcount == 0){
    echo "<center><b> <i class='fa fa-warning'></i>&nbsp; oops!this content doesnt exist. </b></center>";
}else{

    foreach ($result as $key => $value) {
        echo "<tr>";
        echo"<td><center><button data-toggle='modal' data-target='#myModal' class='header-bg btn' id='{$value["id"]}'><i class='fa fa-eye'></i></button></center></td>";
        echo"<td><center><button data-toggle='modal' data-target='#myModal1'class='header-bg btn' id-reply={$value["id"]}><i class='fa fa-mail-reply' aria-hidden='true'></i></button></center></td>";
    echo"<td><center><input type='checkbox'class='check_me_message' id='{$value["id"]}'><b class='delete' ></b></button></center></td>";
        echo "</tr>"; 
        
    }
   
    echo "<center><button class='header-bg btn custom_btn search-more-content-messages' id='$id'>More <i class='fa fa-arrow-circle-o-right' aria-hidden='true'></i> </button></center>";  

}


 

   }

 

}



    




?>