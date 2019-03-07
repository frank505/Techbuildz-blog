<?php
require_once "../classes/config.php";
$conn = new config();
$conn->destroycookie();
header("location:index.php");

?>