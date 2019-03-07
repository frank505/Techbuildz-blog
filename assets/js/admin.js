$(".click-drop").click(function(){var fa_angle = this.lastChild;if(fa_angle.classList.contains("fa-angle-left")){
fa_angle.classList.remove("fa-angle-left");fa_angle.classList.add("fa-angle-down");$(this).next().slideToggle();
}else{fa_angle.classList.add("fa-angle-left");fa_angle.classList.remove("fa-angle-down");$(this).next().slideToggle();}});
$(".side-me").on("mouseover",function(){ this.firstElementChild.style.color="white";});$(".side-me").on("mouseout",function(){this.firstElementChild.style.color="rgb(37,37,37)";})
//check the file type for user registration
$('#file-content').on("change", function(){var sel_file  = document.getElementById('file-content').files[0];
if (!(sel_file.type.match('image.*'))) {alert("only images are allowed here");$("#file-content").val("");} 
else if(sel_file.size > 2097152){alert("only images under 2mb are allowed");$("#file-content").val("");} }); 
//from here on we do validation of registration form and registration itself too using ajax
$("#btn-clear").click(function(){$("#email").val(""); $("#password").val("");$("#confirm-password").val("");$("#file-content").val("");$("#username").val("");
$("#message").val("");});var btn_registration = document.querySelector("#btn-registration");if(btn_registration !==null){ btn_registration.addEventListener("click", admin_registration);}
function admin_registration(e){var email = document.querySelector("#email");var username = document.querySelector("#username");
var password = document.querySelector("#password");var confirm = document.querySelector("#confirm-password");
var file_label = document.querySelector("#file-label");var file_img = document.querySelector("#file-content");
var message = document.querySelector("#message");var btn_clear = document.querySelector("#btn-clear");
var next_user_elem = username.nextElementSibling.firstChild;var next_email_elem = email.nextElementSibling.firstChild;
var next_password_elem = password.nextElementSibling.firstChild;var next_confirm_elem = confirm.nextElementSibling.firstChild;
var next_file_img_elem = file_img.nextElementSibling.firstChild;var next_message_elem = message.nextElementSibling.firstChild;
var this_btn = this;if(username.value==""){next_user_elem.innerHTML="username field cannot be left empty"; next_email_elem.innerHTML ="";
 next_password_elem.innerHTML="";next_confirm_elem.innerHTML ="";next_file_img_elem.innerHTML ="";
 next_message_elem.innerHTML = "";} else if(email.value==""){next_email_elem.innerHTML="email field cannot be left empty"; next_user_elem.innerHTML ="";
 next_password_elem.innerHTML="";next_confirm_elem.innerHTML ="";next_file_img_elem.innerHTML ="";next_message_elem.innerHTML = "";}
else if(password.value==""){next_password_elem.innerHTML="password field cannot be left empty";next_user_elem.innerHTML ="";
next_email_elem.innerHTML="";next_confirm_elem.innerHTML ="";next_file_img_elem.innerHTML ="";next_message_elem.innerHTML = "";
}else if(confirm.value==""){next_confirm_elem.innerHTML="confirm password field cannot be left empty";next_user_elem.innerHTML ="";
 next_password_elem.innerHTML="";next_email_elem.innerHTML ="";next_file_img_elem.innerHTML ="";next_message_elem.innerHTML = "";
}else if(message.value==""){next_message_elem.innerHTML="please add a description ";next_user_elem.innerHTML ="";next_password_elem.innerHTML="";
 next_confirm_elem.innerHTML ="";next_file_img_elem.innerHTML ="";next_email_elem.innerHTML = "";}
else if(file_img.value==""){next_file_img_elem.innerHTML="please add a picture";next_user_elem.innerHTML ="";next_password_elem.innerHTML="";
 next_confirm_elem.innerHTML ="";next_email_elem.innerHTML ="";next_message_elem.innerHTML = "";}
else if(confirm.value != password.value){next_confirm_elem.innerHTML="password are dont match";next_user_elem.innerHTML ="";
 next_password_elem.innerHTML="";next_email_elem.innerHTML ="";next_file_img_elem.innerHTML ="";next_message_elem.innerHTML = "";} 
else{
 var data_send = new FormData();
var sent_indicator = document.getElementById("sent_indicator");
data_send.append("username", username.value);
    data_send.append("email", email.value);
    data_send.append("password", password.value);
    data_send.append("confirm", confirm.value);
    data_send.append("message", message.value);
    data_send.append("image", file_img.files[0]);
     var xmlHttp_ajax = new XMLHttpRequest();
     this_btn.disabled="true";
     this_btn.style.cursor="w-resize";
     sent_indicator.classList.add("alert","alert-danger");
     sent_indicator.innerHTML='<img src="../assets/img/spinner.gif"/>';
     xmlHttp_ajax.onreadystatechange = function(){
    if(xmlHttp_ajax.readyState===4 && xmlHttp_ajax.status===200){
      sent_indicator.innerHTML = xmlHttp_ajax.responseText;
      this_btn.setAttribute("style", "cursor:pointer");
      this_btn.disabled=false;
    }
     }
     xmlHttp_ajax.open("POST","../ajax/admin_registration.php",true);//you can always figure out your root file directory
    xmlHttp_ajax.send(data_send);
  }
e.preventDefault();
}

$("#btn-update").click(function (e) {
    var this_btn = this;
var username = document.querySelector("#username");var password = document.querySelector("#password");var confirm = document.querySelector("#confirm-password");
var file_label = document.querySelector("#file-label");var file_img = document.querySelector("#file-content");var message = document.querySelector("#message");
var hidden_value = document.querySelector("#hidden_value"); 
var form_data = new FormData();
 form_data.append("username", username.value);
 form_data.append("email", email.value);
    form_data.append("password", password.value);
    form_data.append("confirm", confirm.value);
    form_data.append("message", message.value);
    form_data.append("image", file_img.files[0]);
    form_data.append("hidden_value", hidden_value.value);
 var ajax_req = new XMLHttpRequest();
 this_btn.disabled="true";
this_btn.style.cursor="w-resize";
sent_indicator.classList.add("alert","alert-danger");
sent_indicator.innerHTML='<img src="../assets/img/spinner.gif"/>';
 ajax_req.onreadystatechange = () =>{
     if(ajax_req.readyState===4 && ajax_req.status===200){
         sent_indicator.innerHTML= ajax_req.responseText;
        this_btn.setAttribute("style", "cursor:pointer");
        this_btn.disabled=false;  
     }
 }   

ajax_req.open("POST", "../ajax/update_admin_profile.php",true);
ajax_req.send(form_data);

    e.preventDefault();
    
});

window.addEventListener("load", window_loads);
function window_loads(){
    var pagination_link = document.querySelector(".ul-content-paginate");
    if(pagination_link!==null){
        var nav_links = pagination_link.querySelectorAll("div");
        var page_counts = pagination_link.querySelector(".page-count");
        page_counts.classList.add("style-pagination-numbers");
        for (let index = 0; index < nav_links.length; index++) {
            let nav_items = nav_links[index].querySelectorAll("a");
              for (let index = 0; index < nav_items.length; index++) {
                   nav_items[index].classList.add("btn", "header-bg","more-styling", "custom_btn");
                  
              }    
        }
    }
}

 $("#cat_text_area").on("keyup", function(){
var next_elem = this.nextElementSibling;
if(next_elem.innerHTML!=""){
    next_elem.innerHTML="";
} 
});

$("#add_category").on("click" , function(){
var cat_text_area = document.querySelector("#cat_text_area");
if(cat_text_area.value==""){
   let center_elem =  document.createElement("center");
    center_elem.classList.add("alert", "alert-danger");
center_elem.innerHTML="<i class='fa fa-warning' aria-hidden='true'></i>&nbsp;please be sure that this field is not empty";
let report =  cat_text_area.nextElementSibling;
report.appendChild(center_elem);
}else if(cat_text_area.value!=""){
    let center_elem =  document.createElement("center");
    center_elem.classList.add("alert", "alert-danger");
center_elem.innerHTML='<img src="../assets/img/spinner.gif"/>';
let report =  cat_text_area.nextElementSibling;
report.innerHTML="";
report.appendChild(center_elem);
form_data = new FormData();
form_data.append("cat", cat_text_area.value);
    var ajax = new XMLHttpRequest();
    this.disabled="true";
    this.style.cursor="w-resize";
    ajax.onreadystatechange = ()=>{
        if(ajax.readyState===4 && ajax.status===200){
            center_elem.innerHTML = ajax.responseText;
            this.disabled=false;
            this.style.cursor="pointer";
            //load_content();
        }
    }
    ajax.open("POST", "../ajax/add_category.php",true);
ajax.send(form_data);
}
});


function update_click(){
    var tbody_content = document.querySelector(".tbody_content");
    if(tbody_content !==null){
   
        var ajax_req = new XMLHttpRequest();
        ajax_req.onreadystatechange = ()=>{
         if(ajax_req.readyState===4 && ajax_req.status===200){
             tbody_content.innerHTML = ajax_req.responseText;
         }
    
        }
       ajax_req.open("GET", "../ajax/load_categories.php",true);
       ajax_req.send(null);
    }
}

$("#data_close").on("click",function(){
    update_click();
});
$("#close_me").on("click",function(){
update_click();
});

$(document).on("click",".btn-delete",function(){
var id = this.getAttribute("id");
var ajax_req = new XMLHttpRequest();
    ajax_req.onreadystatechange = ()=>{
     if(ajax_req.readyState===4 && ajax_req.status===200){
         alert(ajax_req.responseText);
         location.reload();
     }
    }
   ajax_req.open("GET", "../ajax/delete_categories.php?get_var="+id,true);
   ajax_req.send(null);
});

