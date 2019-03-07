<?php
error_reporting(E_ERROR);
require_once "../classes/config.php";
require_once "../classes/blog_index.php";
$blog_index = new blog_index();
$blog_index->return_browser();
require_once "../classes/continent_detection.php";
$continent_detection = new continent_detection();
$continent_detection->get_continent_by_ip(htmlspecialchars($_SERVER["PHP_SELF"]));
require_once "../body/blog/header.php";
require_once "../body/blog/index_body.php";
require_once "../body/blog/footer.php";
?>