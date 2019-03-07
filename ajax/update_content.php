<?php
require_once "../classes/config.php";
$conn = new config();
$mime_type  = array("image/jpeg","image/png", "image/jpg");
$header = filter_var($_POST["header"], FILTER_SANITIZE_STRING);
$text_area = stripslashes($_POST["text_area"]);
$category = filter_var($_POST["category"], FILTER_SANITIZE_STRING);
$filename = $_FILES["image"]["name"];
$tmp_name = $_FILES["image"]["tmp_name"];
$size = $_FILES["image"]["size"];
$hidden_elem = htmlspecialchars($_POST["hidden_elem"]);
$timestamp = time();
$month = date("F");
$year = date("Y");
$combine = $month."/".$year;
$file_mime_type = mime_content_type(strtolower($tmp_name));
if($header==""){
    echo"<i class='fa fa-warning'></i>&nbsp;oops! post header is empty";
}else if($text_area==""){
    echo"<i class='fa fa-warning'></i>&nbsp;oops! post content area is empty";
}else if($filename==""){
    echo"<i class='fa fa-warning'></i>&nbsp;oops! please select a file";
} else if($category=="categories"){
    echo"<i class='fa fa-warning'></i>&nbsp;oops! categories cannot be left empty";
} else if(  !(in_array($file_mime_type, $mime_type)) ){
    echo"<i class='fa fa-warning'></i>&nbsp;oops! be sure its an image file of png jpg or jpeg";
} else if($size > 2097152){
    echo "<i class='fa fa-warning'></i>&nbsp;oops! this file is too large please ensure is not more than 2mb";
} 
else{
    $temp = explode(".", $filename);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $sql_insert = "UPDATE post_content SET header='$header', post='$text_area', category='$category',file_name='$newfilename'
    WHERE id='$hidden_elem'";
  $this_run = $conn->query($sql_insert);
  if($this_run){
      move_uploaded_file($tmp_name, "../assets/post_header_img/$newfilename");
      echo"<b><i class='fa fa-check-circle-o' aria-hidden='true'></i>&nbsp;post succesfully updated</b>";
  }    
}


?>