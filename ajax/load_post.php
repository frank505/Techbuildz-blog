<?php
require_once "../classes/config.php";
$conn = new config();
$get_variable = htmlspecialchars($_GET["id"]);
$sql_select = "SELECT * FROM post_content where id='$get_variable'";
$run_query = $conn->query($sql_select);
foreach ($run_query as $key => $value) {
    $header = $value["header"];
    $post = $value["post"];
    $category = $value["category"];
    $filename = $value["file_name"];
    echo "<center><h4><b>$header</b></h4></center><br>
    <center><img src='../assets/post_header_img/$filename'/ width='180' height='180'></center><br>
    <center>$post</center><br>
    <center>  </center>
    ";
}


?>