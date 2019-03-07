<?php
error_reporting(E_ERROR);
require_once "../classes/config.php";
$conn = new config();
$conn->cookie("admin","email_hashed");
require_once "../classes/view_admin_admin_section.php";
$view_admin_admin_section = new view_admin_admin_section();
require_once "../body/admin/header.php";
require_once "../body/admin/side_bar.php";
require_once "../body/admin/view-admin.php";
require_once "../body/admin/footer.php";
?>