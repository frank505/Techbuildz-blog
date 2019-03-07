<div class="footer-area bg-dark">
<div class="row used-width">



<div class="col-md-6">

<div class="large-3 medium-6 columns">
                <ul class="footer-menu">
                    <p class="section-title">DISCOVER</p>
                    <li><a href="/surelinks/">Home</a></li>
                  </ul>
            </div>

</div>



<div class="col-md-6">
<!--
<div class="large-3 medium-6 columns">
                <ul class="footer-menu">
                    <p class="section-title">SUSCRIBE FOR NEWS LETTER</p>
                    <li><p>Get up-to-date information on deals, products, 
                      and businesses around you from our weekly newsletter.</p></li>
                      <br>
                      <h6><b style='color:rgb(251, 126, 168)' class="inner_content_sub"></b></h6>
                    <li><input type="text" name="" id="save_me" class="custom-input customizable" id=""><button id="save_email" class=" btn-second-theme">
                      <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </button></li>
                  
                  </ul>
            </div>-->

</div>







</div>








</div>

<div class="footer-area-second">

<div class="row  used-width footer-end">

<div class="col-md-6 second-end-footer">
 © Copyright <?php echo date("Y");?> Techmiz

</div>

<div class="col-md-6 second-end-footer">

                        <!-- Social Icon -->
                        <div class="social-icon">

                        <a href="https://www.facebook.com/Techmiz"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.twitter.com/Techmiz"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/Techmiz"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.youtube.com/Frankuriah"><i class="fa fa-youtube"></i></a>    



                        </div>
                                                                       
</div>

</div>

</div>








</div>




<div id="myModal" class="modal fade show" role="dialog">

  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content-area">
      <div class="modal-header header-content-modal">
      <center><h5><b class="modal-title" style="color:white;">Subscribe For More</b></h5></center>

        <button type="button" class="close close_me"   data-dismiss="modal"><i class="fa fa-close" aria-hidden="true"></i></button>
              </div>
      <div class="modal-body model_display">
           <form action="">
          <div class="inner_content_sub" style="color: white;font-weight: bolder;text-align: center;"></div><br>
             <div class="form-group">
             <input type="email" name="" id="save_me"  placeholder="please enter a valid email adress"class="form-control">
             </div>
           </form>     
       </div>
      <div class="modal-footer">
      <button id="save_email" type="button" class="btn header-bg custom_btn"  style="color:white;font-weight:bolder;">Submit</button>  
    <button type="button" class="btn header-bg custom_btn close_me"  style="color:white;font-weight:bolder;"data-dismiss="modal">Close</button>
      </div>
      
    </div>

  </div>
</div>

 <div class="overlay-more-modal"></div>
</main>
      
 <style>
 .overlay-more-modal{z-index: 1040;top: 0;bottom: 0;position: fixed;background: black;width: 100%;
left: 0;right: 0;opacity: .8;}
.modal-content-area {
position: relative;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
-ms-flex-direction: column;
flex-direction: column;
width: 100%;
pointer-events: auto;
background-clip: padding-box;
border-radius: .3rem;
outline: 0;
box-shadow: 0px 0px 20px 1px rgba(10, 30, 255, 0.6);

}
 </style>

<a href="#" class="scrollup" style="display:none;"><i class="fa fa-angle-up active"></i></a>


    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/ease-in.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/index.js"></script>
    <script>
    $(document).ready(function(){
      $("#myModal").fadeIn();
      $(".overlay-more-modal").fadeIn();
    })
    $(".close_me").click(function(){
      $("#myModal").fadeOut();
      $(".overlay-more-modal").fadeOut();
    })
    
    </script>
</body>
</html>