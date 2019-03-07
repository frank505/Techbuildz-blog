<?php
$mime_type  = array("image/jpeg","image/png", "image/jpg");
@$count = count($_FILES['file']['name']);
for ($i = 0; $i < $count; $i++) {
$filename = $_FILES['file']['name'][$i];
$tmp_name = $_FILES["file"]["tmp_name"][$i]; 
$file_size = $_FILES["file"]["size"][$i];
$file_mime_type = mime_content_type(strtolower($tmp_name));
if($file_size > 2097152){
    echo "<i class='fa fa-warning'></i>oops".$filename."&nbsp; is larger than 2mb please check the image";
}else if(!(in_array($file_mime_type, $mime_type))){
    echo "<i class='fa fa-warning'></i>oops".$filename."has an unacceptable mime type please be sure its jpeg ,png or jpg";

}else{
    
    if(move_uploaded_file($tmp_name, "../assets/wysiwyg_image/" . $filename)){
        echo "<img class='img_up' src='../assets/wysiwyg_image/$filename' width='180' height='180'/>";
    }        
     
}


}




?>