<?php
require_once "../classes/config.php";
$conn = new config();
$id = htmlspecialchars($_GET["id"]);
$sql_select ="SELECT * FROM messages where id='$id'";
$run_query = $conn->query($sql_select);
foreach ($run_query as $key => $value) {
  $email = $value["email"];
  echo $email;
}


?>