<?php
error_reporting(E_ERROR);
require_once "../classes/config.php";
$conn = new config();
$conn->cookie("admin","email_hashed");
require_once "../classes/view_content.php";
$view_content = new view_content(); 
require_once "../body/admin/header.php";
require_once "../body/admin/side_bar.php";
require_once "../body/admin/view-content-body.php";
require_once "../body/admin/footer.php";
?>