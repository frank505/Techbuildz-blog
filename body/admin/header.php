<?php
require_once "../classes/admin_notifications.php";
$admin_notifications = new admin_notifications();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="name" content="content">
    <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no shrink-to-fit=no"/>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/font/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/admin_area.css" type="text/css" title="text/css">

  <title></title>
  </head>
<body>
 
<main role="main">


<header class="">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark header-bg extra-height">
        <button class="navbar-toggler toggle-me"  style="display:block;border:none;"type="button"  aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"style="" id="navbarCollapse">
          <a href="../index.php" style="font-weight:bolder;color:white;margin-left:10px;"><i class="fa fa-home" aria-hidden="true"></i> Website</a>
          <ul class="navbar-nav ml-auto width-reduce ">
                     
          <li class="nav-item margin-right dropdown active show">
        <a class="nav-link dropdown-toggle drop-me-101" style="font-weight:bolder;" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <i class="fa fa-bell" aria-hidden="true"></i><div class="badge notify-me badge-danger"><?php echo $admin_notifications->total_notifications();?></div>
        </a>
        <div class="dropdown-menu  " aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="comments.php"><b> <i class="fa fa-comment" aria-hidden="true"></i> Comments <b>(<?php echo $admin_notifications->comments();?>)</b></b></a>
          <a class="dropdown-item" href="comments.php"><b> <i class="fa fa-comment" aria-hidden="true"></i> replies <b>(<?php echo $admin_notifications->replies();?>)</b> </b></a>

        </div>

      </li>

           
                 <li class="nav-item margin-right-small dropdown active show">
        <a class="nav-link dropdown-toggle drop-me-102" style="font-weight:bolder;" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <i class="fa fa-user" aria-hidden="true"></i>User Profile
        </a>
        <div class="dropdown-menu  " aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="update.php"><b> <i class="fa fa-gear" aria-hidden="true"></i> settings</b></a>
          <a class="dropdown-item" href="log-out.php"><b> <i class="fa fa-sign-out" aria-hidden="true"></i> logout</b></a>
        </div>
      </li>


      
          </ul>
                 </div>
      </nav>
    </header>
  <div class="overlay"></div>