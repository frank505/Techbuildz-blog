
<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyAXavmNUsgT7UgRIQEdweFXIhBrYTGPvOY",
    authDomain: "tech-miz.firebaseapp.com",
    databaseURL: "https://tech-miz.firebaseio.com",
    projectId: "tech-miz",
    storageBucket: "tech-miz.appspot.com",
    messagingSenderId: "942114086591"
  };
  firebase.initializeApp(config);
  // Retrieve Firebase Messaging object.
const messaging = firebase.messaging();
messaging.requestPermission()
. then(function() {
  console.log('Notification permission granted.');
  // TODO(developer): Retrieve an Instance ID token for use with FCM.
 /*if(isTokenSentToServer()){
console.log("Token already saved");

 }else{
  getRegToken();
 }*/
 getRegToken();
})
.catch(function(err) {
  console.log('Unable to get permission to notify.', err);
});
function getRegToken(){
   // Get Instance ID token. Initially this makes a network call, once retrieved
  // subsequent calls to getToken will return from cache.
  messaging.getToken()
  .then(function(currentToken) {
    if (currentToken) {
      //sendTokenToServer(currentToken);
      saveToken(currentToken);
      console.log(currentToken);
      setTokenSentToServer(true);
      //updateUIForPushEnabled(currentToken);
    } else {
      // Show permission request.
      console.log('No Instance ID token available. Request permission to generate one.');
      // Show permission UI.
      setTokenSentToServer(false);
    }
  })
  .catch(function(err) {
    console.log('An error occurred while retrieving token. ', err);
   // showToken('Error retrieving Instance ID token. ', err);
    setTokenSentToServer(false);
  });
}


function setTokenSentToServer(sent) {
    window.localStorage.setItem('sentToServer', sent ? 1 : 0);
  }
  function isTokenSentToServer() {
    return window.localStorage.getItem('sentToServer') == 1;
  }
  function saveToken(currentToken){
    var ajax  = new XMLHttpRequest();
    var form_data = new FormData();
    form_data.append("token", currentToken);
    ajax.onreadystatechange = ()=>{
        if(ajax.readyState==4 && ajax.status==200){
        console.log(ajax.responseText);     
        }
        ajax.open("POST","../ajax/save.push.notification.php",true);
    ajax.send(form_data);       
    }
    
  }


</script>
<div class="content-section-all">

<div class="header-section-cont">
<center><h3>POST A NEW CONTENT HERE</h3></center>

</div>
  <div class="view-table view-me form-area-container">
    
  

  <center><a href="javascript:void(0)" id='click_me_now' class='btn custom-btn header-bg'><b>Send Notification</b></a></center> 
  <br><br>
  <div class="header-and-post">
  <span id="sent_indicator" class="sent_indicator"></span><br><br><br>
<ul class='ul-heading'>
  <li class="col-md-6 col-6"><input type="text"  id="post_title_text" placeholder="enter the post header here" class="form-control post_title_me
 text-form" style="display:inline-block;"  name="name" value=""></li>
  <li class="col-md-2 col-3">
<label for="image_area" class="img-label btn custom_btn"><span class="fa fa-file"></span>&nbsp;Select File</label>

    <input type="file" style="display:none;width:1px;"  id="image_area"class="" name="name" value=""></li>
  <li class="col-md-2 col-1"><input type="button"  id="btn_publisher" class="btn custom_btn" name="name" value="submit"></li>
  
  <li class="col-md-0"><textarea name="name"  id="textarea_get" style="display:none;" rows="8" cols="40"></textarea></li>
</ul>
<br>

</div>

 </div>

<script>

var clicker = document.querySelector("#click_me_now");
 clicker.addEventListener("click", Load_push);
 function Load_push(){
   var ajax = new XMLHttpRequest();
   ajax.onreadystatechange = () =>{
     if(ajax.readyState==4 && ajax.status==200){
     var payload = ajax.responseText;  
     messaging.onMessage(function(){
console.log("message recieved", payload);
notificationTitle = payload.data.title;
notificationOptions = {
  body:payload.data.body,
  icon:payload.data.icon,
 click_action:payload.data.click_action,
  image:payload.data.image,
}
var notification = new Notification(notificationTitle,notificationOptions);
console.log("done");
});
     }
   }
   ajax.open("GET","../ajax/send_push.php", true);
   //ajax.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    ajax.send(null);

  
 }
 






</script>

 <div class="wyswiwyg-area">
