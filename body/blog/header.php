<?php
require_once "../classes/header_blog.php";
$header_blog = new header_blog();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<base href="/surelinks/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="manifest" href="manifest.json">
    <title>Document</title>
    <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase.js"></script>
    <script src="blog/assets/js/jquery-3.2.1.min.js"></script>
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
     // console.log(currentToken);
      
      saveToken(currentToken);
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
   $.ajax({
     type: "POST",
     url: "blog/ajax/save.push.notification.php",
     data: "token=" + currentToken,
     success: function (response) {
       console.log(response);
       
     }
   });
    
  }

 




</script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/font/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/index.css" type="text/css" title="text/css">
</head>
<body>


    <header class="">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark header-bg">
      <a class="navbar-brand logo-bg" href="#">
        
        <div class="logo" style="height:35px;margin-top:-18px;">
         <b class="t-logo" style="
         
         font-size: 35px !important;font-weight: bolder;font-family: tahom;color: red;
          ">T</b>
          <span class="full-text" style="position: absolute;margin-top: 15px;margin-left: -5px;font-weight: bolder;
          color: red;font-size: 20px;
         ">echbuildz</span> <span class="TM" style="color: red;position: absolute;margin-left: 65px;margin-top:5px; font-weight: lighter;font-size: 10px;">TM</span>
      </div>
        
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <div id="nav-icon1">
  <span></span>
  <span></span>
  <span></span>
</div>
     </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item  pad-more">
              <a class="nav-link click-me bold-cont" href="blog/home"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
            </li>
                  
            <li class="nav-item active">
              <a class="nav-link bold-cont click-me" href="blog/home"> <i class="fa fa-newspaper-o" aria-hidden="true"></i> Blog</a>
            </li>  
           
            <li class="nav-item">
              <a class="nav-link bold-cont click-me" href="blog/content-videos"> <i class="fa fa-video-camera" aria-hidden="true"></i> Videos</a>
            </li>  

             
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle bold-cont click-me" style="font-weight:bolder;" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-tags" aria-hidden="true"></i>Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <?php $header_blog->fetch_categories();?>
         
        </div>
      </li>
            
          </ul>

          <input name="" class="custom-input more-for-input  more-note-search fontAwesome" id="user_search_cont" placeholder="🔎" type="text">
          <button class="more-design btn-second-theme" id="searcher">
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                 </div>
      </nav>
    </header>
      <div class="responsive-search-area">
   <div class="header-area-content-search">
   <div class="header-text">
   <input type="text" name="" id="search-special" placeholder="🔎" class=""><button class="more-design btn-second-theme">
   <i class="fa fa-search" aria-hidden="true"></i>
                    </button>

   </div>


   <div class="close-btn-search-area pull-right">
<i class="fa fa-close" aria-hidden="true"></i>
   </div>
   </div>
   <div class="search-response-responsive"></div>
   
   
   
   </div>
   <div class="overlay-more"></div>
    


 
      