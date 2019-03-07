<?php
require_once "../classes/config.php";
$conn = new config();
$id = htmlspecialchars($_GET["id"]);
$sql_select ="SELECT * FROM messages where id='$id'";
$run_query = $conn->query($sql_select);
foreach ($run_query as $key => $value) {
  $username = $value["username"];
  $email = $value["email"];
  $subject = $value["subject"];
  $message = $value["message"];

  echo "<center><p><b>name:&nbsp;$username</b></p></center>";
  echo "<center><p><b>email:&nbsp;$email</b></p></center>";
  echo "<center><p><b>subject:&nbsp;$subject</b></p></center>";
  echo "<center><p><b>message:&nbsp;$message</b></p></center>";
}


?>