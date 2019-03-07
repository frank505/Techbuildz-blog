<div class="container" style="margin-top:80px;">















<div class="row" style="margin-top:20px;">


<div class="col-md-8 change-background" style="margin-bottom:30px;">

<div class="line-under">
<div class="first-line"></div><center class="margin-bottom"><h4> <b>Videos</b> </h4></center><div class="second-line second-line-rewrite"></div>
</div>

<div class="video-section">

<div class="row">

<?php $user_video->fetch_paginated_data();?>


</div>

</div>

<center>

<?php $user_video->fetch_paginated_links();?>
</center>



</div>



<div class="col-md-4">


<ul class="tab">
  <li><a href="javascript:void(0)" class="tablinks active-content add-extra"  onclick="openCity(event, 'Latest News')">Latest Videos</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Popular Stories')">Popular Videos</a></li>
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

</div>
</div>






</div>


















</div>





















</div>

<input type="hidden" name="" value="" class="id-share">