$("#live_search").on("keyup",function(){
if(this.value==""){

}else if(this.value!=""){
    var tbody_content = document.querySelector(".tbody_content");
    var value = this.value;
 var ajax_req = new XMLHttpRequest();
    ajax_req.onreadystatechange = ()=>{
     if(ajax_req.readyState===4 && ajax_req.status===200){
         tbody_content.innerHTML = ajax_req.responseText;
     }
    }
   ajax_req.open("GET", "../ajax/cat_search.php?get_var="+value,true);
   ajax_req.send(null);
}
});
//wyswyig starts here
var make_bold = document.getElementById("bold_btn");
$("#bold_btn").on("click",function(){
    document.execCommand("bold",false,null);
});

$("#btn_italic").on("click",function(){
    document.execCommand("italic",false,null);
});
window.onload = function(){
  document.execCommand("FontSize",false,"3");
}
document.onclick = function(){
$("#btn_size").slideUp();
}
$("#underline_txt").on("click", function(){
    document.execCommand("underline",false,null);
});

$("#forecolor").on("click",function(){
    var color = prompt("define a basic color here", "");
    document.execCommand("Forecolor",false,color);
});

$("#text_size").on("click", function(e){
    $("#btn_size").slideToggle();
    e.stopPropagation();
});
$("#small_text").on("click",function(e){
    document.execCommand("FontSize",false,"1");
    e.stopPropagation();
});

$("#normal_text").on("click",function(e){
    document.execCommand("FontSize",false,"3");
    e.stopPropagation();
});

$("#medium_text").on("click",function(e){
    document.execCommand("FontSize",false,"4");
    e.stopPropagation();
});

$("#large_text").click("click",function(e){
    document.execCommand("FontSize",false,"5");
    e.stopPropagation();
});
$("#extra_large_text").on("click",function(e){
    document.execCommand("FontSize",false,"6");
    e.stopPropagation();
});
$("#strike_through").on("click",function(){
    document.execCommand("strikeThrough",false,null);
});
$("#text_font").on("click",function(){
    var font = prompt("choose a font","");
    document.execCommand("FontName",false,font);
});
$("#text_url").on("click",function(){
    var link = prompt("enter link","");
    document.execCommand("createLink",false,link);
});

$("#remove_link").on("click",function(){
    document.execCommand("unlink",false,false);
});

$("#text_center").on("click",function(){
    document.execCommand("justifyCenter",false,null);
});
$("#text_left").on("click",function(){
    document.execCommand("justifyLeft",false,null);
});
$("#text_right").on("click",function(){
    document.execCommand("justifyRight",false,null);
});
$("#ordered_list").on("click", function(){
    document.execCommand("insertOrderedList",false,null);
});
$("#unordered_list").on("click",function(){
    document.execCommand("insertUnOrderedList",false,null);
});
$("#clear").on("click",function(){
    edit_div = document.getElementById("editable_div");
    edit_div.innerHTML="";
});
$("#file_zip").on("change", function(){
    var file = this.files[0];
    var file_ext = file.name.substr(file.name.lastIndexOf(".")+1);
    if(file_ext!=="zip"){
        alert("this is not a zip file");
        this.value="";
    }else if(file.size > 10485760){
        alert("no zip files above 10mb are allowed");
        this.value="";
    }else {
        
    
    }
   
});

$("#upload_zip").on("click",function(){
    var filo = document.querySelector("#file_zip");
    var file = filo.files[0];
    var file_ext = file.name.substr(file.name.lastIndexOf(".")+1);
    var ul_content_zip = document.querySelector("#ul_content_zip"); 
    if(filo.value==""){
  alert("no file selected");
    }else if(file_ext!=="zip"){
      alert("this is not a zip file");
        filo.value="";
    }else if(file.size > 10485760){
        alert("no zip files above 10mb are allowed");
        filo.value;
    }else{
        var form_data = new FormData();
        this.disabled="true";
        form_data.append("zip_file", file);
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = ()=>{
            if(ajax.readyState==4 && ajax.status==200){
               ul_content_zip.innerHTML += ajax.responseText;
               this.disabled=false;
            }
        }
        ajax.open("POST", "../ajax/wysiwyg_zip.php",true);
        ajax.send(form_data);
    }
});
$("#add_selected_zip").on("click",function(){
    var ul_content_zip = document.querySelector("#ul_content_zip");
    var editable_div = document.querySelector("#editable_div");
    editable_div.innerHTML +=ul_content_zip.innerHTML;
});
$("#clear_me_zip").on("click", function(){
    var ul_content_zip = document.querySelector("#ul_content_zip");
  ul_content_zip.innerHTML="";
});
function replaceSelectedText(replacementText) {
    var sel, range;
    if (window.getSelection) {
        sel = window.getSelection();
        if (sel.rangeCount) {
            range = sel.getRangeAt(0);
          range.deleteContents();
          var div = document.createElement("div");
          div.innerHTML=replacementText;
          var frag = document.createDocumentFragment(), child;
          while((child=div.firstChild)) {
              frag.appendChild(child);
          }    
          range.insertNode(frag);
        }
    } else if (document.selection && document.selection.createRange) {
        range = document.selection.createRange();
        range.pasteHTML(replacementText);
    }
}

$("#add_code").on("click",function(){
        replaceSelectedText("<code class='codes' id="+Date.now()+">"+window.getSelection().toString()+"</code>");    
});
$("#remove_code").on("click",function(){
     var b = document.createElement("span");
      var codes = document.querySelectorAll(".codes");
      codes.forEach(function(value,index){
       value.parentNode.insertBefore(b, value.nextSibling);
       b.innerHTML=".";
       b.focus();
      });
})
  
window.addEventListener("load",add_selected_disbaled);
    function add_selected_disbaled(){
var add_selected_disbaled = document.querySelector("#add_selected");
if(add_selected_disbaled!==null){
    add_selected_disbaled.disabled="true";
    add_selected_disbaled.style.cursor="w-resize";
}

    }

 $("#upload_btn").on("click",function(){
     var ul_content = document.querySelector("#ul_content");
    var fp = document.querySelector("#file_img");
    array_elem = ["image/jpeg", "image/jpg", "image/png"];
    if(fp.value==""){
        alert("please select an image");
    } else if(fp.value !=""){
                var index;
                var form_data = new FormData();
        for ( index = 0; index < fp.files.length; index++) {
              var names = fp.files[index];    
            if(fp.files[index].size > 2097152){
                alert(fp.files[index].name + "  is larger than 2 megabytes");
                fp.value="";
                break;
            } else if( array_elem.indexOf(fp.files[index].type.toLowerCase()) ==-1 ){
                alert("invalid file type please be sure to use only png and jpg files");
                fp.value="";
                break;
            }
            else{      
                     var file_name_get = fp.files[index].name;
                     var file_name_gotten = file_name_get.substr(file_name_get.lastIndexOf(".")+1);
                    var blob = fp.files[index].slice(0, -1, fp.files[index].type);
        var newfile  = new File([blob], Date.now()+"."+file_name_gotten, {type: fp.files[index].type});
                      this.disabled="true";
                      this.style.cursor="w-resize";   
                      var uploading_p = document.querySelector("#uploading_p");
               form_data.append("file[]", newfile);
                var ajax = new XMLHttpRequest();
                uploading_p.classList.add("alert", "alert-danger");
                uploading_p.innerHTML = '<img src="../assets/img/spinner.gif"/>';
                ajax.onreadystatechange = ()=>{
                    if(ajax.readyState==4 && ajax.status==200){
                        ul_content.innerHTML += ajax.responseText;
                        this.disabled = false;
                        this.style.cursor = "pointer";
                        uploading_p.innerHTML = "<b><i class='fa fa-check-circle-o' aria-hidden='true'></i>&nbsp;images successfully uploaded</b>";
                        var add_selected_disbaled = document.querySelector("#add_selected");
                        add_selected_disbaled.style.cursor= "pointer";
                        add_selected_disbaled.disabled=false;
                    }
                }
                ajax.open("POST", "../ajax/ajax_wysiwyg_multiple_img.php",true);
                ajax.send(form_data);
            }
            
            
        }
        fp.value="";
           } 
   
});


window.addEventListener("load",add_selected_video);
function add_selected_video(){
var add_selected_disbaled = document.querySelector("#add_selected_video");
if(add_selected_disbaled!==null){
add_selected_disbaled.disabled="true";
add_selected_disbaled.style.cursor="w-resize";
}

}


$("#clear_me").on("click",function(){
var clear_content = document.querySelector("#ul_content");
var uploading_p = document.querySelector("#uploading_p");
uploading_p.classList.remove("alert","alert-danger");
uploading_p.innerHTML="";
clear_content.innerHTML ="";
});

$("#clear_vid").on("click",function(){
    var clear_content = document.querySelector("#ul_content");
    var uploading_p = document.querySelector("#uploading_p_vid");
    uploading_p.classList.remove("alert","alert-danger");
    uploading_p.innerHTML="";
    clear_content.innerHTML ="";
});

$("#add_selected").on("click",function(){
var cont = document.querySelector("#ul_content");
var editable_div = document.querySelector("#editable_div");
editable_div.innerHTML+=cont.innerHTML;
});

