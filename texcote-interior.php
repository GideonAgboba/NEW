      		<?php
    		$connect = mysqli_connect("localhost", "root", "", "products");
    		$output = NULL;
              if (isset($_POST["search_tex_int"])) {
                $search_tex_int = $_POST["search_tex_int"];
			$queryelm = "SELECT * FROM texcote_interior WHERE title = '$search_tex_int'";
			$resultelm = mysqli_query($connect, $queryelm);
			if (mysqli_num_rows($resultelm) >0) {
				while ( $row = mysqli_fetch_array($resultelm)) {

			?>
				<div class="white container p-5 justify-content-center my-auto" style="border-top: 10px solid #fff; border-bottom: 5px solid #25A187; border-left: 5px solid #25A187; border-right: 5px solid #25A187; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
					<form method="POST" action="texcote-interior.php?action=add&id=<?php echo $row["id"]; ?>">
					<img src="<?php  echo $row["image"]; ?>" style="width: 100%;height: 300px;">
					<h4 class="green-font text-center"><?php  echo $row["title"]; ?></h4>
					<p class="green-font text-center" style="font-size: 18px;">Our price: N<?php echo $row["price"]; ?></p>
					<input type="number" align="center" style="width: 100%;" class="form-control text-center" placeholder="Quantity" value="" name="quantity" required />
					<input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />
					<input type="hidden" name="hidden_image" value="<?php echo $row["image"]; ?>" />
					<input type="hidden" name="hidden_description" value="<?php echo $row["description"]; ?>" />
					<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" /><br>
					<input type="submit" name="add_to_cart" class="btn green-body container-fluid" value="Add to cart" />
				</form>
				</div>
			<?php
                  }
                }else{
                  // $output = "<script>alert('No result found')</script>";
                    $output = "<div class='bg-danger container-fluid p-1 m-0' style='border-radius: 3px;'>
                                <div class='row justify-content-center my-auto d-flex'>
                                  <i style='font-size: 20px;' class='text-white left'>No result found</i>
                                </div>
                              </div>
                              ";
                }
              }
            ?>


	<?php
	$connect = mysqli_connect("localhost", "root", "", "products");
	if (isset($_POST["add_to_cart"])) {
		$id = $_GET["id"];
		$img = $_POST['hidden_image'];
		$title = $_POST['hidden_name'];
		$description = $_POST['hidden_description']; 
		$price = $_POST['hidden_price'];
		$quantity = $_POST['quantity'];

		
			if (isset($_COOKIE['ss'])) {
				$table_name = $_COOKIE['ss'];
			}else{
				$table_name = "guest";
			}

		$create= "
CREATE TABLE `$table_name` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
";
		// $create = "CREATE TABLE 'ordereditems' (
		// 		  `title` varchar(255) NOT NULL,
		// 		  `description` text NOT NULL,
		// 		  `price` varchar(255) NOT NULL
		// 		) ENGINE=InnoDB DEFAULT CHARSET=latin1";
			mysqli_query($connect, $create);
		//$q = "INSERT INTO ordereditems (title,description,price,) VALUES ('$title', '$description', '$price');";
		if (!empty($_GET["id"])) {
			$q= "INSERT INTO `$table_name` (`id`, `title`, `price`, `description`, `image`, `quantity`) VALUES
($id, '$title', '$price', '$description', '$img', '$quantity');";
		mysqli_query($connect, $q) or die(mysqli_error($connect));
	}
	?>
	<div class="white-text container-fluid text-center fixed-top mt-5" style="background-image: url(<?php echo $_POST['hidden_image']; ?>);">

		<?php
			$query = "SELECT * FROM $table_name ORDER BY id ";
			$result = mysqli_query($connect, $query);
			if (mysqli_num_rows($result) >0) {
				if ( $row = mysqli_fetch_array($result)) {
		?>
					<div class='text-center p-3 container'>
						<h5>
							<?php echo $_POST['quantity']; ?> <?php echo $_POST['hidden_name']; ?> was successfully added to cart
						</h5 style="float: right" class="green-body green-font">
					</div>
		<?php
				}
			}
		?>
	</div>
	<?php
	}else{
		// echo "<script>alert('failed')</script>";
	}
	?>

<! DOCTYPE html>
<html>
<head>
    <title>Sparkle | Emulsion interior</title>
    <link href="sparkle-min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/carousel.css">
<body class="" style="font-family: sans-serif;">
<script>
	function close_window() {
  if (confirm("Are you done shopping?")) {
    //close();
    window.location = 'index.php';
  }
}
</script>
      <nav class="navbar-expand white fixed-top">
      	<button class="btn green-body ml-3 mt-2" onclick="close_window()">CLOSE</button>
      	<form style="width: 400px;" class="center brand-logo" method="POST" action="texcote-interior.php">
      	<input type="text" name="search_tex_int" class="form-control validate text-center" placeholder="search item" value="<?php if(isset($_POST['search_tex_int'])){ echo $_POST['search_tex_int'];} ?>">
      		<?php echo $output; ?>
      	</form>
      	<a href="index.php#test4" class="btn green-body right mt-2 mr-3 ">View cart</a>
      </nav>
		
	<div class="container-fluid green-body green-font" style="padding-top: 5em;">
			<div class="text-center row " style="margin: 0 auto; float: none; text-align: center;">
		<?php
			$query = "SELECT * FROM texcote_interior ORDER BY id ASC";
			$result = mysqli_query($connect, $query);
			if (mysqli_num_rows($result) >0) {
				while ( $row = mysqli_fetch_array($result)) {
		?>
				<div class="text-center col-lg-3 bg-white p-5 mb-3" style="border: 5px solid #25A187; border-radius: 10px;">
					<form method="POST" action="texcote-interior.php?action=add&id=<?php echo $row["id"]; ?>">
					<img src="<?php  echo $row['image']; ?>" style="width: 200px;height: 200px;">
					<h4><?php  echo $row["title"]; ?></h4>
					<i><?php echo $row["description"]; ?></i>
					<p>price: <s class="text-danger">N5,000</s></p>
					<p>Our price: N<?php echo $row["price"]; ?></p>
					<input type="number" align="center" style="width: 100%;" class="form-control text-center" placeholder="Quantity" value="" name="quantity" required />
					<input type="hidden" name="hidden_name" value="<?php echo $row['title']; ?>" />
					<input type="hidden" name="hidden_image" value="<?php echo $row['image']; ?>" />
					<input type="hidden" name="hidden_description" value="<?php echo $row['description']; ?>" />
					<input type="hidden" name="hidden_price" value="<?php echo $row['price']; ?>" /><br>
					<input type="submit" name="add_to_cart" class="btn green-body container-fluid mb-3" value="Add to cart" />
				</form>
				</div>
		<?php
				}
			}
		?>
			</div>
	</div>


    <script src="jquery/jquery.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/interaction.js"></script>
<script  src="js/index.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/init.js"></script>
</body>
</html>