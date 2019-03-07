
<div class="container" style="margin-top:80px;margin-bottom:20px;">






<div class="row">












<div class="col-md-8 change-background">


<?php $view_video->fetch_full_post(htmlspecialchars($_GET["more"]));?>

<center style='margin-top:40px;margin-bottom:40px;'><button class="btn btn-primary btn-comments"><b><i class="fa fa-comments" aria-hidden="true"></i>&nbsp;Comments(<?php //echo $read_more->fetch_total_comments(htmlspecialchars($_GET["more"]));?>)</b></button></center>
</div>







<div class="col-md-4">


<ul class="tab">
  <li><a href="javascript:void(0)" class="tablinks active-content add-extra"  onclick="openCity(event, 'Latest News')">Latest News</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Popular Stories')">Popular Stories</a></li>
</ul>

<div id="Latest News" class="tabcontent container-cont" style="display:block;">

<?php $user_video->latest_videos();?>

</div>

<div id="Popular Stories" class="tabcontent">
 

<?php $user_video->most_viewed_videos();?>



</div>





<div class="col-md-12 advertisement-section extra-advert">

<div class="slide-show-container adjust-row">
     

     <?php $blog_index->adverts_section();?>

 

</div>

<div class="adjust-row row change-background">

    <div class="col-md-12">

    <center class="header-most-shared"><b> Blog Post Archives</b></center>
        
        <?php $blog_index->archive();?>        
        

    </div>


     </div>

</div>
</div>






</div>







<div class="row second-row-cont" style="margin-top:30px;margin-bottom:20px;">

<div class="col-md-8 change-background">

<div class='line-under'>
        <div class='first-line'></div><center class='margin-bottom'><h4> <b>Related Posts</b></h4></center>
        <div class='second-line second-line-rewrite'></div>
        </div>      


<div class="row">

<?php $view_video->related_post(htmlspecialchars($_GET["more"]));?>


</div>



</div>


<div class="col-md-4">







<div class="col-md-12 most-shared-section custom-text-decoration">

<center class="header-most-shared"><b>Most Shared</b></center>


    
<?php $view_video->most_shared_post();?>




</div>












</div>















</div>









</div>





















</div>





<div class="side-bar-comments">
<div class="header-bg header-area-nav-co">
<ul class='ul-header'>
<li><center><h5><b><i class="fa fa-comments-o" aria-hidden="true"></i> Comments()</b></h5></center>
</li>
<li class="close_ico"><b class="close-div"><i class="fa fa-close" aria-hidden="true"></i></b> </li>
</ul>
</div>

<div class="comment-post">
<form action="" method="post">
  <div class="form-group">
  <textarea class="form-control text-inputter" name="message" rows="5"  placeholder="enter your comment"></textarea></div>
   <div class="validation-inputter"></div>
  <div class="form-group">
  <button type="button" id="post_content_video"class="btn btn-primary shift-me">Submit</button>
  </div>

</form>


</div>

<?php //$read_more->fetch_paginated_comments(htmlspecialchars($_GET["more"]));?>


</div>



<input type="hidden" name="" id="cookie_area"value="<?php  echo $read_more->hidden_cookie();?>">
<input type="hidden" name="" id="post_id" value="<?php echo htmlspecialchars($_GET["more"]);?>">
<div class="overlay"></div>
<div class="second-overlay"></div>
<div class="third-overlay"></div>



<div class="form-container div-register" id="div-register">
               
   <center><h5 class="twentypx-bottom twenty-head-more"> <b>Login Here</b></h5><b class="pull-right close-this"> <i class="fa fa-close" aria-hidden="true"></i> </b></center>
   
      <div class="container">
          <div class="row">
              <div class="col-md-12">

              
              <form action="" method="post" role="form" class="contactForm">
                        <div class="validation-login"></div>
                                <div class="form-group">
                                        <input class="form-control material-design" name="email" required="required" value="akpufranklin2@gmail.com" id="email_login" placeholder="✉ parsento@gmail.com" type="email">
                                        <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                        <input class="form-control material-design" id="password_login" name="password" required="required" placeholder="🔒 password" type="password">
                                        <div class="validation"></div>
                                </div>
                               
                            <button type="submit" id="login" name="login" class="btn btn-theme gap">Login</button>
                            <button type="submit" name="login" id="sign-me-please"class="btn btn-theme gap">Sign Up</button>
                            <a href="#" data-toggle="modal" data-target="#myModal" class="pull-right gap change-color">Forgot Password click here?</a>
                        </form>





              </div>
          </div>
      </div> 
   
      

   </div>











   <div id="myModal" class="modal fade show" role="dialog" style="z-index:4000;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="z-index:4300;">
      <div class="modal-header header-content-modal">
      <center><h5><b class="modal-title" style="color:white;">Forgot Password</b></h5></center>

        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close" aria-hidden="true"></i></button>
              </div>
      <div class="modal-body">
       <div class="notification">
           <center><b>Please enter your already registered email here</b></center>
       </div>
        <form action="" method="post">
      <div class="form-group">
     <input class="form-control material-design" required="required" name="email_validation" id="name" placeholder="✉ parsento@gmail.com" data-rule="minlen:4" data-msg="Please enter at least 4 chars" type="email">
        <div class="validation"></div>
            </div>
                             

      </form></div>
      <div class="modal-footer">
          <button class="btn btn-theme " name="send_email" type="submit">Submit</button>
        <button type="button"  class="btn btn-theme" data-dismiss="modal">Close</button>
      </div>
      
    </div>

  </div>
</div>




















<div class="form-container div-register-content">
               
   <center><h5 class="twentypx-bottom twenty-head-more"> <b>Sign Up Here</b></h5><b class="pull-right close-this-here"> <i class="fa fa-close" aria-hidden="true"></i> </b></center>
   
      <div class="container">
          <div class="row">
              <div class="col-md-12">

              
              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" role="form" class="contactForm register-form">
                       <div class="response_text" id="response-text"></div>
              <div class="form-group ">
                                        <input class="form-control material-design" name="email" required="required" id="username" placeholder="enter a username" type="text">
                                        <div class="validation"></div>
                                </div>
                               
                                <div class="form-group">
                                        <input class="form-control material-design" name="email" required="required"  id="email" placeholder="✉ parsento@gmail.com" type="email">
                                        <div class="validation"></div>
                                </div>



                                <div class="form-group">
                                        <input class="form-control material-design" name="password" id="password" required="required" placeholder="🔒 password" type="password">
                                        <div class="validation"></div>
                                </div>

                                <div class="form-group">
                                        <input class="form-control material-design" id="confirm" name="password" required="required" placeholder="🔒 confirm password" type="password">
                                        <div class="validation"></div>
                                </div>
                               
                               
                            
                            <button type="submit" id="submit_me" name="login" class="btn btn-theme gap">Register</button>
                                                    </form>





              </div>
          </div>
      </div> 
   
      

   </div>

