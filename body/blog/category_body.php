  
  
<div class="container" style="margin-top:80px;margin-bottom:20px;">




<div class="row">

<div class="col-md-8 change-background">

<div class="line-under">
<div class="first-line"></div><center class="margin-bottom"><h4> <b><?php echo $category->fetch_category_name(htmlspecialchars($_GET["category"]));  ?></b> </h4></center><div class="second-line second-line-rewrite"></div>
</div>


<div class="second-core-content">


<?php $category->fetch_category_paginated_data(htmlspecialchars($_GET["category"]));?>










</div>



<center>
    
<?php $category->fetch_category_paginated_links(htmlspecialchars($_GET["category"]));?>
</center>


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

</div>
</div>






</div>



















</div>


















   