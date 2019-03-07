<?php
require_once "../classes/config.php";
$conn = new config();
$sql_select = "SELECT * FROM categories ORDER BY ID DESC LIMIT 5";
$run_this = $conn->query($sql_select);
foreach ($run_this as $key => $value) {
    echo "<tr>";
    echo"<td><center><b>". $cat_value = $value["cat_value"]."</b></center></td>";
    echo"<td><center><button class='btn header-bg btn-delete' style='color:white;' id='{$value["id"]}'><b class='delete' >delete</b></button></center></td>";
    echo "</tr>";
}

?>