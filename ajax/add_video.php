<?php
require_once "../classes/config.php";
$conn = new config();
$get_header = filter_var($_POST["header"], FILTER_SANITIZE_STRING);
$file_name = $_FILES["video"]["name"];
$tmp_name = $_FILES["video"]["tmp_name"];
$file_size = $_FILES["video"]["size"];
$time = time();
$month = date("F");
$year = date("Y");
$combine = $month."/".$year;
if($get_header==""){
    echo " <b><i class='fa fa-exclamation-circle' aria-hidden='true'></i> &nbsp;oops! header field is empty</b>";
}else if($file_size > 10485760){
    echo " <b><i class='fa fa-exclamation-circle' aria-hidden='true'></i> &nbsp;oops! this file is larger than 2mb</b>";
}else if(!($conn->check_doc_mime( $tmp_name ))){
    echo " <b><i class='fa fa-exclamation-circle' aria-hidden='true'></i> &nbsp;oops! please be sure that this is an mp4 flv or avi file</b>";
}else {
    $temp = explode(".", $file_name);
        $newfilename = round(microtime(true)) . '.' . end($temp);
 $sql_insert = "INSERT INTO videos(header,recent_time,video_name,archive_format) VALUES('$get_header','$time','$newfilename',
 '$combine')";
 $run_query = $conn->query($sql_insert);
 if($run_query){
     move_uploaded_file($tmp_name, "../assets/videos/$newfilename");
     echo "<b><i class='fa fa-check-user-o'></i> this video has been successfully uploaded</b>";
 }

}




?>