<?php
require_once "../classes/config.php";
$conn = new config();
$id = htmlspecialchars($_GET["id"]);
$sql_select = "SELECT * FROM post_content where id='$id'";
$run_query = $conn->query($sql_select);
foreach ($run_query as $key => $value) {
  echo "../assets/post_header_img/".$value["file_name"]."";
}



?>