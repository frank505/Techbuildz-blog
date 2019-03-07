<?php
require_once "../classes/side_bar.php";
 $side_bar = new side_bar();?>
<div class="side-bar-content">
  <div class="first-area-side">
  <center><b><h5  class="username"style="font-weight:bolder;"><?php $side_bar->load_username();?></h5></b></center>
<img src="../assets/admin_image/<?php echo $side_bar->load_image();?>" alt="" style="" class="img-style" srcset="">

  </div>

<div class="content-area-side-bar">


<ul class="ul-area">
<li>
<a href="dashboard.php"> &nbsp; <i class="fa fa-dashboard" aria-hidden="true"></i>&nbsp; Dashboard</a>
</li>

<li class="side-me">
  <a href="#" class="click-drop"> &nbsp; <i class="fa fa-users" aria-hidden="true"></i>&nbsp; Admin <i class="fa fa-angle-left pull-right" style="margin-right:5px;" aria-hidden="true"></i></a>

  <ul class="ul-drop-down">
   <li><a href="register.php">&nbsp;<i class="fa fa-user" aria-hidden="true"></i>&nbsp;Register New Admin</a></li>
   <li><a href="update.php">&nbsp;<i class="fa fa-refresh" aria-hidden="true"></i>&nbsp; Update Admin Profile</a></li>
   <li><a href="view-admin.php">&nbsp;<i class="fa fa-eye" aria-hidden="true"></i>&nbsp;View Admins</a></li>

  </ul>
</li>



<li class="side-me">
  <a href="#" class="click-drop"> &nbsp; <i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp; Blog <i class="fa fa-angle-left pull-right" style="margin-right:5px;" aria-hidden="true"></i></a>

  <ul class="ul-drop-down">
  <li><a href="category-section.php">&nbsp; <i class="fa fa-user-secret" aria-hidden="true"></i>&nbsp;Category</a></sli>
   <li><a href="post-content.php">&nbsp;<i class="fa fa-user" aria-hidden="true"></i>&nbsp;Add New Post</a></sli>
   <li><a href="view-post.php">&nbsp;<i class="fa fa-refresh" aria-hidden="true"></i>&nbsp; Update Previous Posts</a></li>
   <li><a href="comments.php">&nbsp; <i class="fa fa-comments" aria-hidden="true"></i>&nbsp;Comments And Replies</a></li>

  </ul>
</li>


<li class="side-me">
  <a href="adverts.php"> &nbsp; <i class="fa fa-microphone" aria-hidden="true"></i>&nbsp; Adverts</a>
</li>


 

<li class="side-me">
  <a href="#" class="click-drop"> &nbsp; <i class="fa fa-video-camera" aria-hidden="true"></i>&nbsp; Video <i class="fa fa-angle-left pull-right" style="margin-right:5px;" aria-hidden="true"></i></a>

  <ul class="ul-drop-down">
   <li><a href="video.php">&nbsp;<i class="fa fa-video-camera" aria-hidden="true"></i>&nbsp; Video Section</a></li>
  </ul>
</li>





</ul>




</div>































</div>