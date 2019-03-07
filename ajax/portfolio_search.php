<?php
require_once "../classes/config.php";
$conn = new config();
$get_var = htmlspecialchars($_GET["get_var"]);
$space_checker = preg_match("/\s/",$get_var);
if($get_var==""){

 } else {
   if($space_checker==0){
    $sql = "SELECT * FROM portfolio where header LIKE '%$get_var%' LIMIT 3";
$result = $conn->query($sql);
        $rowcount = $conn->rowcount($result);
        if($rowcount == 0){
            echo "<center><b> <i class='fa fa-warning'></i>&nbsp; oops!this content doesnt exist. </b></center>";
        }else{
        
            foreach ($result as $key => $value) {
                $id = $value["id"];
                    $header = $value["header"];
                    $url = $value["url"];
                    $file_name = $value["file_name"];
                    $id = $value["id"];
                    echo "<tr>
                    <td><b>$header</b></td>
                    <td><b>$url</b></td>
                    <td><img src='../assets/portfolio/$file_name' style='width:100%;height:90px;'/></td>
                    <td><input type='checkbox' id='$id' class='check-me-port'/></td>
                    </tr>";        
            }
            echo " <center><button class='header-bg btn custom_btn search-more-content-port' id='$id'>More <i class='fa fa-arrow-circle-o-right' aria-hidden='true'></i> </button></center>";  
         
        }
    



   }elseif ($space_checker > 0) {
        
$value_explode = explode(" ",$get_var);

 foreach ($value_explode as $key => $value) {
     $sql = "SELECT * FROM portfolio where header LIKE '%$get_var%' OR '%$value%' ";
 }
     $sql.="LIMIT 3";
          
$result = $conn->query($sql);
$rowcount = $conn->rowcount($result);
if($rowcount == 0){
    echo "<center><b> <i class='fa fa-warning'></i>&nbsp; oops!this content doesnt exist. </b></center>";
}else{

    foreach ($result as $key => $value) {
        $id = $value["id"];
         $header = $value["header"];
        $url = $value["url"];
         $file_name = $value["file_name"];
        $id = $value["id"];
        echo "<tr>
            <td><b>$header</b></td>
            <td><b>$url</b></td>
            <td><img src='../assets/portfolio/$file_name' style='width:100%;height:90px;'/></td>
            <td><input type='checkbox' id='$id' class='check-me-port'/></td>
            </tr>";
           
    }
   
    echo " <center><button class='header-bg btn custom_btn search-more-content-port' id='$id'>More <i class='fa fa-arrow-circle-o-right' aria-hidden='true'></i> </button></center>";  

}


 

   }

 

}



    




?>