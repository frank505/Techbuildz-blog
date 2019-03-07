
<?php
ob_start();
error_reporting(E_ERROR);
session_start();
require_once "../classes/admin_login.php";
$admin_login = new admin_login();
 require_once "../classes/forgot_password.php";
 $forgot_password = new forgot_password();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/font/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/admin_reg.css" type="text/css" title="text/css">
</head>
<body>
<style type="text/css">
    body{background-image:url(../assets/img/second-background.png);position:fixed;width:100%;height:100%;overflow-y:auto;z-index: 10;top: 0; bottom: 0;}
    </style>

   <div class="form-container">
               
   <center><h5 class="twentypx-bottom twenty-head"> <b>Sign In Here</b></h5></center>
      <div class="container">
          <div class="row">
              <div class="col-md-12">

              
              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" role="form" class="contactForm">
                                <div class="form-group">
                                        <input type="email" class="form-control material-design" name="email" required="required"
                                        value="<?php if(isset($_POST["login"])){echo $_POST["email"];}?>" id="name" placeholder="&#9993; parsento@gmail.com" >
                                        <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                        <input class="form-control material-design" type="password" name="password" required="required" placeholder="&#128274; password">
                                        <div class="validation"></div>
                                </div>
                               
                            <button type="submit"name="login" class="btn btn-theme">Login</button>
                            <a href="#" data-toggle="modal" data-target="#myModal" class="pull-right change-color">Forgot Password click here?</a>
                        </form>





              </div>
          </div>
      </div> 
   
<?php $admin_login->login_admin();?>

      

   </div>

  

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header header-content-modal">
      <center><h5><b class="modal-title" style="color:white;">Forgot Password</b></h5></center>

        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close" aria-hidden="true"></i></button>
              </div>
      <div class="modal-body">
       <div class="notification">
           <center><b>Please enter your already registered email here</b></center>
       </div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
      <div class="form-group">
     <input type="email" class="form-control material-design" required="required" name="email_validation"  id="name" placeholder="&#9993; parsento@gmail.com" data-rule="minlen:4" data-msg="Please enter at least 4 chars" type="text">
        <div class="validation"></div>
            </div>
                             

      </div>
      <div class="modal-footer">
          <button class="btn btn-theme " name="send_email"type="submit">Submit</button>
        <button type="button" class="btn btn-theme" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>

  </div>
</div>
<?php $forgot_password->email_notification();?>


</body>
<script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/ease-in.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/admin.js"></script>
</html>