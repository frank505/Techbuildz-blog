$(function() {$('.navbar-nav li a').bind('click', function(event) { $('.navbar-nav li').removeClass('active');
$(this).closest('li').addClass('active');var $anchor = $(this);var nav = $($anchor.attr('href'));if (nav.length) {
$('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top	}, 1500, 'easeInOutExpo');
event.preventDefault();} });});$(window).scroll(function(){if ($(this).scrollTop() > 100) {$('.scrollup').fadeIn();} else {$('.scrollup').fadeOut(); }});
$(".scrollup").click(function (e) { $("html, body").animate({scrollTop: 0}, 1000);return false;   e.preventDefault();});
function openCity(evt, cityName) {var i, tabcontent, tablinks;tabcontent = document.getElementsByClassName("tabcontent");
for (i = 0; i < tabcontent.length; i++) { tabcontent[i].style.display = "none";}tablinks = document.getElementsByClassName("tablinks");
for (i = 0; i < tabcontent.length; i++) {tablinks[i].classList.remove("active-content");}document.getElementById(cityName).style.display = "block";
evt.currentTarget.classList.add("active-content");}

window.addEventListener("load", add_class_url);
function add_class_url(){
var content = document.querySelectorAll(".content");
if(content !==null){
    content.forEach(function(value, index){
    value.parentNode.classList.add("custom-text-decoration");         
    });
}}
$(".navbar-toggler").on("click",function(e){
    $('#nav-icon1').toggleClass('open');
e.preventDefault();
});

$(document).on("click", ".at-svc-facebook",function(e){
$value = $(".id-share").val();
$.ajax({
    type: "get",
    url: "ajax/facebook.share.php?value="+$value,
    dataType: "Text/html",
    success: function (response) {
        alert(response);
    }
});
});

window.addEventListener("load", change_me);
function change_me(){
    var ul_content_paginate = document.querySelector(".ul-content-paginate");
    if(ul_content_paginate!==null){
        var anchor_elem = ul_content_paginate.querySelectorAll("div");
       anchor_elem.forEach(function(value, index){
           value.style.fontWeight="bolder";
           var a_nav = value.querySelectorAll("a");
           a_nav.forEach(function(val, i){
              val.classList.add("btn", "btn-primary", "reduce_me_please");
           });

       });
    }  
}
  
var videos = document.querySelectorAll("video");
if(videos!==null){
    videos.forEach(function(value, index){
        value.addEventListener("click", increase_video_clicks);
        value.addEventListener("ended", end_video);
        });        
}
function end_video(){
    var id_data = this.getAttribute("id-data");
      console.log(id_data);
       var ajax = new XMLHttpRequest();
       ajax.onreadystatechange =()=>{
    if(ajax.readyState==4 && ajax.status==200){
        console.log(ajax.responseText);     
    }

       }
       ajax.open("GET", "ajax/end.record.video.php?id="+id_data, true);
       ajax.send(null);

}

function increase_video_clicks(){
if(!(this.paused)){
    
}else{
    var id_data = this.getAttribute("id-data");
     var ajax = new XMLHttpRequest();
     ajax.onreadystatechange =()=>{
  if(ajax.readyState==4 && ajax.status==200){
      console.log(ajax.responseText);     
  }

     }
     ajax.open("GET", "ajax/click.record.video.php?id="+id_data, true);
     ajax.send(null);

}
}

$(".btn-comments").on("click", function(){
 $(".overlay").show();
var show_comments = document.querySelector(".side-bar-comments");
show_comments.classList.remove("hide-side");
show_comments.classList.add("show-side");
});

$(".overlay").on("click",function(){
    var show_comments = document.querySelector(".side-bar-comments");
    show_comments.classList.remove("show-side");
    show_comments.classList.add("hide-side");
    $(this).hide();
});
$(".close-div").on("click",function(){
    var show_comments = document.querySelector(".side-bar-comments");
    show_comments.classList.remove("show-side");
    show_comments.classList.add("hide-side");
    $(".overlay").hide();
});

$(document).on("click","#post_content", function(){
var cookie_area = document.querySelector("#cookie_area");
var text_inputer = document.querySelector(".text-inputter");
var validation_inputer = document.querySelector(".validation-inputter");
validation_inputer.classList.remove("alert", "alert-info","more-designs-here");
var post_id = document.querySelector("#post_id");
if(document.cookie.indexOf("franktechhouse=")==-1){
    $(".second-overlay").fadeIn();
    $(".div-register").fadeIn();
}else if(text_inputer.value==""){
   validation_inputer.classList.add("alert", "alert-info","more-designs-here");
   validation_inputer.innerHTML ="<b><i class='fa fa-warning'></i>&nbsp;please write a comment</b>";
}else{
     var form_data = new FormData();
     form_data.append("post", text_inputer.value);
     form_data.append("cookie_checker", cookie_area.value);
     form_data.append("post_id", post_id.value);
    var loading_gif = document.createElement("img");
    loading_gif.src="assets/img/spinner.gif";
    validation_inputer.classList.add("alert", "alert-info","more-designs-here");
    validation_inputer.appendChild(loading_gif);
    this.disabled="true";
     var ajax = new XMLHttpRequest();
     ajax.onreadystatechange=()=>{
         if(ajax.readyState==4 && ajax.status==200){
             validation_inputer.removeChild(loading_gif);
             validation_inputer.innerHTML = ajax.responseText;
             this.disabled=false;
         }
     } 
   ajax.open("POST", "ajax/post.comments.php", true);
   ajax.send(form_data);
}
});
$(document).on("click", ".sign-me-com", function(e){
    $(".second-overlay").fadeIn();
    $(".div-register").fadeIn();
    e.preventDefault();
});
$(".close-this").on("click",function(){
    $(".second-overlay").fadeOut();
    $(".div-register").fadeOut();
});
window.addEventListener("load", add_classes);
function add_classes(){
    var register_form = document.querySelector(".register-form");
    if(register_form!==null){
     var loop_me = register_form.querySelectorAll(".form-group");
   loop_me.forEach(function(value,index){
   value.querySelector(".form-control").classList.add("restyle-here");
   });
    }
}
$("#sign-me-please").on("click",function(){
$(".third-overlay").fadeIn();
$(".div-register-content").fadeIn();
});
$(".close-this-here").on("click",function(){
    $(".third-overlay").fadeOut();
    $(".div-register-content").fadeOut();
});

$("#submit_me").on("click",function(e){
    var response_text = document.querySelector("#response-text");
    var username = document.querySelector("#username");
    var email = document.querySelector("#email");
    var password = document.querySelector("#password");
    var confirm = document.querySelector("#confirm");
    var form_data = new FormData();
    form_data.append("username", username.value);
    form_data.append("email", email.value);
    form_data.append("password", password.value);
    form_data.append("confirm", confirm.value);
    response_text.classList.add("alert", "alert-info");
    var spinner = document.createElement("img");
    spinner.src="assets/img/spinner.gif";
    response_text.innerHTML="";
    response_text.appendChild(spinner);
    this.disabled="true";
var ajax = new XMLHttpRequest();
ajax.onreadystatechange = ()=>{
    if(ajax.readyState==4 && ajax.status==200){
        response_text.removeChild(spinner);
      response_text.innerHTML = ajax.responseText;
    this.disabled=false;
        }
}
ajax.open("POST", "ajax/user_registration.php",true);
ajax.send(form_data);
e.preventDefault();
});

$("#login").on("click",function(e){
    var email = document.querySelector("#email_login");
    var response_text = document.querySelector(".validation-login");
    var password = document.querySelector("#password_login");
    response_text.classList.add("alert", "alert-info");
    var spinner = document.createElement("img");
    spinner.src="assets/img/spinner.gif";
    response_text.innerHTML="";
    response_text.appendChild(spinner);
    this.disabled="true";
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = ()=>{
        if(ajax.readyState==4 && ajax.status==200){
            response_text.removeChild(spinner);
            response_text.innerHTML = ajax.responseText;
          this.disabled=false; 
          var response_cont = response_text.querySelector(".cookie_val"); 
        if(response_cont===null){

        }else if(response_cont!==null){
            setCookie("franktechhouse", response_cont.innerHTML, 30);
            location.reload();
        }
        }
    } 
    ajax.open("GET", "ajax/user_login.php?email="+email.value+"&password="+password.value,true);
    ajax.send(null);
e.preventDefault();
});

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

$(document).on("click",".btn-load-replies",function(){
var replies_area = this.nextElementSibling.nextElementSibling;
if(replies_area.style.display=="block"){
    replies_area.style.display="none";
}else{
    replies_area.style.display="block";
    var create_div = document.createElement("div");
    create_div.classList.add("comment-show");
    var id_comments = this.getAttribute("id-replies");
    var post_id = this.getAttribute("id-post");
    var last_cont = this.nextElementSibling.nextElementSibling.querySelector(".btn-post-replies");
    var next_cont = this.nextElementSibling.nextElementSibling;
    next_cont.appendChild(create_div);
   ajax = new XMLHttpRequest();
    ajax.onreadystatechange =()=>{
        if(ajax.readyState==4 && ajax.status==200){
        create_div.innerHTML = ajax.responseText;
        }
    }
}
ajax.open("GET", "ajax/load.user.approved.replies.php?co_id="+id_comments+"&po_id="+post_id,true);
ajax.send(null);
});
       

$(document).on("click",".more-comments",function(){
 var id = this.getAttribute("id");
 var post_id = this.getAttribute("post-id");
 var response_area = document.querySelector(".side-bar-comments");
 var new_child = document.createElement("img");
 new_child.classList.add("replicate-me");
 new_child.src="assets/img/spinner.gif";
 var content_remove = document.querySelector(".more-comments");  
 var ajax = new XMLHttpRequest();
 content_remove.parentNode.insertBefore(new_child, content_remove);
content_remove.parentNode.removeChild(content_remove);
 ajax.onreadystatechange = ()=>{
     if(ajax.readyState==4 && ajax.status==200){
        new_child.parentNode.removeChild(new_child);
         response_area.innerHTML+=ajax.responseText;
     }
 }
 ajax.open("GET", "ajax/load.more.comments.php?id="+id+"&post_id="+post_id, true);
 ajax.send(null);
});


$(document).on("click", ".btn-post-replies",function(){
    if(document.cookie.indexOf("franktechhouse=")==-1){
        $(".second-overlay").fadeIn();
        $(".div-register").fadeIn();
    }else{
        var cookie_area = document.querySelector("#cookie_area");
        var text_area = this.parentNode.querySelector(".text-inputter-replies");
var validation_response = this.parentNode.querySelector(".validation-inputter-replies");
validation_response.innerHTML="";
validation_response.classList.remove("alert", "alert-info");
comment_id = this.getAttribute("comment-id");
post_id = this.getAttribute("id-pst-replies");
form_data = new FormData();
form_data.append("post", text_area.value);
form_data.append("comment_id", comment_id);
form_data.append("post_id",post_id);
form_data.append("cookie_checker", cookie_area.value);
var ajax = new XMLHttpRequest();
ajax.onreadystatechange = ()=>{
    if(ajax.readyState==4 && ajax.status==200){
        validation_response.classList.add("alert", "alert-info");
    validation_response.innerHTML=ajax.responseText;
    }
}
ajax.open("POST", "ajax/post.user.replies.php",true);
ajax.send(form_data);



    }

});

window.addEventListener("load", restyle_comments);
function restyle_comments(){
    var content_comments = document.querySelectorAll(".content-comment");
    if(content_comments!==null){
        content_comments.forEach(function(value,index){
            var first_bold = value.querySelector("b");
            first_bold.classList.add("margin-class");
            var third_child = first_bold.nextElementSibling.nextElementSibling;
            third_child.classList.add("more_here");
        });
        
    }
}

$(document).on("click",".load_user_replies_here",function(){
    var content_area = this.parentNode.parentNode;
    var id = this.getAttribute("id");
    var post_id = this.getAttribute("post-id-replies");
    var comment_id = this.getAttribute("comment-id-replies");
    var content_remove = this;
    var ajax = new XMLHttpRequest();
    var new_child = document.createElement("img");
    new_child.classList.add("replicate-me");
    new_child.src="assets/img/spinner.gif";
    content_remove.parentNode.insertBefore(new_child, content_remove);
    content_remove.parentNode.removeChild(content_remove); 
    ajax.onreadystatechange=()=>{
        if(ajax.readyState==4 && ajax.status==200){
            new_child.parentNode.removeChild(new_child); 
         content_area.innerHTML+=ajax.responseText;
              
        }
    }
    ajax.open("GET", "ajax/load.more.replies.php?id="+id+"&post_id="+post_id+"&comment_id="+comment_id, true);
    ajax.send(null);
    });
$(document).on("click", "#sub_mes",function(e){
$username = $("#username").val();
$email = $("#email").val();
$subject = $("#subject").val();
$message = $("#message").val();
var validation = document.querySelector(".main-validation");
if($username==""){
    alert("username is empty");
}else if($email==""){
    alert("email cannot be left empty");
}else if($subject==""){
    alert("subject cannot be left empty");
}
else if($message==""){
    alert("message cannot be left empty");
}else{
    var form_data  = new FormData();
    form_data.append("username", $username);
    form_data.append("email", $email);
    form_data.append("subject", $subject);
    form_data.append("message", $message);
    validation.classList.add("alert","alert-info");
  var ajax = new XMLHttpRequest();
  ajax.onreadystatechange =()=>{
      if(ajax.readyState==4 && ajax.status==200){
          validation.innerHTML=ajax.responseText;
      }
  }
   ajax.open("POST", "ajax/message.php",true);
   ajax.send(form_data);
}
e.preventDefault();
});



window.addEventListener("resize", remove_him);
window.addEventListener("load", remove_him);
function remove_him(){
    var searcher = document.querySelector("#search-special");
    var search_response = document.querySelector(".search-response-responsive");
    if(window.innerWidth > 768){
        if($(".responsive-search-area").show()){
     if(search_response !==null){
    $(".responsive-search-area").hide();
    $(".overlay-more").hide();  
    }
        }
           
    }
}
window.addEventListener("resize", remove_ml_auto);
window.addEventListener("load", remove_ml_auto);
function remove_ml_auto(){
    if((window.innerWidth > 768) && (window.innerWidth <=900) ){
        var navbar_nav = document.querySelector(".navbar-nav");
        if(navbar_nav !==null){
            user_search_cont = document.querySelector("#user_search_cont");
            user_search_cont.classList.add("margin-me");
            navbar_nav.classList.remove("ml-auto");
        }
        
    }else if((window.innerWidth <768) && (window.innerWidth >900) ){
        var navbar_nav = document.querySelector(".navbar-nav");
        if(navbar_nav !==null){
            navbar_nav.classList.add("ml-auto");
        }
        
    }

}
window.addEventListener("resize", extra_me);
window.addEventListener("load", extra_me);
function extra_me(){
    if((window.innerWidth > 768) && (window.innerWidth <=820) ){
        var navbar_nav = document.querySelector(".navbar-nav");
        if(navbar_nav !==null){
            
            navbar_nav.classList.add("extra-me")
        }
        
    }else if((window.innerWidth <768) && (window.innerWidth >820) ){
        var navbar_nav = document.querySelector(".navbar-nav");
        if(navbar_nav !==null){
            navbar_nav.classList.remove("extra-me");
        }
        
    }
}


$("#search-special").on("keyup",function(){
    var searcher = document.querySelector("#search-special");
    var search_response = document.querySelector(".search-response-responsive");
    search_response.innerHTML="";
          var ajax = new XMLHttpRequest();
          search_response.innerHTML = "<center><img src='../assets/img/gif.gif'/></center>";
          ajax.onreadystatechange = ()=>{
              if(ajax.readyState==4 && ajax.status==200){
                  search_response.innerHTML = ajax.responseText;
              }
          }
          ajax.open("GET", "ajax/search.php?get_var="+searcher.value,true);
          ajax.send(null);
    
    });

    window.addEventListener("load", change_src);
function change_src(){
    $(".img_up").each(function(){
    $(this).attr("src", $(this).attr("src").replace("../",""));    
    })
    
    $(".vid_up").each(function(){
        $(this).attr("src", $(this).attr("src").replace("../",""));    
        })
    
}

$(".more-note-search").on("click",function(){
 $(".responsive-search-area").fadeIn();
 $(".overlay-more").fadeIn();
});
$(".more-note-search").on("keyup",function(){
    $(".responsive-search-area").fadeIn();
    $(".overlay-more").fadeIn();
   });
$(".close-btn-search-area").on("click",function(){
    $(".responsive-search-area").fadeOut();
    $(".overlay-more").fadeOut();
});
window.addEventListener("load", cursor_add);
function cursor_add(){
var search_btn = document.querySelector("#searcher");
if(search_btn!==null){
    search_btn.style.cursor="pointer";
}

}



var this_slide = document.querySelector(".mySlides");
if(this_slide !==null){

    var slideIndex = 0;
    carousel();
    function carousel() {
        var i;
     var x = document.getElementsByClassName("mySlides");
     for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
        }
     slideIndex++;
     if (slideIndex > x.length) {
         slideIndex = 1
        }
            x[slideIndex-1].style.display = "block";
        setTimeout(carousel, 2000);
     }
    

}

$("#save_email").on("click",function(){
    
$save_me = $("#save_me").val();
$(".inner_content_sub").html("loading...");
$.ajax({
    type: "POST",
    url: "ajax/add_sub_email.php",
    data: "data="+$save_me,
    success: function (response) {
        if(response=="thanks for subscribing to our news letter"){
            setTimeout(() => {
                $("#myModal").fadeOut();
      $(".overlay-more-modal").fadeOut();
            }, 200);
        }else{
            
        }
      $(".inner_content_sub").html(response);  
      console.log(response);
    }
});

});

 
