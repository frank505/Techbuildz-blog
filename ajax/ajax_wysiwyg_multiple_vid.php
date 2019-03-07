<?php
require_once "../classes/config.php";
$conn = new config();
@$count = count($_FILES['files']['name']);
for ($i = 0; $i < $count; $i++) {
$filename = $_FILES['files']['name'][$i];
$tmp_name = $_FILES["files"]["tmp_name"][$i]; 
$file_size = $_FILES["files"]["size"][$i];
if($file_size > 10485760){
    echo "<i class='fa fa-warning'></i>oops".$filename."&nbsp; is larger than 10mb please check the image";
}else if( !($conn->check_doc_mime( $tmp_name ))  ) {
    echo "<i class='fa fa-warning'></i>oops".$filename.
    "has an unacceptable mime type please be sure its an mp4 flv or an avi file";    
    }
   else{
  
    if(move_uploaded_file($tmp_name, "../assets/wysiwyg_video/" . $filename)){
        echo "<li class='li-restyle'><center><video class='vid_up'controls src='../assets/wysiwyg_video/$filename' width='180' height='180'/></center></li>";
    }        
            
     
}



}




?>