<div class="container">
  <div class="row">
    <div class="contain-all col-md-12">
      <center><ul class="wyswyig-controls">
        <li class="bold_btn"><button class="btn header-bg" type="button" id="bold_btn" name="button"><span class="fa fa-bold"></span></button></li>
      <li><button type="button"  id="btn_italic"class="btn header-bg"><span class="fa fa-italic"></span></button></li>
      <li><button type="button" class="btn header-bg" id="strike_through"><s>ABC</s></button></li>
      <li><button type="button" id="underline_txt" class="btn header-bg"><u>U</u></button></li>
      <li><button type="button"  id="forecolor" class="btn header-bg">Color</button></li>
      <li><button type="button" class="btn header-bg" id="text_size"name="button">Text Size▾</button>
      <ul class="btn-size" id="btn_size">
      <li><a href="#" id="normal_text" class=" text-size" >Normal</a></li>
      <li><a href="#" id="small_text" class=" text-size" >Small </a></li>
      <li><a href="#" id="medium_text" class="text-size" >Medium</a></li>
      <li><a href="#" id="large_text" class="text-size" >Large </a></li>
      <li><a href="#" id="extra_large_text" class="text-size" >Extra Large</a></li>
      </ul>

      </li>

     
      <li><button type="button" class="btn header-bg" id="text_font"name="button">Font</button></li>
      <li><button type="button" class="btn header-bg" id="text_url"name="button"> <i class="fa fa-link" aria-hidden="true"></i> </button></li>
      <li><button type="button" class="btn header-bg" id="remove_link" name="button"> <i class="fa fa-unlink" aria-hidden="true"></i> </button></li>
          <li><button type="button" class="btn header-bg" id="text_left"name="button"><span class="fa fa-align-left"></span></button></li>
          <li><button type="button" class="btn header-bg" id="text_center"name="button"><span class="fa fa-align-center"></span></button></li>
      <li><button type="button" class="btn header-bg" id="text_right"name="button"><span class="fa fa-align-right"></span></button></li>
      <li><button type="button" class="btn header-bg" id="add_code"name="button"><i class="fa fa-code" aria-hidden="true"></i></button></li>
      <li><button type="button" class="btn header-bg" id="remove_code"name="button"><i class="fa fa-remove" aria-hidden="true"></i></button></li>
      <li><button type="button" class="btn header-bg" id="clear" name="button">Clear</button></li>
      <li><button type="button" class="btn header-bg" data-toggle="modal" data-target="#myModal" id="image_div" name="button"><span class="fa fa-picture-o"></span></button></li>
      <li><button type="button" class="btn header-bg" id="video_div" data-toggle="modal" data-target="#myModal2" name="button"><span class="fa fa-file-video-o"></span></button></li>
      
      <li><button type="button" class="btn header-bg" data-toggle="modal" data-target="#myModal13" id=""name="button"><i class="fa fa-file-zip-o" aria-hidden="true"></i></button></li>
      <li><button type="button" class="btn header-bg" id="unordered_list" name="button"><span class="fa fa-list-ul"></span></button></li>
      <li><button type="button" class="btn header-bg" id="ordered_list" name="button"><span class="fa fa-list-ol"></span></button></li>
     <input type="hidden" name=""  value="<?php echo  $_COOKIE[$conn->cookie_name]; ?>" id="unique_id_post">
      <li><select class="btn header-bg" id="select_option" name="">
      <option selected="selected">categories</option>
      <?php  $post_content->fetch_categories();?>
      </select></li>
     <input type="hidden" name="name" id="username" value="">
    </ul></center>
    <div class="text_area">
<div class="editable_div" id="editable_div" contenteditable="true">

</div>
</div>





    </div>
            </div>
</div>
 </div>





</div>











  </div>
  </div>





  










  <div id="myModal" class="modal fade show" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header header-content-modal">
      <center><h5><b class="modal-title" style="color:white;">Add Images</b></h5></center>

        <button type="button" class="close" id="close_me" data-dismiss="modal"><i class="fa fa-close" aria-hidden="true"></i></button>
              </div>
      <div class="modal-body">




      <div class="upload_div" id="upload_picture" >
   

 <div class="form_area">
   <form class="" action="index.html" method="post">
   <input name="filo" class="files"style="display:none;" multiple="multiple" id="file_img" value="" type="file">
   <li class="display_inline_k"><label for="file_img" class="label_img btn custom_btn img-label" id="label_img">
 Select File  &nbsp;<span class="fa fa-file"></span> </label> <button type="button" class="btn custom_btn upload-img img-label" id="upload_btn" name="button">Upload</button>
 <button type="button" class="btn custom_btn upload-img img-label" id="clear_me" name="button">Clear</button>
</li>


 </form></div>

 <br>
 <p class="note_img_upload" style="border-bottom:1px solid #CCC;font-weight:bolder;">Upload one or multiple images and please pe patient.</p><br>
 <p class="note_img_upload" id="uploading_p"></p>
<div class="image_visible" id="image_invisible">
<ul class="ul_inside" id="ul_content">

</ul>
</div>

  </div>







       </div>
      <div class="modal-footer">
          <button class="btn header-bg custom_btn " id="add_selected" name="send_email" style="color:white;font-weight:bolder;">Add Selected</button>
        <button type="button" class="btn header-bg custom_btn" id="data_close" style="color:white;font-weight:bolder;"data-dismiss="modal">Close</button>
      </div>
      
    </div>

  </div>
</div>




































