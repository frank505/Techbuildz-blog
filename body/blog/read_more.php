
<div class="container" style="margin-top:80px;margin-bottom:20px;">






<div class="row">












<div class="col-md-8 change-background">


<?php $read_more->fetch_full_post(htmlspecialchars($_GET["more"]), htmlspecialchars($_GET["category"]));?>

<center style='margin-top:40px;margin-bottom:40px;'><button class="btn btn-primary btn-comments"><b><i class="fa fa-comments" aria-hidden="true"></i>&nbsp;Comments(<?php echo $read_more->fetch_total_comments(htmlspecialchars($_GET["more"]),htmlspecialchars($_GET["category"]));?>)</b></button></center>
</div>







<div class="col-md-4">


<ul class="tab">
  <li><a href="javascript:void(0)" class="tablinks active-content add-extra"  onclick="openCity(event, 'Latest News')">Latest News</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Popular Stories')">Popular Stories</a></li>
</ul>

<div id="Latest News" class="tabcontent container-cont" style="display:block;">

<?php $blog_index->latest_side_bar_news();?>

</div>

<div id="Popular Stories" class="tabcontent">
 

<?php $blog_index->most_viewed();?>



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

<?php $read_more->related_post(htmlspecialchars($_GET["more"]), htmlspecialchars($_GET["category"]));?>


</div>



</div>


<div class="col-md-4">







<div class="col-md-12 most-shared-section custom-text-decoration">

<center class="header-most-shared"><b>Most Discussed</b></center>


    
<?php $blog_index->show_most_discussed();?>




</div>












</div>







 <div class="col-md-8" style="margin-top:20px;margin-bottom:20px;">
 
 <?php $read_more->fetch_posters_details(htmlspecialchars($_GET["more"]), htmlspecialchars($_GET["category"])); ?>
 </div>







</div>









</div>





















</div>





<div class="side-bar-comments">
<div class="header-bg header-area-nav-co">
<ul class='ul-header'>
<li><center><h5><b><i class="fa fa-comments-o" aria-hidden="true"></i> Comments(<?php echo $read_more->fetch_total_comments(htmlspecialchars($_GET["more"]),htmlspecialchars($_GET["category"]));?>)</b></h5></center>
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
  <button type="button" id="post_content"class="btn btn-primary shift-me">Submit</button>
  </div>

</form>


</div>

<?php $read_more->fetch_paginated_comments(htmlspecialchars($_GET["more"]),htmlspecialchars($_GET["category"]));?>


</div>



<input type="hidden" name="" id="cookie_area"value="<?php echo $read_more->hidden_cookie();?>">
<input type="hidden" name="" id="post_id" value="<?php echo  $read_more->get_post_id( htmlspecialchars($_GET["more"]),htmlspecialchars($_GET["category"]));?>">
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
                        </form>





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

<input type="hidden" name="" value="<?php htmlspecialchars($_GET["more"])?>" class="id-share">