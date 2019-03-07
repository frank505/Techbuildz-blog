
<?php
session_start();
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
    

   <div class="form-container">
               
   <center><h5 class="twentypx-bottom twenty-head"> <b>Sign In Here</b></h5></center>
      <div class="container">
          <div class="row">
              <div class="col-md-12">

              
              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" role="form" class="contactForm">
                                <div class="form-group">
                                        <input type="email" class="form-control" name="email" required="required"
                                        value="<?php if(isset($_GET["login"])){echo $_GET["email"];}?>" id="name" placeholder="&#128274; email adress" >
                                        <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                        <input class="form-control" type="password" name="password" required="required" placeholder="&#128274;confirm password">
                                        <div class="validation"></div>
                                </div>
                               
                            <button type="submit"name="login" class="btn btn-theme">Login</button>
                              </form>

                              



              </div>
          </div>
      </div> 
   


<?php $forgot_password->change_password();?>
   </div>

  

  </div>
</div>



</body>
<script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/ease-in.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/admin.js"></script>
</html>