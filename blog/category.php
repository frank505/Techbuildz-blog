<?php
error_reporting(E_ERROR);
require_once "../classes/config.php";
require_once "../classes/blog_index.php";
require_once "../classes/latest_news.php";
$blog_index = new blog_index();
require_once "../classes/category.user.content.php";
$category = new category();
require_once "../body/blog/header.php";
require_once "../body/blog/category_body.php";
require_once "../body/blog/footer.php";
require_once "../classes/continent_detection.php";
$continent_detection = new continent_detection();
$continent_detection->get_continent_by_ip(htmlspecialchars($_SERVER["PHP_SELF"]));

?>