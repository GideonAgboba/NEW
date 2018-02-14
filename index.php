<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') 
// {
//   if (isset($_POST['update'])) {
//       $mysqli = new mysqli("localhost", "root", "", "accounts");
//       $id = $_COOKIE['us'];
//       $result = $mysqli->query("DELETE FROM user WHERE email= $id LIMIT 1");

//       if ($result == ture) {
//         // require 're-reg.php';
//         header("location: re-reg.php");
//       }
//   }
// }
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['update'])) { 
    //user logging in
        require 're-reg.php';
        
    }
}
?>
<! DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Sparkle | Home</title>
    <link href="sparkle-min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/carousel.css">

    <link rel="icon" href="imgs/icon.png">
<script src="jquery/jquery.min.js"></script>
<script src="popper/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/interaction.js"></script>
<script  src="js/index.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/init.js"></script>
</head>
<body class="green-body text-white">
  <?php include 'pre.php'; ?>
  

<?php
  include 'nav.php';
?>

  <div id="test1" class="green-body">
    <?php include 'home-first-section.php'; ?>
    <?php include 'home-first-section-row2.php'; ?>

    <?php include 'home-second-section.php'; ?>
    <?php include 'home-fifth-section.php'; ?>
    <?php include 'home-third-section.php'; ?>

    <?php include 'home-fourth-section.php'; ?>
    <?php include 'footer.php'; ?>
  </div>










  <div id="test2" class="green-body">
      <?php include 'lab-nav-content.php'; ?>
  </div>





  <div id="test3" class="green-body container-fluid " style="zoom: 85% !important;">
    <?php include 'storenav.php'; ?>
    <?php include 'storenav-texcote.php'; ?>
    <?php include 'storenav-gloss.php'; ?>
  </div>








































  <div id="test4" class="green-body" style="height: 100vh;">
    <?php
    $mysqli = mysqli_connect("localhost", "root", "", "accounts");
    $username = $_COOKIE['ss'];
    $result = $mysqli->query("SELECT * FROM users WHERE last_name='$username'");
     if (isset($_COOKIE['ss'])) {
       include 'order.php';
     }else{
      echo "
            <div class='row justify-content-center my-auto d-flex bg-danger container-fluid p-3'>
              <h6 class='text-center text-white'>PLEASE LOGIN TO VIEW CART <i class='fa fa-shopping-cart'></i></h6>
            </div>
            ";
     }
     ?>
  </div>



</body>
</html>
