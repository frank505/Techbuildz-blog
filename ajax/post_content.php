<?php
require_once "../classes/config.php";
// use PHPMailer\PHPMailer\PHPMailer;
// require_once "../vendor/autoload.php";
// $mail = new PHPMailer(true);
$conn = new config();
$mime_type  = array("image/jpeg","image/png", "image/jpg");
$header = filter_var($_POST["header"], FILTER_SANITIZE_STRING);
$text_area = html_entity_decode( stripslashes($_POST["text_area"]) );
$post_creator = htmlspecialchars(filter_var($_POST["post_creator"], FILTER_SANITIZE_STRING));
$category = filter_var($_POST["category"], FILTER_SANITIZE_STRING);
$filename = $_FILES["image"]["name"];
$tmp_name = $_FILES["image"]["tmp_name"];
$size = $_FILES["image"]["size"];
$timestamp = time();
$month = date("F");
$year = date("Y");
$combine = $month."/".$year;
$file_mime_type = mime_content_type(strtolower($tmp_name));
$surelinks = "Surelinks Media";
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

$sql_select_creator="SELECT * FROM admin where hashed_email='$post_creator'";
$run_me_creator = $conn->query($sql_select_creator);
$count_me_creator =  $conn->rowcount($run_me_creator);
if($count_me_creator==0){
    echo"oops sorry seems like you have a problem with your admin profile";
}else{
    foreach ($run_me_creator as $key => $value_me_creator) {
        $username = $value_me_creator["username"];
        $image = $value_me_creator["image"];
        $description = $value_me_creator["description"];
        $sql_query = "SELECT * FROM post_content where header='$header' AND category='$category'";
$run_query = $conn->query($sql_query);
$count_content = $conn->rowcount($run_query);
if($count_content==0){
    $temp = explode(".", $filename);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $sql_insert = "INSERT INTO post_content(header,post,category,recent_time,mth_yr_upload,file_name,month,year,content_creator_name,
    content_creator_image,content_creator_description) 
    VALUES('$header','$text_area','$category','$timestamp','$combine','$newfilename','$month','$year','$username','$image','$description')";
  $this_run = $conn->query($sql_insert);
  if($this_run){
      move_uploaded_file($tmp_name, "../assets/post_header_img/$newfilename");

/**
 * once new post is added send email to all subscribers here
 */
$sql_selct_sub = "SELECT * FROM subscription ";
$run_me_sub = $conn->query($sql_selct_sub);
foreach ($run_me_sub as $key => $value) {
   $sub_email = $value["email"];
//    $mail->isSMTP();                            // Set mailer to use SMTP
// $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                     // Enable SMTP authentication
// $mail->Username = 'akpufranklin333@gmail.com';          // SMTP username
// $mail->Password = 'akpufranklin202'; // SMTP password
// $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 587;                          // TCP port to connect to
// $mail->addAddress($sub_email);   // Add a recipient
// $mail->isHTML(true);  // Set email format to HTML
// $mail->setFrom('techbuildz@blog.techbuildz.com', 'TechBuildz');
// $mail->SMTPDebug  = 0; 
// $bodyContent = "new blog post has just been added focusing on  <b>$category</b>  you might want to check it out
// <a href='http://blog.techbuildz.com/read-more/$category/$header'>here</a>"; 
// $mail->Subject = "$header";
// $mail->Body    = $bodyContent;
// if(!$mail->send()) {
//     echo 'there seems to be an error please check your internet connection';
// } else {
//     echo "<b><i class='fa fa-check-circle-o' aria-hidden='true'></i>&nbsp;new post has been added succesfully</b>";
// }
}


echo"<b><i class='fa fa-check-circle-o' aria-hidden='true'></i>&nbsp;new post has been added succesfully</b>";


  }
}else{
    echo"<b><i class='fa fa-check-circle-o' aria-hidden='true'></i>&nbsp;post with the same header already exist please remodify the header</b>";
}
       










    }
}

}


?>