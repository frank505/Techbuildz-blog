<?php
ob_start();
require_once "../classes/config.php";
$conn = new config();
$conn->cookie("admin","email_hashed");
error_reporting(E_ERROR);
require_once "../classes/admin_videos.php";
$admin_videos = new admin_videos();
require_once "../body/admin/header.php";
require_once "../body/admin/side_bar.php";
require_once "../body/admin/video.php";
require_once "../body/admin/footer.php";
?>