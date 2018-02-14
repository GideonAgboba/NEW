  <script type="text/javascript">
    function refresh(){
      window.location.reload("order.php");
    }
  </script>
<div class="container-fluid text-dark p-5 bg-white">
	<div class=" order-main green-body">
		<div class="order-nav-top pt-3">
			<section class="justify-content-center my-auto d-flex">
				<form class="row" action="" method="POST">
					<button onclick="refresh()" class="btn bg-primary text-white">REFRESH <i class="fa fa-refresh"></i></button>
					<button type="submit" class="btn bg-danger text-white" name="del_all">DELETE ALL <i class="fa fa-trash"></i></button>
					<!-- <button class="btn green-body text-white" data-toggle="modal" data-target="#details-7">CHECKOUT <i class="fa fa-shopping-cart"></i></button> -->
					<a href="quick-order.html" class="btn green-body text-white"  data-toggle="modal" data-target="#details-7" onclick=">">CHECKOUT <i class="fa fa-shopping-cart"></i></a>
				</form>
			</section>
			<?php include 'pop.php'; ?>
		</div>
		<div class=" bg-white m-4 p-2">
			<div class="row">


		<?php
		
			$total = 0;
			$mysqli = new mysqli("localhost", "root", "", "products");
			if ($mysqli->connect_errno) {
				// echo "<script>alert('')</script>";
				echo "Failed connect(".$mysqli->connect_errno.")".$mysqli->connect_errno;
			}
			if (isset($_COOKIE['ss'])) {
				$teble_name = $_COOKIE['ss'];
			}else{
				$teble_name = "guest";
			}
			$query = $mysqli->query("SELECT id,title,price,description,image,quantity FROM $teble_name ORDER BY id ");
			while ($row = $query->fetch_assoc()){
		?>

				<form method="post" class="col-lg-3" action="index.php?idd=<?php echo $row['id'] ?>">
					<div class="card text-center">
						<span class="item-id"><?php echo $row['id']; ?></span>
						<input type="hidden" name="item_id" value="<?php echo $row["id"]; ?>">
						<img height="250px" src="<?php echo $row['image']; ?>" class="img-responsive"/>
						<h5  class="text-muted"><?php echo $row['quantity']; ?> <?php echo $row["title"];?></h5>
						<i class="text-muted"><?php echo $row["description"]; ?></i>
						<i class="text-muted"><?php echo $row["price"]; ?> x <?php echo $row["quantity"]; ?></i>
						<i class="text-muted">N<?php echo number_format($row["quantity"] * $row["price"], 2) ?></i>
						<div class="p-4">
							<button type="submit" name="del" class="text-white btn red btn-lg">Delete</button>
							<!-- <a type="submit" class="text-white btn red btn-lg">Delete</a> -->
						</div>
					</div>
				</form>

			
		<?php
			$total =  $total + ($row["quantity"] * $row["price"]);
		}
		if (isset($_POST['del'])) {
			echo "<script>confirm('Are you sure you want to delete item?')</script>";
			$mysqli = new mysqli("localhost", "root", "", "products");
			$id = $_POST['item_id'];
			
			if (isset($_COOKIE['ss'])) {
				$teble_name = $_COOKIE['ss'];
			}else{
				$teble_name = "guest";
			}

			$del ="<script>document.write($idd)</script>";
			$result = $mysqli->query("DELETE FROM $teble_name WHERE id= $id LIMIT 1");
			 // $result = $mysqli->query('DELETE FROM cart WHERE id="$del" LIMIT 1');
			if ($result == true) {
				header("location: index.php#test4");
				echo "<script>
						alert('Item successfully deleted');
						window.location.href='index.php#test4';
					</script>";
			}else{
				echo "<script>
						alert('Failed to delete item');
						window.location.href='index.php#test4';
					</script>";
			}
		}

		?>


		<?php 


		if (isset($_POST['del_all'])) {
			echo "<script>confirm('Are you sure you want to delete all items?')</script>";
			$mysqli = new mysqli("localhost", "root", "", "products");
			
			if (isset($_COOKIE['ss'])) {
				$teble_name = $_COOKIE['ss'];
			}else{
				$teble_name = "guest";
			}
			
			$results = $mysqli->query("DELETE FROM $teble_name WHERE id = id LIMIT 100 ");
			if ($results == true) {
				// header("location: index.php#test4");
				echo "<script>
						alert('All items where successfully deleted PLEASE REFRESH CART');
						window.location.href='index.php#test4';
					</script>";


			}else{
				echo "<script>
						alert('Failed to delete all items');
						window.location.href='index.php#test4';
					</script>";
			}
		}
		?>

			</div>
		</div>
		<div class="order-nav-bottom pt-3">
			<section class="justify-content-center my-auto d-flex">
				<div class="row">
				<h6 href="#" class="text-muted">
					<?php
						echo "Total: N" .number_format($total,2);
						
					?>
				</h6>	
				</div>
			</section>
		</div>
	</div>
</div>

<style type="text/css">
	.order-main{
		box-shadow: 3px 3px 2px 4px grey;
		border-radius: 4px;
	}
	.order-nav-top{
		position: relative;
		top: 0px;
		left: 0px;
		right: 0px;
		background: #fff !important;
		color: #000;
		margin-bottom: 1em; 
	}
	.order-nav-bottom{
		position: relative;
		bottom: 0px;
		left: 0px;
		right: 0px;
		background: #fff !important;
		color: #000;
		margin-bottom: 1em; 
	}
	.order-nav-bottom h6{
		font-size: 20px;
	}
	.item-id{
		background-color: #dc3545;
		color: #fff;
		position: absolute;
		font-size: 20px;
		padding-top: 5px;
		top: 0;
		left: 0;
		width: 50px;
		height: 50px;
		/*border-radius: 50px;*/
	}
</style>