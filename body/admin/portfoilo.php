<div class="content-section-all">

<div class="header-section-cont">
<center><h3>MANAGE YOUR SIDE ADVERTS</h3></center>

</div>
    <div class="nex"></div>
  <div class="view-table form-area-container">
      <center><input type="text" id="live_search_portfolio" style="width:60%;margin-left:20%;margin-right:20%;" class="form-control searcher" placeholder="🔎" name="" id=""></center><br>
     <center><button class="btn header-bg custom_btn" id="check_all_portfolio"><i class="fa fa-check-square"></i>&nbsp;Check All</button>
    <button class="btn header-bg custom_btn" id="delete_all_portfolio"><i class="fa fa-trash-o" aria-hidden="true"></i>  Delete</button>
    </center> <br><br>
  <table class="table table-striped">
  <thead class="header-bg">
  <tr>
  <th>Header</th>
  <th>Url Entered </th>
  <th>View</th>
  <th>check</th>
  </tr>
  </thead>
  <tbody class="tbody_content">
  
  <?php $portfolio->paginate_contents();?>
  </tbody>  
  
  </table>
<?php $portfolio->pagination_links();  ?>
<center><button class="btn header-bg custom_btn" data-toggle="modal" data-target="#myModal" style="color:white">
Add New Portfolio</button></center>
  </div>
  </div>



  <div id="myModal" class="modal fade show" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header header-content-modal">
      <center><h5><b class="modal-title" style="color:white;">Add New Portfolio</b></h5></center>

        <button type="button" class="close"  data-dismiss="modal"><i class="fa fa-close" aria-hidden="true"></i></button>
              </div>
      <div class="modal-body">
            <div class="body_content" id="body_content">
            <div class="sent_indicators sent_indicators_port"></div>
            <input type="text" name="" id="img_header_portfolio" class="form-control" placeholder="eneter portfolio header"><br>
            <input type="text" name="" class="form-control" id="portfolio_url" placeholder="enter portfolio url">
             <input type="file" name="" id="file_images_portfolio" class="file-hide">
             <label for="file_images_portfolio" style="cursor:pointer;"class="file_design form-control">
              Select A image File <i class="fa fa-file-image-o" aria-hidden="true"></i>
             </label>
            
            </div>
       
       </div>
      <div class="modal-footer">
      <button type="button" class="btn header-bg custom_btn" id="upload_port" style="color:white;font-weight:bolder;">Submit</button>
                  <button type="button" class="btn header-bg custom_btn"  style="color:white;font-weight:bolder;"data-dismiss="modal">Close</button>
      </div>
      
    </div>

  </div>
</div>