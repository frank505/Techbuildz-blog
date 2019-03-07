<?php
require_once "../classes/config.php";
$conn = new config();
$get_var = htmlspecialchars($_GET["get_var"]);

if($get_var==""){





}




$keys = explode(" ",$get_var);
$sql = "SELECT * FROM categories WHERE cat_value LIKE '%$get_var%' ";
foreach($keys as $k){
    $sql .= " OR cat_value LIKE '%$k%' ";
}

$result = $conn->query($sql);
$rowcount = $conn->rowcount($result);
if($rowcount==0){
    echo "<center><b> <i class='fa fa-warning'></i>&nbsp; oops!this content doesnt exist. </b></center>";
}else{

    foreach ($result as $key => $value) {
        echo "<tr>";
        echo"<td><center><b>". $cat_value = $value["cat_value"]."</b></center></td>";
        echo"<td><center><button class='btn header-bg btn-delete' style='color:white;' id='{$value["id"]}'><b class='delete' >delete</b></button></center></td>";
        echo "</tr>";    
    }
    

}




?>