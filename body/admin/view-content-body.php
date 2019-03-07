<div class="content-section-all">

<div class="header-section-cont">
<center><h3>MANAGE YOUR POST</h3></center>
</div>
    <div class="nex"></div>
  <div class="view-table form-area-container">
   
      <center><input type="text" id="live_search_here" style="width:60%;margin-left:20%;margin-right:20%;" class="form-control" placeholder="🔎" name="" id=""></center><br>
     <center><button class="btn header-bg custom_btn" id="check_all"> <i class="fa fa-check-square"></i>&nbsp;Check All</button>
    <button class="btn header-bg custom_btn" id="delete_all"> <i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;Delete</button>
    </center> <br><br>
  <table class="table table-striped">
  <thead class="header-bg">
  <tr>
  <th>Header</th>
  <th>View</th>
  <th> Update</th>
  <th>check</th>
  </tr>
  </thead>
  <tbody class="tbody_content">
  
  <?php  $view_content->display_content(); ?>
  
  </tbody>  
  
  </table>
<?php   $view_content->pagination_links(); ?>

  </div>
  </div>



  <div id="myModal" class="modal fade show" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header header-content-modal">
      <center><h5><b class="modal-title" style="color:white;">View Post</b></h5></center>

        <button type="button" class="close"  data-dismiss="modal"><i class="fa fa-close" aria-hidden="true"></i></button>
              </div>
      <div class="modal-body">
            <div class="body_content" id="body_content"></div>
       
       </div>
      <div class="modal-footer">
                  <button type="button" class="btn header-bg custom_btn"  style="color:white;font-weight:bolder;"data-dismiss="modal">Close</button>
      </div>
      
    </div>

  </div>
</div>