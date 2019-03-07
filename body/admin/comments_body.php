<div class="content-section-all">

<div class="header-section-cont">
<center><h3>MANAGE COMMENTS</h3></center>

</div>
  <div class="view-table form-area-container">
      <center><input type="text" id="live_search_comments" style="width:60%;margin-left:20%;margin-right:20%;" class="form-control" placeholder="🔎" name="" id=""></center><br>
             <center><div class="show-report"></div></center><br><br>
      <center><button class="btn header-bg custom_btn" id="check_all_comments"><i class="fa fa-check-square"></i>&nbsp;Check All</button>
    <button class="btn header-bg custom_btn" id="delete_all_comments"> <i class="fa fa-trash-o" aria-hidden="true"></i>  Delete</button>
    <button class="btn header-bg custom_btn " id="approve_all_comments">  <i class="fa fa-check-circle-o" aria-hidden="true"></i> Approve All</button>
    </center> <br><br>



  <table class="table table-striped">
  <thead class="header-bg">
  <tr>
      <th>Username</th>
  <th>Comment</th>
  <th>View Post</th>
  <th>Replies</th>
  <th>Approve</th>
  <th>Delete</th>
  </tr>
  </thead>
  <tbody class="tbody_content">
  
  <?php $admin_comments->fetch_paginated_data(); ?>
  
  </tbody>  
  
  </table>
<?php   $admin_comments->fetch_paginated_links(); ?>
  </div>
  </div>



  <div id="myModal" class="modal fade show" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header header-content-modal">
      <center><h5><b class="modal-title modal-title-header" style="color:white;"></b></h5></center>

        <button type="button" class="close" id="close_me_comments" data-dismiss="modal"><i class="fa fa-close" aria-hidden="true"></i></button>
              </div>
      <div class="modal-body modal-content-load">
       </div>
      <div class="modal-footer">
        <button type="button" class="btn header-bg custom_btn" id="data_close_comments" style="color:white;font-weight:bolder;"data-dismiss="modal">Close</button>
      </div>
      
    </div>

  </div>
</div>