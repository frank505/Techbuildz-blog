<?php
error_reporting(E_ERROR);
require_once "../classes/config.php";
require_once "../classes/blog_index.php";
$blog_index = new blog_index();
require_once "../classes/read_more.php";
$read_more = new read_more();
$read_more->clicks_adder(htmlspecialchars($_GET["more"]), htmlspecialchars($_GET["category"]));
require_once "../body/blog/header.php";
require_once "../body/blog/read_more.php";
require_once "../body/blog/footer.php";
require_once "../classes/continent_detection.php";
$continent_detection = new continent_detection();
$continent_detection->get_continent_by_ip(htmlspecialchars($_SERVER["PHP_SELF"]));

?>