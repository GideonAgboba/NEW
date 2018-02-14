<?php 
    session_start();
?>
<! DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Sparkle | Home</title>
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
<body class="bg-danger">
<div class="form card text-center p-4">
    <h1>ERROR</h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        header( "location: index.php" );
    endif;
    ?>
    </p>     
    <a href="index.php"><button class="btn container-fluid bg-danger button p-4 mt-2 button-block" />BACK</button></a>
</div>
</body>
</html>




<style type="text/css">
    .form{
        position: absolute;
        background-color: #fff;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
</style>