<?php
$mime_type  = array("image/jpeg","image/png", "image/jpg");
require_once "../classes/config.php";
$conn = new config();
$get_header = filter_var($_POST["header"], FILTER_SANITIZE_STRING);
$file_name = $_FILES["image"]["name"];
$tmp_name = $_FILES["image"]["tmp_name"];
$file_size = $_FILES["image"]["size"];
$url = htmlspecialchars($_POST["url"]);
$time = time();
$month = date("F");
$year = date("Y");
$combine = $month."/".$year;
$file_mime_type = mime_content_type(strtolower($tmp_name));
if($get_header==""){
    echo " <b><i class='fa fa-exclamation-circle' aria-hidden='true'></i> &nbsp;oops! header field is empty</b>";
}else if($file_size > 2097152){
    echo " <b><i class='fa fa-exclamation-circle' aria-hidden='true'></i> &nbsp;oops! this file is larger than 2mb</b>";
}else if(!(in_array($file_mime_type, $mime_type))){
    echo " <b><i class='fa fa-exclamation-circle' aria-hidden='true'></i> &nbsp;oops! please be sure that this is an jpeg, jpg or png file</b>";
}else {
    $temp = explode(".", $file_name);
        $newfilename = round(microtime(true)) . '.' . end($temp);
 $sql_insert = "INSERT INTO portfolio(header,recent_time,file_name,archive_format,url) VALUES('$get_header','$time','$newfilename',
 '$combine','$url')";
 $run_query = $conn->query($sql_insert);
 if($run_query){
     move_uploaded_file($tmp_name, "../assets/portfolio/$newfilename");
     echo "<b><i class='fa fa-check-user-o'></i> this was successfully uploaded</b>";
 }

}




?>