<div class="content-section-all">

<div class="header-section-cont">
<center><h3>MANAGE YOUR CATEGORIES</h3></center>

</div>
  <div class="view-table form-area-container">
      <center><input type="text" id="live_search" style="width:60%;margin-left:20%;margin-right:20%;" class="form-control search-me-please" placeholder="🔎" name="" id=""></center><br>

  <table class="table table-striped">
  <thead class="header-bg">
  <tr>
  <th>Category</th>
  <th>Delete Category</th>
  </tr>
  </thead>
  <tbody class="tbody_content">
  
  <?php  $category_section->fetch_paginated_categories(); ?>
  
  </tbody>  
  
  </table>
<?php   $category_section->paginate_link(); ?>
<center><button class="btn header-bg custom_btn" data-toggle="modal" data-target="#myModal" style="color:white">
Add New Category</button></center>
  </div>
  </div>



  <div id="myModal" class="modal fade show" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header header-content-modal">
      <center><h5><b class="modal-title" style="color:white;">Add A new Category</b></h5></center>

        <button type="button" class="close" id="close_me" data-dismiss="modal"><i class="fa fa-close" aria-hidden="true"></i></button>
              </div>
      <div class="modal-body">
       <div class="notification">
           <center><b>Please enter a new category item</b></center>
       </div>
        <form action="" method="post">
      <div class="form-group">
     <input class="form-control" required="required" name="email_validation" id="cat_text_area" placeholder="enter new category" data-rule="minlen:4" data-msg="Please enter at least 4 chars" type="text">
        <div class="validation" style="margin-top:15px;"></div>
            </div>
                             

      </form></div>
      <div class="modal-footer">
          <button class="btn header-bg custom_btn " id="add_category" name="send_email" style="color:white;font-weight:bolder;">Submit</button>
        <button type="button" class="btn header-bg custom_btn" id="data_close" style="color:white;font-weight:bolder;"data-dismiss="modal">Close</button>
      </div>
      
    </div>

  </div>
</div>