$("#upload_btn_vid").on("click",function(){
    var ul_content = document.querySelector("#ul_content_vid");
    var fp = document.querySelector("#vid_img");
    array_elem = ["video/mp4", "video/3gp", "video/mkv", "video/avi"];
    if(fp.value==""){
        alert("please select a video");
    } else if(fp.value !=""){
                var index;
                var form_data_vid = new FormData();
        for ( index = 0; index < fp.files.length; index++) {
              var names = fp.files[index];    
            if(fp.files[index].size > 10485760){ //10 mb file size you can change it if you want to
                alert(fp.files[index].name + "  is larger than 10 megabytes");
                fp.value="";
                break;
            } else if( array_elem.indexOf(fp.files[index].type.toLowerCase()) ==-1 ){
                alert("invalid file type please be sure to use only mp4, 3gp, mkv or avi and  files");
                fp.value="";
                break;
            }
            else{      
                     var file_name_get = fp.files[index].name;
                     var file_name_gotten = file_name_get.substr(file_name_get.lastIndexOf(".")+1);
                    var blob = fp.files[index].slice(0, -1, fp.files[index].type);
        var newfile  = new File([blob], Date.now()+"."+file_name_gotten, {type: fp.files[index].type});
                      this.disabled="true";
                      this.style.cursor="w-resize";   
                      var uploading_p = document.querySelector("#uploading_p_vid");
               form_data_vid.append("files[]", newfile);
                var ajax = new XMLHttpRequest();
                uploading_p.classList.add("alert", "alert-danger");
                uploading_p.innerHTML = '<img src="../assets/img/spinner.gif"/>';
                ajax.onreadystatechange = ()=>{
          if(ajax.readyState==4 && ajax.status==200){
            ul_content.innerHTML += ajax.responseText;
            this.disabled = false;
            this.style.cursor = "pointer";
            uploading_p.innerHTML = "<b><i class='fa fa-check-circle-o' aria-hidden='true'></i>&nbsp;videos successfully uploaded</b>";
            var add_selected_disbaled = document.querySelector("#add_selected_video");
           add_selected_disbaled.style.cursor= "pointer";
          add_selected_disbaled.disabled=false;
                    }
                }
                ajax.open("POST", "../ajax/ajax_wysiwyg_multiple_vid.php",true);
                ajax.send(form_data_vid);
            }
             }
        fp.value="";
           }

});
    $("#add_selected_video").on("click",function(){
        var ul_content = document.querySelector("#ul_content_vid");
        var editable_div = document.querySelector("#editable_div");
        editable_div.innerHTML+=ul_content.innerHTML;
     
    });
   
    $("#image_area").on("change",function(){
        var single_file = document.querySelector("#image_area").files[0];
        array_elem = ["image/jpeg", "image/jpg", "image/png"];
        if(single_file.size > 2097152){
            alert(single_file.name + "  is larger than 2 megabytes");
            single_file.value="";
        } else if( array_elem.indexOf(single_file.type.toLowerCase()) ==-1 ){
            alert("invalid file type please be sure to use only png and jpg files");
            single_file.value="";
        }else{

        }
    });

      function add_into_text_area(){
        var text_area_value = document.getElementById("textarea_get"); 
        if(text_area_value!==null){
            var div_content_value = document.getElementById("editable_div");
            text_area_value.value = div_content_value.innerHTML;
        
        }
          }

    $("#btn_publisher").on("click",function(e){
        var main_img = document.getElementById("image_area");
       var post_title_text = document.getElementById("post_title_text");//variable for post title
       var text_area_val = document.getElementById("textarea_get"); //variable for text area
       var select_comp = document.getElementById("select_option");
       var div_content = document.getElementById("editable_div");
       var unique_id_post = document.getElementById("unique_id_post");
       text_area_val.value="";
            if(post_title_text.value==""){
           alert("title area cannot be left empty");
           }else if(main_img.value==""){
             alert("poster image cannot be left empty too");
           }
           else if(div_content.textContent.trim().length==0 || div_content.innerText.trim().length==0 ){
             alert("post content area cannot be left empty");
           }
           else if(select_comp.selectedIndex==0){
             alert("please select a category");
           
           }else{
                  add_into_text_area();
               var sent_indicator = document.querySelector("#sent_indicator");
               sent_indicator.classList.add("alert", "alert-danger");
               var form_post = new FormData();
               form_post.append("image", main_img.files[0]);
               form_post.append("header", post_title_text.value);
               form_post.append("text_area", text_area_val.value);
               form_post.append("post_creator", unique_id_post.value);
               form_post.append("category", select_comp.options[select_comp.selectedIndex].text);
               var ajax = new XMLHttpRequest();
               ajax.onreadystatechange = ()=>{
                   sent_indicator.innerHTML = '<img src="../assets/img/spinner.gif"/>';
                if(ajax.readyState===4 && ajax.status===200){
                   sent_indicator.innerHTML = ajax.responseText;

                }
               }
               ajax.open("POST","../ajax/post_content.php",true);
               ajax.send(form_post);
           }
        e.preventDefault();
       });
       $("#check_all").on("click",function(){
        var get_all = document.querySelectorAll(".check-all");
         for (let index = 0; index < get_all.length; index++) {
              if(!(get_all[index].checked)){
                  get_all[index].checked = true;
              }else if(get_all[index].checked){
                  get_all[index].checked = false;
              }
             
         }
       });

       $(document).on("click",".view",function(){
        var id = this.getAttribute("id");
        var body_content = document.querySelector("#body_content");
        var ajax = new XMLHttpRequest();
         body_content.innerHTML = "<center><img src='../assets/img/gif.gif'/></center>";
        ajax.onreadystatechange = ()=>{
            if(ajax.readyState===4 && ajax.status===200){
             body_content.innerHTML = ajax.responseText;
             var img_up = document.querySelectorAll(".img_up");
             var center_tag  = document.createElement("center");
             for (let index = 0; index < img_up.length; index++) {
                 img_up[index].parentNode.insertBefore(center_tag, img_up[index]);
                 
                
                 
             }
            }
        }
  ajax.open("GET","../ajax/load_post.php?id="+id, true);
  ajax.send(null);
       });

     $("#live_search_here").on("keyup",function(){
         var tbody_content = document.querySelector(".tbody_content");
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = ()=>{
            if(ajax.readyState==4 && ajax.status==200){
                tbody_content.innerHTML = ajax.responseText;
            }
        }
        ajax.open("GET", "../ajax/search_view_post.php?search="+this.value,true);
        ajax.send(null);
     });

    $(document).on("click", ".search-more",function(){
        var tbody_content = document.querySelector(".tbody_content");
         var live_search_here = document.querySelector("#live_search_here").value;
     var id = this.getAttribute("id");
     var new_child = document.createElement("img");
     new_child.classList.add("replicate-me");
     new_child.src="../assets/img/spinner.gif";
     var content_remove = document.querySelector(".search-more");
     content_remove.parentNode.insertBefore(new_child, content_remove);
     content_remove.parentNode.removeChild(content_remove);
      var ajax = new XMLHttpRequest();
      ajax.onreadystatechange = ()=>{
          if(ajax.readyState==4 && ajax.status==200){
              new_child.parentNode.removeChild(new_child);    
             tbody_content.innerHTML+=ajax.responseText;
          }
      }
      ajax.open("GET", "../ajax/load_more_search_post.php?id="+id+"&search="+live_search_here,true);
      ajax.send(null);
    });

   $(":checkbox").attr("autocomplete", "false");

    $(document).on("click","#delete_all", function(){
     var check_all = document.querySelectorAll(".check-all");
     var tbody_content = document.querySelector(".tbody_content");
     var clone_elem = tbody_content.cloneNode(true);
     for (var index = 0; index < check_all.length; index++) {
      if(!(check_all[index].checked)){
            
    } else if(check_all[index].checked){
        var nex_show = document.querySelector(".nex");
        var attribute = check_all[index].getAttribute("id");
       var ajax = new XMLHttpRequest();
       nex_show.innerHTML ="<center><div class='alert alert-danger'style='width:40%; margin-left:40%;margin-right:15%;'><img src='../assets/img/spinner.gif'/></div></center>"
       ajax.onreadystatechange = ()=> {
           if(ajax.status==404){
               nex_show.innerHTML="<center><div class='alert alert-danger'style='width:40%; margin-left:40%;margin-right:15%;'><i class='fa fa-warning'></i> looks not to be connecting..content was not deleted please be notified</div></center>";
             return false;
           }
      else if(ajax.readyState==4 && ajax.status==200){
         document.querySelector(".nex").innerHTML = ajax.responseText;
                
        }
       

      }
    ajax.open("GET","../ajax/delete_post.php?delete_id="+attribute,true);
       ajax.send(null);
       check_all[index].parentNode.parentNode.parentNode.parentNode.
         removeChild(check_all[index].parentNode.parentNode.parentNode);
      
    }
     }
    });

     $("#btn_publisher_update").on("click", function(e){
       
        var main_img = document.getElementById("image_area");
        var post_title_text = document.getElementById("post_title_text");//variable for post title
        var text_area_val = document.getElementById("textarea_get"); //variable for text area
        var select_comp = document.getElementById("select_option");
        var div_content = document.getElementById("editable_div");
        var hidden_elem = document.querySelector("#hidden_elem");
             if(post_title_text.value==""){
            alert("title area cannot be left empty");
            }else if(main_img.value==""){
              alert("poster image cannot be left empty too");
            }
            else if(div_content.textContent.trim().length==0 || div_content.innerText.trim().length==0 ){
              alert("post content area cannot be left empty");
            }
            else if(select_comp.selectedIndex==0){
              alert("please select a category");
            
            }else{
                   add_into_text_area();
                var sent_indicator = document.querySelector("#sent_indicator");
                sent_indicator.classList.add("alert", "alert-danger");
                var form_post = new FormData();
                form_post.append("image", main_img.files[0]);
                form_post.append("header", post_title_text.value);
                form_post.append("text_area", text_area_val.value);
                form_post.append("category", select_comp.options[select_comp.selectedIndex].text);
                form_post.append("hidden_elem", hidden_elem.value);
                var ajax = new XMLHttpRequest();
                ajax.onreadystatechange = ()=>{
                    sent_indicator.innerHTML = '<img src="../assets/img/spinner.gif"/>';
                    if(ajax.status==404){
                         sent_indicator.innerHTML="<i class='fa fa-warning'></i> file not found..";
                    }
                 else if(ajax.readyState===4 && ajax.status===200){
                    sent_indicator.innerHTML = ajax.responseText;
                      update_main_img(); 
                 }
                }
                ajax.open("POST","../ajax/update_content.php",true);
                ajax.send(form_post);
            }
         e.preventDefault();
     });

     function update_main_img(){
    var hidden_elem = document.querySelector("#hidden_elem");
    if(hidden_elem !== null){
    var main_img= document.querySelector(".main_img");
     ajax = new XMLHttpRequest();
     ajax.onreadystatechange = ()=>{
         if(ajax.readyState==4 && ajax.status==200){
          main_img.src = ajax.responseText;
         }
     }
    ajax.open("GET", "../ajax/update_img_div.php?id="+hidden_elem.value, true);
    ajax.send(null);
    }
 
   }
    $("#file_video").on("change", function(){
        array_elem = ["video/mp4", "video/mkv", "video/flv"];
        var get_video_selector = document.querySelector("#file_video"); 
      var video_file = document.querySelector("#file_video").files[0];
      if(video_file.size > 10485760){
          alert(video_file.name + "hey bro file is too large");
          get_video_selector.value="";
      }else if(array_elem.indexOf(video_file.type.toLowerCase()) ==-1){
              alert("hey this is not a mkv, mp4, flv file");
              get_video_selector.value="";
      } else {

      }
    });

    $("#upload_video").on("click",function(){
    var video_file = document.querySelector("#file_video");
    var text_input = document.querySelector("#img_header");
    var sent_indicator = document.querySelector(".sent_indicators");
    if(text_input.value==""){
        alert("video header cannot be left empty");
    }else if(video_file.value==""){
        alert("video file cannot be left empty");
    }else{
        sent_indicator.classList.add("alert", "alert-danger");
        var form_data = new FormData();
        form_data.append("header", text_input.value);
        form_data.append("video", video_file.files[0]);
    var ajax = new XMLHttpRequest();
    sent_indicator.innerHTML ="<img src='../assets/img/spinner.gif'/>";
    ajax.onreadystatechange = ()=>{
        if(ajax.readyState==4 && ajax.status==200){
      sent_indicator.innerHTML = ajax.responseText;
        display_videos();
        }
    }

     ajax.open("POST", "../ajax/add_video.php",true);
     ajax.send(form_data);
    }

    });

    function display_videos(){
        var tbody_content = document.querySelector(".tbody_content");
    var ajax  = new XMLHttpRequest();
    ajax.onreadystatechange = ()=>{
        if(ajax.readyState==4 && ajax.status==200){
             tbody_content.innerHTML = ajax.responseText;
        }
    }
    ajax.open("GET", "../ajax/load_videos_admin.php", true);
    ajax.send(null);       
    }
    $(document).on("click","#check_all_video", function(){
   var check_me = document.querySelectorAll(".check_me");
   for (let index = 0; index < check_me.length; index++) {
       if(!(check_me[index].checked)){
        check_me[index].checked=true;   
       }else if(check_me[index].checked){
        check_me[index].checked=false;
       }   
   }
    });

