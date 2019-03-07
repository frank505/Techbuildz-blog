<?php
require_once "../classes/config.php";
$conn = new config();
$sql_run = "SELECT * FROM portfolio ORDER BY ID DESC LIMIT 5";
$run_query = $conn->query($sql_run);
if($run_query){
    foreach ($run_query as $key => $value) {
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
}



?>