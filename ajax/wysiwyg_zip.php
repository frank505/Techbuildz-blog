<?php
$mime_type  = array("application/zip","application/x-rar");
$filename = $_FILES['zip_file']['name'];
$tmp_name = $_FILES["zip_file"]["tmp_name"]; 
$file_size = $_FILES["zip_file"]["size"];
$file_mime_type = mime_content_type(strtolower($tmp_name));
if($file_size > 10485760){
    echo "<i class='fa fa-warning'></i>oops".$filename."&nbsp; is larger than 10mb please check the zip file";
}else if(!(in_array($file_mime_type, $mime_type))){
    echo "<i class='fa fa-warning'></i>oops".$filename."has an unacceptable mime type please be sure its zip or x-rar";

}else{
    $temp = explode(".", $filename);
        $newfilename = round(microtime(true)) . '.' . end($temp);
    if(move_uploaded_file($tmp_name, "../assets/wysiwyg_zip/" . $newfilename)){
        echo "<center><a href='../assets/wysiwyg_zip/$filename' ><img src='../assets/img/zip.jpg' width='180' height='180'/></a></center>";
    }        
     
}







?>