$("#live_search_video").on("keyup", function(){
    if(this.value==""){
    }else if(this.value!=""){
        var tbody_content = document.querySelector(".tbody_content");
        var value = this.value;
     var ajax_req = new XMLHttpRequest();
        ajax_req.onreadystatechange = ()=>{
         if(ajax_req.readyState===4 && ajax_req.status===200){
             tbody_content.innerHTML = ajax_req.responseText;
         }
    
        }
       ajax_req.open("GET", "../ajax/video_search.php?get_var="+value,true);
       ajax_req.send(null);
    
    }    
});

$(document).on("click", ".search-more-content",function(){
    var tbody_content = document.querySelector(".tbody_content");
     var live_search_here = document.querySelector("#live_search_video").value;
 var id = this.getAttribute("id");
 var new_child = document.createElement("img");
 new_child.classList.add("replicate-me", "more-stylings");
 new_child.src="../assets/img/spinner.gif";
 var content_remove = document.querySelector(".search-more-content");
 content_remove.parentNode.insertBefore(new_child, content_remove);
 content_remove.parentNode.removeChild(content_remove);
  var ajax = new XMLHttpRequest();
  ajax.onreadystatechange = ()=>{
      if(ajax.readyState==4 && ajax.status==200){
          new_child.parentNode.removeChild(new_child);    
         tbody_content.innerHTML+=ajax.responseText;
      }
  }
  ajax.open("GET", "../ajax/load_more_search_videos.php?id="+id+"&search="+live_search_here,true);
  ajax.send(null);
});

$(document).on("click","#delete_all_video", function(){
    var check_all = document.querySelectorAll(".check_me");
    var tbody_content = document.querySelector(".tbody_content");
    var clone_elem = tbody_content.cloneNode(true);
    for (var index = 0; index < check_all.length; index++) {
     if(!(check_all[index].checked)){
           
   } else if(check_all[index].checked){
       var nex_show = document.querySelector(".nex");
       var attribute = check_all[index].getAttribute("id");
      var ajax = new XMLHttpRequest();
      nex_show.innerHTML ="<center><div class='alert alert-danger'style='width:40%; margin-left:40%;margin-right:15%;'><img src='../assets/img/spinner.gif'/></div></center>"
      ajax.onreadystatechange = ()=> {
          if(ajax.status==404){
              nex_show.innerHTML="<center><div class='alert alert-danger'style='width:40%; margin-left:40%;margin-right:15%;'><i class='fa fa-warning'></i> looks not to be connecting..content was not deleted please be notified</div></center>";
            return false;
          }
     else if(ajax.readyState==4 && ajax.status==200){
        document.querySelector(".nex").innerHTML = ajax.responseText;
               
       }
      

     }
      ajax.open("GET","../ajax/delete_video.php?delete_id="+attribute,true);
      ajax.send(null);
      check_all[index].parentNode.parentNode.parentNode.parentNode.
        removeChild(check_all[index].parentNode.parentNode.parentNode);
     
   }
    }
});

