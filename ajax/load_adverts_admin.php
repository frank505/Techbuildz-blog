<?php
require_once "../classes/config.php";
$conn = new config();
$run_query = "SELECT * FROM advert ORDER BY ID DESC LIMIT 5";   
$data = $conn->query($run_query);
foreach ($data as $key => $value) {
    echo "<tr>";
    echo"<td><center><b>". $cat_value = $value["header"]."</b></center></td>";
    echo"<td><center><b>". $cat_value = $value["url_entered"]."</b></center></td>";
    echo"<td><center><img  src='../assets/adverts/". $cat_value = $value["file_name"]."' controls width='100' height='100'/></center></td>";
    echo"<td><center><input type='checkbox'class='check_me_advert' id='{$value["id"]}'><b class='delete' ></b></button></center></td>";
    echo "</tr>";
 }


?>