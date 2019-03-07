<?php
ob_start();
error_reporting(E_ERROR);
require_once "../classes/config.php";
$conn = new config();
$conn->cookie("admin","email_hashed");
require_once "../classes/post_content.php";
$post_content = new post_content();
require_once "../classes/update_content.php";
$update_content = new update_content(); 
require_once "../body/admin/header.php";
require_once "../body/admin/side_bar.php";
require_once "../body/admin/update-content-body.php";
require_once "../body/admin/footer.php";
?>