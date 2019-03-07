<?php
require_once "../classes/config.php";
$conn = new config();
$run_query = "SELECT * FROM videos ORDER BY ID DESC LIMIT 5";   
$data = $conn->query($run_query);
foreach ($data as $key => $value) {
    echo "<tr>";
    echo"<td><center><b>". $cat_value = $value["header"]."</b></center></td>";
    echo"<td><center><video  src='../assets/videos/". $cat_value = $value["video_name"]."' controls width='100' height='100'/></video></center></td>";
    echo"<td><center><input type='checkbox'class='check_me' id='{$value["id"]}'><b class='delete' ></b></button></center></td>";
    echo "</tr>";
 }


?>