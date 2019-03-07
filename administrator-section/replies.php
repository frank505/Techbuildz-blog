<?php
ob_start();
error_reporting(E_ERROR);
require_once "../classes/config.php";
$conn = new config();
$conn->cookie("admin","email_hashed");
require_once "../classes/admin_replies.php";
$admin_replies = new admin_replies();
require_once "../body/admin/header.php";
require_once "../body/admin/side_bar.php";
require_once "../body/admin/replies_body.php";
require_once "../body/admin/footer.php";
?>