$("#upload_adverts").on("click",function(){
    var image_file = document.querySelector("#file_images");
    var text_input = document.querySelector("#img_header");
    var image_url = document.querySelector("#img_url");
    var sent_indicator = document.querySelector(".sent_indicators");
    if(text_input.value==""){
        alert("advert header cannot be left empty");
    }else if(image_file.value==""){
        alert("advert file cannot be left empty");
    }else if(image_url.value==""){
        alert("please enter the url of the website");
    }
    
    else{
        sent_indicator.classList.add("alert", "alert-danger");
        var form_data = new FormData();
        form_data.append("header", text_input.value);
        form_data.append("image", image_file.files[0]);
        form_data.append("url", image_url.value);
    var ajax = new XMLHttpRequest();
    sent_indicator.innerHTML ="<img src='../assets/img/spinner.gif'/>";
    ajax.onreadystatechange = ()=>{
        if(ajax.readyState==4 && ajax.status==200){
      sent_indicator.innerHTML = ajax.responseText;
        display_adverts();
        }
    }

     ajax.open("POST", "../ajax/add_adverts.php",true);
     ajax.send(form_data);
    }

    });

    function display_adverts(){
        var tbody_content = document.querySelector(".tbody_content");
    var ajax  = new XMLHttpRequest();
    ajax.onreadystatechange = ()=>{
        if(ajax.readyState==4 && ajax.status==200){
             tbody_content.innerHTML = ajax.responseText;
        }
    }
    ajax.open("GET", "../ajax/load_adverts_admin.php", true);
    ajax.send(null);       
    }
    
    $("#file_images").on("change",function(){
        array_elem = ["image/jpeg", "image/jpg", "image/png"];
        var get_image_selector = document.querySelector("#file_images"); 
      var image_file = document.querySelector("#file_images").files[0];
      if(image_file.size > 2097152){
          alert(image_file.name + "hey bro file is too large");
          get_image_selector.value="";
      }else if(array_elem.indexOf(image_file.type.toLowerCase()) ==-1){
              alert("hey this is not a jpeg, jpg, png file");
              get_image_selector.value="";
      } else {

      }
    });
    
    $("#live_search_adverts").on("keyup", function(){
        if(this.value==""){
        }else if(this.value!=""){
            var tbody_content = document.querySelector(".tbody_content");
            var value = this.value;
         var ajax_req = new XMLHttpRequest();
            ajax_req.onreadystatechange = ()=>{
             if(ajax_req.readyState===4 && ajax_req.status===200){
                 tbody_content.innerHTML = ajax_req.responseText;
             }
        
            }
           ajax_req.open("GET", "../ajax/advert_search.php?get_var="+value,true);
           ajax_req.send(null);
        
        }    
    });
      $(document).on("click",".search-more-content-advert", function(){
         var tbody_content = document.querySelector(".tbody_content");
     var live_search_here = document.querySelector("#live_search_adverts").value;
 var id = this.getAttribute("id");
 var new_child = document.createElement("img");
 new_child.classList.add("replicate-me", "more-stylings", "most-stylings");
 new_child.src="../assets/img/spinner.gif";
 var content_remove = document.querySelector(".search-more-content-advert");
 content_remove.parentNode.insertBefore(new_child, content_remove);
 content_remove.parentNode.removeChild(content_remove);
  var ajax = new XMLHttpRequest();
  ajax.onreadystatechange = ()=>{
      if(ajax.readyState==4 && ajax.status==200){
          new_child.parentNode.removeChild(new_child);    
         tbody_content.innerHTML+=ajax.responseText;
      }
  }
  ajax.open("GET", "../ajax/load_more_search_adverts.php?id="+id+"&search="+live_search_here,true);
  ajax.send(null);
      });
      $(document).on("click","#check_all_adverts", function(){
        var check_me = document.querySelectorAll(".check_me_advert");
        for (let index = 0; index < check_me.length; index++) {
            if(!(check_me[index].checked)){
             check_me[index].checked=true;   
            }else if(check_me[index].checked){
             check_me[index].checked=false;
            }   
        }
         });
     
         $(document).on("click","#delete_all_adverts", function(){
            var check_all = document.querySelectorAll(".check_me_advert");
            var tbody_content = document.querySelector(".tbody_content");
            var clone_elem = tbody_content.cloneNode(true);
            for (var index = 0; index < check_all.length; index++) {
             if(!(check_all[index].checked)){
                   
           } else if(check_all[index].checked){
               var nex_show = document.querySelector(".nex");
               var attribute = check_all[index].getAttribute("id");
              var ajax = new XMLHttpRequest();
              nex_show.innerHTML ="<center><div class='alert alert-danger'style='width:40%; margin-left:40%;margin-right:15%;'><img src='../assets/img/spinner.gif'/></div></center>"
              ajax.onreadystatechange = ()=> {
                  if(ajax.status==404){
                      nex_show.innerHTML="<center><div class='alert alert-danger'style='width:40%; margin-left:40%;margin-right:15%;'><i class='fa fa-warning'></i> looks not to be connecting..content was not deleted please be notified</div></center>";
                    return false;
                  }
             else if(ajax.readyState==4 && ajax.status==200){
                document.querySelector(".nex").innerHTML = ajax.responseText;
                       
               }
              
        
             }
              ajax.open("GET","../ajax/delete_adverts.php?delete_id="+attribute,true);
              ajax.send(null);
              check_all[index].parentNode.parentNode.parentNode.parentNode.
                removeChild(check_all[index].parentNode.parentNode.parentNode);
           }
            }
        });
        window.addEventListener("load", add_class);
        window.addEventListener("load", add_sec_class);
        window.addEventListener("load", btn_clear);
        function add_class(){
            var btn_registration = document.querySelector("#btn-registration");
            if(btn_registration!==null){
                btn_registration.classList.add("custom_btn");
            }
        }
        function add_sec_class(){
            var btn_clear = document.querySelector("#btn-clear");
            if(btn_clear!==null){
                btn_clear.classList.add("custom_btn");
            }
        }
        function btn_clear(){
            var btn_update = document.querySelector("#btn-update");
            if(btn_update!==null){
                btn_update.classList.add("custom_btn");
            }
        }

    $(document).on("click", ".view-comments",function(){
    var get_attribute = this.getAttribute("id-view-comments");
    var modal_cont= document.querySelector(".modal-content-load");
    var modal_title = document.querySelector(".modal-title-header");
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange=()=>{
        if(ajax.readyState==4 && ajax.status==200){
         modal_cont.innerHTML=ajax.responseText;
         modal_title.innerHTML="View Comments";

        }
    }
    ajax.open("GET", "../ajax/admin.load.user.comments.php?id="+get_attribute,true);
    ajax.send(null);
    });

    $(document).on("click", ".view-post",function(){
        var get_attribute = this.getAttribute("id-view");
        var modal_cont= document.querySelector(".modal-content-load");
        var modal_title = document.querySelector(".modal-title-header");
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange=()=>{
            if(ajax.readyState==4 && ajax.status==200){
             modal_cont.innerHTML=ajax.responseText;
             modal_title.innerHTML="View Post";
    
            }
        }
        ajax.open("GET", "../ajax/admin.load.user.post.php?id="+get_attribute,true);
        ajax.send(null);
        });

        window.addEventListener("load", show_appprove);
        function show_appprove(){
        var approve_comments = document.querySelectorAll(".approve-comments");
        if(approve_comments!==null){
            approve_comments.forEach(function(value,index){
                var bold_elem = value.nextElementSibling.nextElementSibling;
                if(bold_elem.innerHTML==="approved"){
                    value.style.color="blue";
                }else if(bold_elem.innerHTML=="unapproved"){
                    value.style.color="white";
                }
                });
          
        }
             }

    $(document).on("click",".approve-comments",function(){
     if(this.style.color=="white"){
         var get_attr =  this.getAttribute("id-approve");
         var approve_text = this.nextElementSibling.nextElementSibling;
         var ajax = new XMLHttpRequest();
          ajax.onreadystatechange =()=>{
              if(ajax.readyState==4 && ajax.status==200){
                  approve_text.innerHTML=ajax.responseText;
                  this.style.color="blue";
              }
           }
            ajax.open("GET", "../ajax/approve.comments.php?id="+get_attr, true);
            ajax.send(null);

     }else{
         
        var get_attr =  this.getAttribute("id-approve");
        var approve_text = this.nextElementSibling.nextElementSibling;
        var ajax = new XMLHttpRequest();
         ajax.onreadystatechange =()=>{
             if(ajax.readyState==4 && ajax.status==200){
                 approve_text.innerHTML=ajax.responseText;
                 this.style.color="white";
             }
          }
           ajax.open("GET", "../ajax/unapprove.comments.php?id="+get_attr, true);
           ajax.send(null);
     }
    });
      $("#check_all_comments").on("click",function(){
        var check_comments = document.querySelectorAll(".check_comments");
        for (let index = 0; index < check_comments.length; index++) {
            if(!(check_comments[index].checked)){
        check_comments[index].checked=true;
            }else if(check_comments[index].checked){
               check_comments[index].checked=false;
            }
            
        }
      });
    $("#delete_all_comments").on("click",function(){
        var check_comments = document.querySelectorAll(".check_comments");
        var show_report = document.querySelector(".show-report");
        check_comments.forEach(function(value,index){
          if(!(value.checked)){

          }else if(value.checked){
            var id_delete = value.getAttribute("id-delete");
             var ajax = new XMLHttpRequest();
              ajax.onreadystatechange = () =>{
                  if(ajax.readyState==4 && ajax.status==200){
                    show_report.innerHTML = ajax.responseText;
                value.parentNode.parentNode.parentNode.parentNode.removeChild(value.parentNode.parentNode.parentNode);
                  }
              }
              ajax.open("GET","../ajax/admin.delete.user.comments.php?id="+id_delete,true);
              ajax.send(null);
          }
        });
    });

    function change_color(){
        var approve_comments = document.querySelectorAll(".approve-text");
        if(approve_comments!==null){
            approve_comments.forEach(function(value,index){
             if(value.innerHTML=="approved"){
                 value.previousElementSibling.previousElementSibling.style.color="blue";
             }else{
                 value.previousElementSibling.previousElementSibling.style.color="white";
             }
            });
    
        }
        
    }

$("#live_search_comments").on("keyup", function(){
if(this.value==""){

}else{

    var tbody_content = document.querySelector(".tbody_content");
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = () =>{
        if(ajax.readyState==4 && ajax.status==200){
         tbody_content.innerHTML = ajax.responseText;
         change_color();
        }
    }
    ajax.open("GET", "../ajax/admin.user.commment.live.search.php?value="+this.value, true);
    ajax.send(null);

}
});

$(document).on("click", ".search-more-comments", function(){
    var tbody_content = document.querySelector(".tbody_content");
    var live_search_comments = document.querySelector("#live_search_comments");
var ajax = new XMLHttpRequest();
var new_child = document.createElement("img");
new_child.classList.add("replicate-me");
new_child.src="../assets/img/spinner.gif";
var content_remove = document.querySelector(".search-more-comments");
var id_content = content_remove.getAttribute("id");
content_remove.parentNode.insertBefore(new_child, content_remove);
content_remove.parentNode.removeChild(content_remove);
 ajax.onreadystatechange= ()=>{
     if(ajax.readyState==4 && ajax.status==200){
        new_child.parentNode.removeChild(new_child);
     tbody_content.innerHTML+=ajax.responseText;
     change_color();
     }
 }
ajax.open("GET", "../ajax/admin.load.more.search.comments.php?value="+live_search_comments.value+"&id="+id_content,true);
ajax.send(null);
});
$("#approve_all_comments").on("click",function(){
    var approve_comments = document.querySelectorAll(".approve-text");
    var show_report = document.querySelector(".show-report");

    approve_comments.forEach(function(value,index){
        ajax = new XMLHttpRequest();
        ajax.onreadystatechange=()=>{
            if(ajax.readyState==4 && ajax.status==200){
               show_report.innerHTML = ajax.responseText;
                          }
        }
        ajax.open("GET", "../ajax/approve.all.comments.php", true);
        ajax.send(null);
        value.innerHTML = "approved";
        value.previousElementSibling.previousElementSibling.style.color="blue";
    });

});
$(document).on("click", ".view-replies",function(){
    var get_attribute = this.getAttribute("id-view-replies");
    var modal_cont= document.querySelector(".modal-content-load");
    var modal_title = document.querySelector(".modal-title-header");
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange=()=>{
        if(ajax.readyState==4 && ajax.status==200){
         modal_cont.innerHTML=ajax.responseText;
         modal_title.innerHTML="View Reply";

        }
    }
    ajax.open("GET", "../ajax/admin.load.user.replies.php?id="+get_attribute,true);
    ajax.send(null);
 
});
$("#check_all_replies").on("click",function(){
    var check_me = document.querySelectorAll(".check_replies");
    for (let index = 0; index < check_me.length; index++) {
        if(!(check_me[index].checked)){
         check_me[index].checked=true;   
        }else if(check_me[index].checked){
         check_me[index].checked=false;
        }   
    } 
});
$("#delete_all_replies").on("click",function(){
    var check_comments = document.querySelectorAll(".check_replies");
        var show_report = document.querySelector(".show-report");
        check_comments.forEach(function(value,index){
          if(!(value.checked)){

          }else if(value.checked){
            var id_delete = value.getAttribute("id-delete");
             var ajax = new XMLHttpRequest();
              ajax.onreadystatechange = () =>{
                  if(ajax.readyState==4 && ajax.status==200){
                    show_report.innerHTML = ajax.responseText;
                value.parentNode.parentNode.parentNode.parentNode.removeChild(value.parentNode.parentNode.parentNode);
                  }
              }
              ajax.open("GET","../ajax/admin.delete.user.replies.php?id="+id_delete,true);
              ajax.send(null);
          }
        });
});

