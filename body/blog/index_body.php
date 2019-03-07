<style>
    .search-response{margin-top:60px;}
</style>

<div class="container">
<div class="row">

<div class="col-md-7 col-12 col-lg-8" >

<!--beginning of carousel-->

<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:400px;margin-top:80px;margin-bottom:20px;" >
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>

        </ol>
        <div class="carousel-inner"  >
          
          <?php  $blog_index->carousel_slide_last();?>
          <?php  $blog_index->select_last_two();?>
          
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
<!--end of the carousel section-->




</div>

<!--section containing related posts -->

<div class="col-md-5 col-lg-4 col-12"  style="margin-top:80px;">



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























</div>


</div>
<!--end of first row here-->

<!--beginning second row here-->
<div class="row">

<div class="col-md-7 col-12 col-lg-8 change-background">

<div class="line-under">
<div class="first-line"></div><center class="margin-bottom"><h4> <b>Latest News</b> </h4></center><div class="second-line second-line-rewrite"></div>
</div>


<div class="second-core-content">


<?php $blog_index->fetch_last_four();?>









</div>



<center><a href="blog/latest-news" role="btn"  style="margin-bottom:20px;margin-top:10px;" class="btn btn-lg no-hover btn-theme" >More <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> </a></center>


</div>










<div class="col-md-5 col-lg-4 col-sm-12">

<div class="row adjust-row">


<div class="col-md-12 most-shared-section">

<center class="header-most-shared"><b>Most Discussed</b></center>
<?php $blog_index->show_most_discussed(); ?>
</div>
<!--end of most shared section-->

<div class="col-md-12 advertisement-section ">

<div class="slide-show-container adjust-row">
     

     <?php $blog_index->adverts_section();?>

 

</div>

</div>
<!--end of advertisement section-->


</div>



</div>
























</div>
<!--end of second row here-->



<!--start of the last row for videos and archives-->
<div class="row" style="margin-top:20px;">


<div class="col-md-8 change-background" style="margin-bottom:30px;">

<div class="line-under">
<div class="first-line"></div><center class="margin-bottom"><h4> <b>Videos</b> </h4></center><div class="second-line second-line-rewrite"></div>
</div>

<div class="video-section">

<div class="row">


<?php $blog_index->videos_display();?>

</div>

</div>

<center><a href='blog/content-videos' role='btn' class="btn btn-lg btn-theme" style="margin-bottom:20px;margin-top:10px;">More <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a></center>



</div>


<!--end of the major first column ends here-->


<div class="col-md-4 " >
     <div class="adjust-row row change-background">

    <div class="col-md-12">

    <center class="header-most-shared"><b> Blog Post Archives</b></center>
        
                  <?php  $blog_index->archive();?>
        
        

    </div>


     </div>





</div>

















</div>





<input type="hidden" name="" value="" class="id-share">


















</div>
<script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a7233767d473b65"></script>