<div id="myModal2" class="modal fade show" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header header-content-modal">
      <center><h5><b class="modal-title" style="color:white;">Add Videos</b></h5></center>

        <button type="button" class="close" id="close_me" data-dismiss="modal"><i class="fa fa-close" aria-hidden="true"></i></button>
              </div>
      <div class="modal-body">
      
          
      <div class="upload_div " id="upload_video">
    

  <div class="form_area">
   <input name="video" class="files" id="vid_img" multiple  style="display:none;" value="" type="file">
   <li class="display_inline_k"><label for="vid_img" class=" btn  custom_btn"  id="label_img_vid">
  Select File &nbsp;<span class="fa fa-file"></span></label> 
  <button type="button" class="upload  btn custom_btn" id="upload_btn_vid" name="button">Upload</button>
  <button type="button" class="upload  btn custom_btn" id="clear_vid" name="button">Clear</button>
</li>


  </div>

  <br>
  <p class="note_img_upload" style="border-bottom:1px solid #CCC;font-weight:bolder;">Upload one or more videos</p><br>
  <p class="note_img_upload" id="uploading_p_vid"></p>
  <div class="image_visible" id="video_invisible">
  <ul class="ul_inside" id="ul_content_vid">
  </ul>
  </div>

  </div>


     




    
    </div>
      <div class="modal-footer">
    <button class="btn header-bg custom_btn " id="add_selected_video" name="send_email" style="color:white;font-weight:bolder;">Add Selected</button>
    <button type="button" class="btn header-bg custom_btn" id="data_close" style="color:white;font-weight:bolder;"data-dismiss="modal">Close</button>
      </div>
      
    </div>

  </div>
</div>



















<div id="myModal13" class="modal fade show" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header header-content-modal">
      <center><h5><b class="modal-title" style="color:white;">Add Zip File</b></h5></center>

        <button type="button" class="close" id="close_me" data-dismiss="modal"><i class="fa fa-close" aria-hidden="true"></i></button>
              </div>
      <div class="modal-body">




      <div class="upload_div" id="upload_picture" >
   

 <div class="form_area">
   <form class="" action="index.html" method="post">
   <input name="filo" class="files"style="display:none;"  id="file_zip" value="" type="file">
   <li class="display_inline_k"><label for="file_zip" class="label_img btn custom_btn img-label" id="label_img">
 Select File  &nbsp;<span class="fa fa-file"></span> </label> <button type="button" class="btn custom_btn upload-img img-label" id="upload_zip" name="button">Upload</button>
 <button type="button" class="btn custom_btn upload-img img-label" id="clear_me_zip" name="button">Clear</button>
</li>


 </form></div>

 <br>
 <p class="note_img_upload" style="border-bottom:1px solid #CCC;font-weight:bolder;">one zip file at a time only.</p><br>
 <p class="note_img_upload" id="uploading_p"></p>
<div class="image_visible" id="image_invisible">
<ul class="ul_inside" id="ul_content_zip">

</ul>
</div>

  </div>







       </div>
      <div class="modal-footer">
          <button class="btn header-bg custom_btn " id="add_selected_zip" name="send_email" style="color:white;font-weight:bolder;">Add Selected</button>
        <button type="button" class="btn header-bg custom_btn" id="data_close_zip" style="color:white;font-weight:bolder;"data-dismiss="modal">Close</button>
      </div>
      
    </div>

  </div>
</div>
















<div id="myModal4" class="modal fade show" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header header-content-modal">
      <center><h5><b class="modal-title" style="color:white;">Add Audios</b></h5></center>

        <button type="button" class="close" id="close_me" data-dismiss="modal"><i class="fa fa-close" aria-hidden="true"></i></button>
              </div>
      <div class="modal-body">
      
          
      <div class="upload_div " id="upload_audio">
    

  <div class="form_area">
   <input name="video" class="files" id="aud_img"   style="display:none;" value="" type="file">
   <li class="display_inline_k"><label for="aud_img" class=" btn  custom_btn"  id="label_img_vid">
  Select File &nbsp;<span class="fa fa-file"></span></label> 
  <button type="button" class="upload  btn custom_btn" id="upload_btn_audio" name="button">Upload</button>
  <button type="button" class="upload  btn custom_btn" id="clear_vid" name="button">Clear</button>
</li>


  </div>

  <br>
  <p class="note_img_upload" style="border-bottom:1px solid #CCC;font-weight:bolder;">Upload one or more audio files</p><br>
  <p class="note_img_upload" id="uploading_p_vid"></p>
  <div class="image_visible" id="video_invisible">
  <ul class="ul_inside" id="ul_content_vid">
  </ul>
  </div>

  </div>


     




    
    </div>
      <div class="modal-footer">
    <button class="btn header-bg custom_btn " id="add_selected_audio" name="send_email" style="color:white;font-weight:bolder;">Add Selected</button>
    <button type="button" class="btn header-bg custom_btn" id="data_close" style="color:white;font-weight:bolder;"data-dismiss="modal">Close</button>
      </div>
      
    </div>

  </div>
</div>