$(document).on("click",".approve-replies",function(){
    if(this.style.color=="white"){
        var get_attr =  this.getAttribute("id-approve");
        var approve_text = this.nextElementSibling.nextElementSibling;
        var ajax = new XMLHttpRequest();
         ajax.onreadystatechange =()=>{
             if(ajax.readyState==4 && ajax.status==200){
                 approve_text.innerHTML=ajax.responseText;
                 this.style.color="blue";
             }
          }
           ajax.open("GET", "../ajax/approve.replies.php?id="+get_attr, true);
           ajax.send(null);

    }else{
        
       var get_attr =  this.getAttribute("id-approve");
       var approve_text = this.nextElementSibling.nextElementSibling;
       var ajax = new XMLHttpRequest();
        ajax.onreadystatechange =()=>{
            if(ajax.readyState==4 && ajax.status==200){
                approve_text.innerHTML=ajax.responseText;
                this.style.color="white";
            }
         }
          ajax.open("GET", "../ajax/unapprove.replies.php?id="+get_attr, true);
          ajax.send(null);
    }

});
  $("#approve_all_replies").on("click", function(){
    var approve_comments = document.querySelectorAll(".approve-text-replies");
    var show_report = document.querySelector(".show-report");
   var id_data = this.getAttribute("id-approve-me");
    approve_comments.forEach(function(value,index){
        ajax = new XMLHttpRequest();
        ajax.onreadystatechange=()=>{
            if(ajax.readyState==4 && ajax.status==200){
                             show_report.innerHTML = ajax.responseText;
                     }
        }
        ajax.open("GET", "../ajax/approve.all.replies.for.comments.php?id="+id_data, true);
        ajax.send(null);
        value.innerHTML = "approved";
       value.previousElementSibling.previousElementSibling.style.color="blue";
  
    });
  });
  window.addEventListener("load", show_appprove_replies);
  function show_appprove_replies(){
  var approve_replies = document.querySelectorAll(".approve-replies");
  if(approve_replies!==null){
      approve_replies.forEach(function(value,index){
          var bold_elem = value.nextElementSibling.nextElementSibling;
          if(bold_elem.innerHTML==="approved"){
              value.style.color="blue";
          }else if(bold_elem.innerHTML=="unapproved"){
              value.style.color="white";
          }
          });
    
  }
       }
       $("#approve_total_replies").on("click",function(){
        var approve_comments = document.querySelectorAll(".approve-text-replies");
        var show_report = document.querySelector(".show-report");
       var id_data = this.getAttribute("id-approve-me");
        approve_comments.forEach(function(value,index){
            ajax = new XMLHttpRequest();
            ajax.onreadystatechange=()=>{
                if(ajax.readyState==4 && ajax.status==200){
                   show_report.innerHTML = ajax.responseText;
                   
                }
            }
            ajax.open("GET", "../ajax/approve.all.replies.php", true);
            ajax.send(null);
            value.innerHTML = "approved";
            value.previousElementSibling.previousElementSibling.style.color="blue";
        });    
       });
       $("#live_search_replies").on("keyup", function(){
        if(this.value==""){
        
        }else{
        
            var tbody_content = document.querySelector(".tbody_content");
            var ajax = new XMLHttpRequest();
            ajax.onreadystatechange = () =>{
                if(ajax.readyState==4 && ajax.status==200){
                 tbody_content.innerHTML = ajax.responseText;
                 change_color_replies();
                }
            }
            ajax.open("GET", "../ajax/admin.user.replies.live.search.php?value="+this.value, true);
            ajax.send(null);
        
        }
        });
        $(document).on("click", ".search-more-replies", function(){
            var tbody_content = document.querySelector(".tbody_content");
            var live_search_comments = document.querySelector("#live_search_replies");
        var ajax = new XMLHttpRequest();
        var new_child = document.createElement("img");
        new_child.classList.add("replicate-me");
        new_child.src="../assets/img/spinner.gif";
        var content_remove = document.querySelector(".search-more-replies");
        var id_content = content_remove.getAttribute("id");
        content_remove.parentNode.insertBefore(new_child, content_remove);
        content_remove.parentNode.removeChild(content_remove);
         ajax.onreadystatechange= ()=>{
             if(ajax.readyState==4 && ajax.status==200){
                new_child.parentNode.removeChild(new_child);
             tbody_content.innerHTML+=ajax.responseText;
             change_color_replies();
             }
         }
        ajax.open("GET", "../ajax/admin.load.more.search.replies.php?value="+live_search_comments.value+"&id="+id_content,true);
        ajax.send(null);
        });
        function change_color_replies(){
            var approve_comments = document.querySelectorAll(".approve-text-replies");
            if(approve_comments!==null){
                approve_comments.forEach(function(value,index){
                 if(value.innerHTML=="approved"){
                     value.previousElementSibling.previousElementSibling.style.color="blue";
                 }else{
                     value.previousElementSibling.previousElementSibling.style.color="white";
                 }
                });
        
            }
            
        }
       $("#file_images_portfolio").on("change",function(){
        array_elem = ["image/jpeg", "image/jpg", "image/png"];
        var file = this.files[0];  
        if(file.size > 2097152){
            alert(file.name + "  is larger than 2 megabytes");
        this.value="";
        } else if( array_elem.indexOf(file.type.toLowerCase()) ==-1 ){
            alert("invalid file type please be sure to use only png and jpg files");
            this.value="";
        }else{
        }
       });
    $("#upload_port").on("click",function(){
     var port_image = document.querySelector("#file_images_portfolio");
     var header = document.querySelector("#img_header_portfolio");
     var url = document.querySelector("#portfolio_url");
     var sent_indicator = document.querySelector(".sent_indicators_port");
     sent_indicator.classList.remove("alert", "alert-danger");
     if(header.value==""){
         alert("header cannot be left empty");
     } else if(url.value==""){
         alert("url is required")
     }     
     else if(port_image.value==""){
         alert("image area cannot be left empty");
     } else{
         var form_data = new FormData();
         form_data.append("image", port_image.files[0]);
         form_data.append("header", header.value);
         form_data.append("url", url.value);
         sent_indicator.classList.add("alert", "alert-danger");
         sent_indicator.innerHTML="<b>loading...</b>";
    var ajax = new XMLHttpRequest(); 
    ajax.onreadystatechange = () =>{
        if(ajax.readyState==4 && ajax.status==200){
       sent_indicator.innerHTML = ajax.responseText;
       update_table_portfolio();
        }
    }
     ajax.open("POST", "../ajax/admin.add.portfolio.php",true);
    ajax.send(form_data);
     }
    });
    function update_table_portfolio(){
        var tbody_content = document.querySelector(".tbody_content");
        if(tbody_content!==null){
            ajax = new XMLHttpRequest();
            ajax.onreadystatechange = ()=>{
                if(ajax.readyState==4 && ajax.status==200){
              tbody_content.innerHTML = ajax.responseText;
                }
            }
    ajax.open("GET", "../ajax/admin.load.portfolio.php",true);
    ajax.send(null);
        }
    }
    $("#live_search_portfolio").on("keyup",function(){
        if(this.value==""){
        }else if(this.value!=""){
            var tbody_content = document.querySelector(".tbody_content");
            var value = this.value;
         var ajax_req = new XMLHttpRequest();
            ajax_req.onreadystatechange = ()=>{
             if(ajax_req.readyState===4 && ajax_req.status===200){
                 tbody_content.innerHTML = ajax_req.responseText;
             }
        
            }
           ajax_req.open("GET", "../ajax/portfolio_search.php?get_var="+value,true);
           ajax_req.send(null);
        
        } 
    });
    $(document).on("click",".search-more-content-port",function(){
        var tbody_content = document.querySelector(".tbody_content");
        var live_search_here = document.querySelector("#live_search_portfolio").value;
    var id = this.getAttribute("id");
    var new_child = document.createElement("img");
    new_child.classList.add("replicate-me", "more-stylings", "most-stylings");
    new_child.src="../assets/img/spinner.gif";
    var content_remove = document.querySelector(".search-more-content-port");
    content_remove.parentNode.insertBefore(new_child, content_remove);
    content_remove.parentNode.removeChild(content_remove);
     var ajax = new XMLHttpRequest();
     ajax.onreadystatechange = ()=>{
         if(ajax.readyState==4 && ajax.status==200){
             new_child.parentNode.removeChild(new_child);    
            tbody_content.innerHTML+=ajax.responseText;
         }
     }
     ajax.open("GET", "../ajax/load_more_search_port.php?id="+id+"&search="+live_search_here,true);
     ajax.send(null);
    });
    $(document).on("click","#check_all_portfolio", function(){
        var check_me = document.querySelectorAll(".check-me-port");
        for (let index = 0; index < check_me.length; index++) {
            if(!(check_me[index].checked)){
             check_me[index].checked=true;   
            }else if(check_me[index].checked){
             check_me[index].checked=false;
            }   
        }
         });
     
         $(document).on("click","#delete_all_portfolio", function(){
            var check_all = document.querySelectorAll(".check-me-port");
            var tbody_content = document.querySelector(".tbody_content");
            var clone_elem = tbody_content.cloneNode(true);
            for (var index = 0; index < check_all.length; index++) {
             if(!(check_all[index].checked)){
                   
           } else if(check_all[index].checked){
               var nex_show = document.querySelector(".nex");
               var attribute = check_all[index].getAttribute("id");
              var ajax = new XMLHttpRequest();
              nex_show.innerHTML ="<center><div class='alert alert-danger'style='width:40%; margin-left:40%;margin-right:15%;'><img src='../assets/img/spinner.gif'/></div></center>"
              ajax.onreadystatechange = ()=> {
                  if(ajax.status==404){
                      nex_show.innerHTML="<center><div class='alert alert-danger'style='width:40%; margin-left:40%;margin-right:15%;'><i class='fa fa-warning'></i> looks not to be connecting..content was not deleted please be notified</div></center>";
                    return false;
                  }
             else if(ajax.readyState==4 && ajax.status==200){
                document.querySelector(".nex").innerHTML = ajax.responseText;       
               }
             }
              ajax.open("GET","../ajax/delete_portfolio.php?delete_id="+attribute,true);
              ajax.send(null);
              check_all[index].parentNode.parentNode.parentNode.removeChild(check_all[index].parentNode.parentNode);
           }
            }
        });
      $(document).on("keyup","#live_search_messages",function(){
        if(this.value==""){
        }else if(this.value!=""){
            var tbody_content = document.querySelector(".tbody_content");
            var value = this.value;
         var ajax_req = new XMLHttpRequest();
            ajax_req.onreadystatechange = ()=>{
             if(ajax_req.readyState===4 && ajax_req.status===200){
                 tbody_content.innerHTML = ajax_req.responseText;
             }
            }
           ajax_req.open("GET", "../ajax/messages_search.php?get_var="+value,true);
           ajax_req.send(null);
        }
      });
        $(document).on("click",".search-more-content-messages",function(){
            var tbody_content = document.querySelector(".tbody_content");
            var live_search_here = document.querySelector("#live_search_messages").value;
        var id = this.getAttribute("id");
        var new_child = document.createElement("img");
        new_child.classList.add("replicate-me", "more-stylings", "most-stylings");
        new_child.src="../assets/img/spinner.gif";
        var content_remove = document.querySelector(".search-more-content-messages");
        content_remove.parentNode.insertBefore(new_child, content_remove);
        content_remove.parentNode.removeChild(content_remove);
         var ajax = new XMLHttpRequest();
         ajax.onreadystatechange = ()=>{
             if(ajax.readyState==4 && ajax.status==200){
                 new_child.parentNode.removeChild(new_child);    
                tbody_content.innerHTML+=ajax.responseText;
             }
         }
         ajax.open("GET", "../ajax/load_more_search_messages.php?id="+id+"&search="+live_search_here,true);
         ajax.send(null);
        });
     
       $(document).on("click", ".show-message",function(){
           var modal_display = document.querySelector(".model_display");
           var id = this.getAttribute("id");
           modal_display.innerHTML="";
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange=()=>{
            if(ajax.readyState==4 && ajax.status==200){
            modal_display.innerHTML = ajax.responseText;
            }
        }
        ajax.open("GET","../ajax/load.messages.php?id="+id,true);
        ajax.send(null);
       });
    $(document).on("click",".show-reply",function(){
    var not_msg = document.querySelector("#not_msg");
    var em_not = document.querySelector("#em_not");
    not_msg.value="";
    em_not.value="";
    var id = this.getAttribute("id-reply");
   var ajax = new XMLHttpRequest();
   ajax.onreadystatechange = () =>{
       if(ajax.readyState==4 && ajax.status==200){
       em_not.value = ajax.responseText;
       }
   }
    ajax.open("GET", "../ajax/fetch.email.notifications.php?id="+id, true);
    ajax.send(null);
    });
    $("#check_all_messages").on("click",function(){
        var get_all = document.querySelectorAll(".check_me_message");
        for (let index = 0; index < get_all.length; index++) {
             if(!(get_all[index].checked)){
                 get_all[index].checked = true;
             }else if(get_all[index].checked){
                 get_all[index].checked = false;
             }   
        }
    });
    $("#delete_all_messages").on("click",function(){
        var check_all = document.querySelectorAll(".check_me_message");
     var tbody_content = document.querySelector(".tbody_content");
     var clone_elem = tbody_content.cloneNode(true);
     for (var index = 0; index < check_all.length; index++) {
      if(!(check_all[index].checked)){
    } else if(check_all[index].checked){
        var nex_show = document.querySelector(".nex");
        var attribute = check_all[index].getAttribute("id");
       var ajax = new XMLHttpRequest();
       nex_show.innerHTML ="<center><div class='alert alert-danger'style='width:40%; margin-left:40%;margin-right:15%;'><img src='../assets/img/spinner.gif'/></div></center>"
       ajax.onreadystatechange = ()=> {
           if(ajax.status==404){
               nex_show.innerHTML="<center><div class='alert alert-danger'style='width:40%; margin-left:40%;margin-right:15%;'><i class='fa fa-warning'></i> looks not to be connecting..content was not deleted please be notified</div></center>";
             return false;
           }
      else if(ajax.readyState==4 && ajax.status==200){
         document.querySelector(".nex").innerHTML = ajax.responseText;
                
        }
       

      }
       ajax.open("GET","../ajax/delete_message.php?delete_id="+attribute,true);
       ajax.send(null);
       check_all[index].parentNode.parentNode.parentNode.parentNode.
         removeChild(check_all[index].parentNode.parentNode.parentNode);
      
    }
     }
    });

    window.addEventListener("load",change_image_looks);
    function change_image_looks(){
        var t_me_body = document.querySelector(".t_me_body");
        if(t_me_body!==null){
        var img_cont = t_me_body.querySelectorAll("tr");
           img_cont.forEach(function(value,index){
            var td_elems =  value.querySelectorAll("td"); 
             td_elems.forEach(function(values, index_second){
            elem_img = values.querySelector("img");
            if(elem_img===null){

            }else{
                elem_img.setAttribute("style", "width:40%;height:130px;border-radius:100%;");
            }
            });

           });
           }
    }

   window.addEventListener("load", load_browser_type);
   function load_browser_type(){
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = () =>{
        if(ajax.readyState==4 && ajax.status==200){
            var myObj = JSON.parse(ajax.responseText);
            var browser = {
                chrome:[],
                safari:[],
                IE:[],
                Firefox:[],
                opera:[],
                blackberry:[],
                nokia:[],
                iphone:[],
                ipad:[],
            }
        for (let index = 0; index < myObj.length; index++) {
            const get_b = myObj[index].browser;
            const lower_cont = get_b.toLowerCase(get_b);
                  if(lower_cont == "chrome"){
                    browser.chrome.push(myObj[index].browser);
                }else if(lower_cont=="safari"){
                    browser.safari.push(myObj[index].browser);
                } else if(lower_cont =="ie"){
                    browser.IE.push(myObj[index].browser);
                } else if(lower_cont =="firefox"){
                   browser.Firefox.push(myObj[index].browser);
                } else if(lower_cont =="opera"){
                    browser.opera.push(myObj[index].browser);
                 } else if(lower_cont =="blackberry"){
                  browser.blackberry.push(myObj[index].browser);
                } else if(lower_cont =="nokia"){
                    browser.nokia.push(myObj[index].browser);
                } else if(lower_cont =="iphone"){
                    browser.iphone.push(myObj[index].browser);
                } else if(lower_cont =="ipad"){
                   browser.ipad.push(myObj[index].browser);
                } 
            
        }
    var chrome_browser = Object.keys(browser.chrome).length;
    var safari_browser = Object.keys(browser.safari).length;
    var ie_browser = Object.keys(browser.IE).length;
    var firefox_browser = Object.keys(browser.Firefox).length;
    var opera_mini = Object.keys(browser.opera).length;
    var blackberry_browser = Object.keys(browser.blackberry).length;
    var nokia_browser = Object.keys(browser.nokia).length;
    var iphone_browser = Object.keys(browser.iphone).length;
    var ipad_browser = Object.keys(browser.ipad).length;
    
    var ctx = document.getElementById("myChart");
    if(ctx!==null){
         new Chart(
            document.getElementById("myChart"),
            {"type":"doughnut",
            "data":{
                "labels":["Chrome","safari","IE ","Firefox","opera","blackberry","nokia","iphone","ipad"],
                "datasets":[
                    {"label":"Total Views","data":[chrome_browser,safari_browser,ie_browser,firefox_browser,opera_mini,blackberry_browser,nokia_browser,iphone_browser,ipad_browser],
                    "backgroundColor":["rgb(255, 99, 132)",
                    "rgb(54, 162, 235)",
                    "rgb(0, 166, 90)",
                    "rgb(243, 156, 18)",
                    "rgb(0, 123, 255)",
                    "rgb(136, 146, 191)",
                    "rgb(255, 228, 225)",
                    "rgb(160, 82, 45)",
                    "rgb(154, 205, 50)",
                ],}
                ]
            },
            "options":{
                "cutoutPercentage":"20",
            }
        }
        );
    }
        }
    
    }
    ajax.open("GET","../ajax/load_browser_type.php", true);
    ajax.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    ajax.send(null);
    

   }


