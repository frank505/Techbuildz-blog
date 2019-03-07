<?php
header("Content-Type: application/json; charset=UTF-8");
require_once "../classes/config.php";
$conn = new config();
$year = date("Y");
$sql = "SELECT * FROM continent_detection where year='$year'";
$run_query = $conn->query($sql);
$data = array();
foreach ($run_query as $row) {
	$data[] = $row;
}

print json_encode($data);


?>