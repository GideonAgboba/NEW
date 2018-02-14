<?php include 'db.php';
session_start();
$email_cookie = $_COOKIE['us'];
$result = $mysqli->query("SELECT * FROM users WHERE email='$email_cookie'") or die($mysqli->error());
while ($row = $result->fetch_assoc()){
$img = $row['display_image'];
}

?>
<script type="text/javascript">
  function hover(){
    alert('sjkfsog');
  }
</script>
  <nav class="navbar-extended green-body fixed-top" style="overflow:hidden;">
    <div class="nav-content home-navbar-sec2">
      <ul class="tabs tabs-transparent">
        <li class="tab">
          <img class="nav-link nav-img-desktop" src="imgs/Sparkel-logo.png" width="200px" height="70px" style="margin-top: -10px !important;">
        </li>
        <li class="tab">
          <a href="#test1" class="nav-link active white-text"><i class="fa fa-home"></i> Home</a>
        </li>
        <li class="tab">
          <a class="nav-link white-text" href="#test2"><i class="fa fa-flask"></i> Catalogue</a>
        </li>
        <li class="tab">
          <a href="#test3" class="nav-link white-text"><i class="fa fa-archive"></i> Store</a>
        </li>
        <li class="tab"><a href="#test4" class="nav-link white-text fa-2x"><i class="fa fa-shopping-cart"></i> Checkout</a></li>
        <li class="text-white tab login-desktop right row" style="font-size: 18px;">
        <?php 
              if (isset($_COOKIE['ss'])) {
        ?>
              <div class='user-dp' data-toggle='modal' data-target='#details-15'><img src="
                <?php if($img !== ''){
                  echo 'uploads/' .$img;
                }else{
                  echo 'uploads/user.png';
                } 
                ?>
"></div>  <strong class='mr-2'><?php echo $_COOKIE['ss']; ?></strong><form method='POST' action='logout.php' class='form-group right mr-3 mt-0'><button type='submit' class='btn bg-danger mr-3' name='clear_cookie'>LogOut</button></form>
        <?php
              }else{
                echo "<form method='POST' action='index-login.php' class='form-group right mr-3 mt-1'><button class='btn bg-warning mr-3' name='clear_cookie'>Login and get started</button></form>";
              }
        ?>
      </li>
      </ul>
    
    </div>
    </nav>
   
   <?php include 'profile-edit.php'; ?>

    <style type="text/css">
    .user-dp{
      margin-top: 5px;
      float: left;
      background-color: #fff;
      width: 40px;
      height: 40px;
      border-radius: 45px;
      margin-right: 5px;
    }
    .user-dp img{
      width: 40px;
      height: 40px;
      border-radius: 45px;
    }
      @media screen and (max-width: 1024px) {
        .nav-img-desktop{
          display: none !important;
        }
        .login-desktop{
          display: none !important;
        }
      }
       @media screen and (min-width: 1024px) {
        .nav-img-desktop{
          display: inline !important;
        }
        .login-desktop{
          display: inline !important;
        }
      }
    </style>



    