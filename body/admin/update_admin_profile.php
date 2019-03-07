<div class="content-section-all">

<div class="header-section-cont">
<center><h3>Update Your Profile Here</h3></center>

</div>

<div class="form-area-container">


<div class="row">
              <div class="col-md-12">

              
              <form action="" method="post" role="form" class="contactForm">
                            
                  <div class="notification-registration" id="sent_indicator">  </div>
              <div class="form-group">
                            <input value="<?php echo $update_profile->select_username();?>"class="form-control" id="username" placeholder="username" required="required"  type="text">
                        <div class="validation"><center  class="design_center" ></center></div>
                     </div>
                                       
                     <div class="form-group">
                                        <input value="<?php echo $update_profile->select_email();?>" class="form-control" id="email" required="required" placeholder="✉ parsento@gmail.com"  type="email">
                                        <div class="validation"><center  class="design_center" ></center></div>
                                        <input type="hidden" name="" value="<?php echo $update_profile->select_email();?>" id="hidden_value">
                                </div>

                                <div class="form-group">
                                        <input class="form-control" id="password" required="required" placeholder="🔒 password"   type="password">
                                        <div class="validation"><center  class="design_center" ></center></div>
                                </div>
                              
                                <div class="form-group">
                                        <input class="form-control" id="confirm-password" required="required" placeholder="🔒confirm password" type="password">
                                        <div class="validation"><center  class="design_center" ></center></div>
                                </div>

                                <div class="form-group">
                                       <label for="file-content" id="file-label" class="form-control label-file">&nbsp; <i class="fa fa-file-picture-o" aria-hidden="true"></i> PLease Select A file</label>
                                       <input  type="file" id="file-content"  required="required" class=" file-hide"  >        
                                       <div class="validation"><center  class="design_center" ></center></div>
                                </div>
                                

                                  <div class="form-group">
                                  <textarea class="form-control" id="message" name="message" required="required" rows="5" data-rule="required"  placeholder="
                                enter a brief description about the new admin"><?php echo $update_profile->select_description();?></textarea>
                                <div class="validation"><center  class="design_center" ></center></div>
                                  </div>
                                
                                                                  

                            <button type="button" id="btn-update" class="btn header-bg change-theme ">Submit</button>
                            <button type="button"  id="btn-clear" class="btn header-bg change-theme pull-right">clear</button>
                        </form>





              </div>
          </div>




</div>


</div>