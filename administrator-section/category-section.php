<?php
ob_start();
error_reporting(E_ERROR);
require_once "../classes/config.php";
$conn = new config();
$conn->cookie("admin","email_hashed");
require_once "../classes/category_section.php";
$category_section = new category_section();
require_once "../body/admin/header.php";
require_once "../body/admin/side_bar.php";
require_once"../body/admin/category_section.php";
require_once "../body/admin/footer.php";
?>
