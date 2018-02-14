<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}

?>
<! DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Sparkle | Success</title>
    <!-- <link href="sparkle-min.css" rel="stylesheet"> -->
   <!-- <link rel="stylesheet" href="css/materialize.min.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="imgs/icon.png">
<script src="js/loader.js"></script>
<script src="js/loadermat.js"></script>
<script src="jquery/jquery.min.js"></script>
<script src="popper/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/interaction.js"></script>
<script  src="js/index.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/init.js"></script>


</head>
<body>
  <div class="form card text-center p-4">

          <h1>Welcome<br></h1>
          
          <p>
          <?php 
     
          // Display message about account verification link only once
          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];
              
              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }
          
          ?>
          </p>
          
          <?php
          
          // Keep reminding the user this account is not active, until they activate
          if ( !$active ){
              echo
              '<div class="info mt-2">
              Account is unverified, please confirm your email by clicking
              on the email link!
              </div>';
          }
          ?>
          <h2 style="text-transform: uppercase;"><?php echo $first_name ?></h2>
          <p><?= $email ?></p>
          
          
          <?php 
            if(isset($_COOKIE['ss'])){
              echo " <a href='logout.php'><button class='btn container-fluid bg-danger button p-4 mt-2 button-block' name='logout'/>Log Out</button></a>";
            }else{
              echo " <a href='index-login.php'><button class='btn container-fluid bg-danger button p-4 mt-2 button-block' name='logout'/>Log In | Back</button></a>";
            }

          ?>
    </div>
    
<script src="js/index.js"></script>
</body>
</html>


<style type="text/css">
    body{
        background-color: #25A187 !important;
    }
    .form{
        position: absolute;
        background-color: #fff;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
</style>