window.addEventListener("load",load_views_month);
function  load_views_month(){
        var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = () =>{
        if(ajax.readyState==4 && ajax.status==200){
            var myObj = JSON.parse(ajax.responseText);
               var months = {
                   january:[],
                   February:[],
                   March:[],
                   April:[],
                   May:[],
                   June:[],
                   July:[],
                   August:[],
                   September:[],
                   October:[],
                   September:[],
                   October:[],
                   November:[],
                   December:[],
               }
                  for (var index = 0; index < myObj.length; index++) {
                      const Mth_text = myObj[index].month;
                      const lower_me = Mth_text.toLowerCase(Mth_text);
                    if(lower_me == "january"){
                        months.january.push(myObj[index].clicks);
                    }else if(lower_me=="february"){
                        months.February.push(myObj[index].clicks);
                    } else if(lower_me =="march"){
                        months.March.push(myObj[index].clicks);
                    } else if(lower_me =="april"){
                        months.April.push(myObj[index].clicks);
                    } else if(lower_me =="may"){
                        months.May.push(myObj[index].clicks);
                    } else if(lower_me =="june"){
                        months.June.push(myObj[index].clicks);
                    } else if(lower_me =="july"){
                        months.July.push(myObj[index].clicks);
                    } else if(lower_me =="august"){
                        months.August.push(myObj[index].clicks);
                    }else if(lower_me =="september"){
                        months.September.push(myObj[index].clicks);
                    } else if(lower_me =="october"){
                        months.October.push(myObj[index].clicks);
                    } else if(lower_me =="november"){
                        months.November.push(myObj[index].clicks);
                    } else if(lower_me =="december"){
                        months.December.push(myObj[index].clicks);
                    } 
              }     
              var jan_t = months.january.reduce(function(a,b){return (a*1)+(b*1);}, 0);
              var feb_t = months.February.reduce(function(a,b){return (a*1)+(b*1);}, 0);
              var mar_t = months.March.reduce(function(a,b){return (a*1)+(b*1);}, 0);
              var apr_t = months.April.reduce(function(a,b){return (a*1)+(b*1);}, 0);
              var may_t = months.May.reduce(function(a,b){return (a*1)+(b*1);}, 0);
              var jun_t = months.June.reduce(function(a,b){return (a*1)+(b*1);}, 0);
              var jul_t = months.July.reduce(function(a,b){return (a*1)+(b*1);}, 0);
              var aug_t = months.August.reduce(function(a,b){return (a*1)+(b*1);}, 0);
              var sep_t = months.September.reduce(function(a,b){return (a*1)+(b*1);}, 0);
             var oct_t = months.October.reduce(function(a,b){return (a*1)+(b*1);}, 0);
              var nov_t = months.November.reduce(function(a,b){return (a*1)+(b*1);}, 0);
              var dec_t = months.December.reduce(function(a,b){return (a*1)+(b*1);}, 0);
              var c = document.getElementById("chartjs-0");
              if(c!==null){
                new Chart(
                    document.getElementById("chartjs-0"),
                    {"type":"line",
                    "data":{
                    "labels":["January","February","March","April","May","June","July","August","September","October","November","December"],
                        "datasets":[{"label":"total views",
                        "data":[jan_t,feb_t,mar_t,apr_t,may_t,jun_t,jul_t,aug_t,sep_t,oct_t,nov_t,dec_t],
                        "fill":false,
                        "borderColor":"rgb(75, 192, 192)",
                        "lineTension":0.1}]},
                        "options":{}
                    }
                    );
              }
            

        }
    }
    
    ajax.open("GET","../ajax/load_graph_view.php", true);
    ajax.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    ajax.send(null);
    
}

