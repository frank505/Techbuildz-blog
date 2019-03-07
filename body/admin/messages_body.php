<div class="content-section-all">

<div class="header-section-cont">
<center><h3>MANAGE YOUR MESSAGES</h3></center>
</div>
    <div class="nex"></div>
  <div class="view-table form-area-container">
      <center><input type="text" id="live_search_messages" title="search by messages only"style="width:60%;margin-left:20%;margin-right:20%;" class="form-control searcher" placeholder="🔎" name="" id=""></center><br>
     <center><button class="btn header-bg custom_btn" id="check_all_messages"><i class="fa fa-check-square"></i>&nbsp;Check All</button>
    <button class="btn header-bg custom_btn" id="delete_all_messages"><i class="fa fa-trash-o" aria-hidden="true"></i>  Delete</button>
    </center> <br><br>
  <table class="table table-striped">
  <thead class="header-bg">
  <tr>
  <th>View Message</th>
  <th>Reply Message</th>
  <th>Check Item</th>
  </tr>
  </thead>
  <tbody class="tbody_content">
  
  <?php $messages->paginate_contents();?>
  </tbody>  
  
  </table>
<?php $messages->pagination_links();  ?>

  </div>
  </div>



  <div id="myModal" class="modal fade show" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header header-content-modal">
      <center><h5><b class="modal-title" style="color:white;">Message</b></h5></center>

        <button type="button" class="close"  data-dismiss="modal"><i class="fa fa-close" aria-hidden="true"></i></button>
              </div>
      <div class="modal-body model_display">
                
       </div>
      <div class="modal-footer">
    <button type="button" class="btn header-bg custom_btn"  style="color:white;font-weight:bolder;"data-dismiss="modal">Close</button>
      </div>
      
    </div>

  </div>
</div>




<div id="myModal1" class="modal fade show" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header header-content-modal">
      <center><h5><b class="modal-title" style="color:white;">Send Email Notification</b></h5></center>

        <button type="button" class="close"  data-dismiss="modal"><i class="fa fa-close" aria-hidden="true"></i></button>
              </div>
      <div class="modal-body">
            <div class="body_content" id="body_content">
            <div class="sent_indicators_note"></div>
            <input type="email" name="" id="em_not" placeholder="" class="form-control"><br>
            <textarea name="" id="not_msg"  placeholder="send a message" class="form-control"></textarea>
             
            </div>
       
       </div>
      <div class="modal-footer">
      <button type="button" class="btn header-bg custom_btn" id="snd_message" style="color:white;font-weight:bolder;">Submit</button>
                  <button type="button" class="btn header-bg custom_btn"  style="color:white;font-weight:bolder;"data-dismiss="modal">Close</button>
      </div>
      
    </div>

  </div>
</div>