window.addEventListener("load", load_continent_data);

function load_continent_data(){
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = () =>{
        if(ajax.readyState==4 && ajax.status==200){
            var myObj = JSON.parse(ajax.responseText);
              var continents = {
                africa:[],
                europe:[],
                south_america:[],
                asia:[],
                north_america:[]
              }
              for (var index = 0; index < myObj.length; index++) {
                  const cont_name  = myObj[index].continent_name;
                  const lower_cont = cont_name.toLowerCase(cont_name);
                  if(lower_cont == "africa"){
                    continents.africa.push(myObj[index].cont_name);
                }else if(lower_cont=="europe"){
                    continents.europe.push(myObj[index].cont_name);
                } else if(lower_cont =="north america"){
                    continents.south_america.push(myObj[index].cont_name);
                } else if(lower_cont =="south america"){
                   continents.north_america.push(myObj[index].cont_name);
                } else if(lower_cont =="asia"){
                    continents.asia.push(myObj[index].cont_name);
                } 
              }
              var african_continent = Object.keys(continents.africa).length;
              var european_continent = Object.keys(continents.europe).length;
              var south_continent = Object.keys(continents.south_america).length;
              var asia_continent = Object.keys(continents.asia).length;
              var north_continent = Object.keys(continents.north_america).length;
              var ctx2 = document.getElementById("myChart2");
              if(ctx2!==null){
                  new Chart(
                      document.getElementById("myChart2"),
                      {"type":"doughnut",
                      "data":{
                    "labels":["Asia","North America","Africa","Europe","South America"],
                    "datasets":[
                    {"label":"My First Dataset","data":[asia_continent,north_continent,african_continent,european_continent,south_continent],
                              "backgroundColor":[
                                  "rgb(255, 99, 132)",
                          "rgb(54, 162, 235)",
                          "rgb(0, 166, 90)",
                          "rgb(243, 156, 18)",
                          "rgb(0, 123, 255)",
                          ],}
                          ]
                      },
                      "options":{
                          "cutoutPercentage":"20", }
                      }
                  );   
              }  
        }
    }
    ajax.open("GET","../ajax/load_first_doughnut.php", true);
    ajax.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    ajax.send(null);
}

    
 $(window).scroll(function(){
     if($(window).scrollTop() + $(window).height() == $(document).height()){
         
     }
 })
//responsive javascript
window.addEventListener("resize" , edit_nav_bar);
function edit_nav_bar(){
    var toggler_cont = document.querySelector(".toggle-me");
    var elem_target = toggler_cont.parentNode.parentNode.nextElementSibling.nextElementSibling;
    if(window.innerWidth <= 1200){
        console.log("resize");
        var navbarCollapse = document.getElementById("navbarCollapse");
        navbarCollapse.classList.remove("collapse", "navbar-collapse");
        elem_target.classList.add("side-bar-content-me");
    }else if(window.innerWidth >=1200){
        console.log("resize");
        var navbarCollapse = document.getElementById("navbarCollapse");
        navbarCollapse.classList.add("collapse", "navbar-collapse");
        elem_target.classList.remove("side-bar-content-me");
  }
}

window.addEventListener("load", change_graph_class);
window.addEventListener("resize", change_graph_class);
function change_graph_class(){
    if(window.innerWidth<=950){
     var card_elem = document.querySelectorAll(".card");
    card_elem.forEach(function(value,index){
   var parent = value.parentNode;
   parent.classList.remove("col-md-6");
   parent.classList.add("col-md-12");
    });

    }else if(window.innerWidth>950){
        var card_elem = document.querySelectorAll(".card");
        card_elem.forEach(function(value,index){
       var parent = value.parentNode;
       parent.classList.add("col-md-6");
       parent.classList.remove("col-md-12");
        });
    }
}
window.addEventListener("load", edit_me_nav);
function edit_me_nav(){
    var toggler_cont = document.querySelector(".toggle-me");
    if(toggler_cont !==null){
        var elem_target = toggler_cont.parentNode.parentNode.nextElementSibling.nextElementSibling;
        if(window.innerWidth <= 1200){
            console.log("resize");
            var navbarCollapse = document.getElementById("navbarCollapse");
            navbarCollapse.classList.remove("collapse", "navbar-collapse");
            var side_bar_cont = document.querySelector(".side-bar-content");
            elem_target.classList.add("side-bar-content-me");
        }else if(window.innerWidth >=1200){
            console.log("resize");
            var navbarCollapse = document.getElementById("navbarCollapse");
            navbarCollapse.classList.add("collapse", "navbar-collapse");
            elem_target.classList.remove("side-bar-content-me");
    }
    }
   
}

window.addEventListener("load", change_bell_not);
window.addEventListener("resize", change_bell_not);
function change_bell_not(){
    if((window.innerWidth <= 1200 ) &&  (navigator.userAgent.indexOf("Chrome") != -1 )){
        var bell_note = document.querySelector(".fa-bell");
        bell_note.classList.add("more-style-bell");
        var notifier = document.querySelector(".notify-me");
        notifier.classList.add("notifier");
        var drop_me = document.querySelector(".drop-me-101");
        drop_me.classList.remove("dropdown-toggle");
    }else if((window.innerWidth >= 950 ) &&  (navigator.userAgent.indexOf("Chrome") != -1 )){
        var bell_note = document.querySelector(".fa-bell");
        bell_note.classList.remove("more-style-bell");
        var notifier = document.querySelector(".notify-me");
        notifier.classList.remove("notifier");
        var drop_me = document.querySelector(".drop-me-101");
        drop_me.classList.add("dropdown-toggle");
        
    }
}

var toggle_me = document.querySelector(".toggle-me");
if(toggle_me!==null){
    toggle_me.addEventListener("click", hide_show_side_bar);
}
function hide_show_side_bar(){
    var side_bar_cont = document.querySelector(".side-bar-content");
        var elem_pos = -250;
        var elem_target = this.parentNode.parentNode.nextElementSibling.nextElementSibling;
        if(elem_target.classList.contains("side-bar-content-me")){
            elem_target.classList.remove("side-bar-content-me","side-bar-content");
            elem_target.classList.add("side-101");
          $(".overlay").fadeIn();
            var intern = setInterval(function(){
            if(elem_pos==0){
                clearInterval(intern);
            }else{
                elem_pos=elem_pos+10;
                elem_target.style.left = elem_pos + "px";
            }

            }, 0.001);
        }
        }
$(".overlay").on("click",function(){
    var toggler = document.querySelector(".toggle-me");
    var elem_target = toggler.parentNode.parentNode.nextElementSibling.nextElementSibling;
$(this).fadeOut();
var elem_pos = 0;
var intern = setInterval(function(){
    if(elem_pos==-250){
        clearInterval(intern);
    }else{
        elem_pos=elem_pos-10;
        elem_target.style.left = elem_pos + "px";

    }

    }, 0.001);
      setTimeout(function(){
        elem_target.classList.add("side-bar-content-me","side-bar-content");
        elem_target.classList.remove("side-101");
      },1000);
});

window.addEventListener("load",media_400px);
window.addEventListener("resize",media_400px);
function media_400px(){
    if((window.innerWidth <= 400) && (navigator.userAgent.indexOf("Firefox") != -1)){
        var drop_me_101 =document.querySelector(".drop-me-101");
       drop_me_101.classList.add("drop-me-101-new");
       drop_me_101.classList.remove("dropdown-toggle");
    }else if((window.innerWidth >= 400) && (navigator.userAgent.indexOf("Firefox") != -1)){
        var drop_me_101 =document.querySelector(".drop-me-101");
        drop_me_101.classList.remove("drop-me-101-new");
        drop_me_101.classList.add("dropdown-toggle");
    }
}
 