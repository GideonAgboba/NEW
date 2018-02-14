<script type="text/javascript">
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
<section class="bg-dark p-1 recipt">
		<div id="printableArea">
			<h6 class="text-white left">Payment Details:</h6>
		<hr class="text-white center container bg-white">
		<br>
		<a class="col-lg-6 text-white">Username: <i class="right mr-3"><?php echo $_COOKIE['ss'] ?></i></a>
		<br>
		<a class="col-lg-6 text-white">First name:	<i class="right mr-3">
			<?php
				include 'db.php';
				$mail = $_COOKIE['us'];
				$result = $mysqli->query("SELECT * FROM users WHERE email='$mail'");

				if ( $result->num_rows > 0 ){ // User doesn't exist
				    $user = $result->fetch_assoc();
				    echo $user['first_name'];
				}
			?>
		</i></a>
		<br>
		<a class="col-lg-6 text-white">Amount:	<i class="right mr-3">N<?php echo number_format($total,0); ?></i></a>
		<br>
		<a class="col-lg-6 text-white">Orders:
			<?php
				$connect = mysqli_connect("localhost", "root", "", "products");
				$table_name =$_COOKIE['ss'];
				$query = "SELECT title,quantity,description FROM $table_name";
				$result = mysqli_query($connect, $query);
				if (mysqli_num_rows($result) >0) {
					while ( $row = mysqli_fetch_array($result)) {
			?>
				<i class="justify-content-end my-auto d-flex mr-3"><?php echo $row['quantity']; ?> <?php echo $row['title']; ?> (<?php echo $row['description']; ?>)</i>
			<?php
					}
				}
			?></a>
			<br>
		<a class="col-lg-6 text-white">Phone:	<i class="right mr-3">
			<?php
				include 'db.php';
				$mail = $_COOKIE['us'];
				$result = $mysqli->query("SELECT * FROM users WHERE email='$mail'");

				if ( $result->num_rows > 0 ){ // User doesn't exist
				    $user = $result->fetch_assoc();
				    echo $user['phone'];
				}
			?>
		</i></a>
			<br>
		<a class="col-lg-6 text-white">Email:	<i class="right mr-3">
			<?php
				include 'db.php';
				$mail = $_COOKIE['us'];
				$result = $mysqli->query("SELECT * FROM users WHERE email='$mail'");

				if ( $result->num_rows > 0 ){ // User doesn't exist
				    $user = $result->fetch_assoc();
				    echo $user['email'];
				}
			?>
		</i></a>
		</div>
	<form id="contact-form" action="https://formspree.io/gideonju1738@gmail.com" method="POST">
		<input type="hidden" id="order-type" name="msgtype" value="ORDER(payments on delivery):" id="order">
		<input type="hidden" id="firstname" name="firstname" value="<?php
				include 'db.php';
				$mail = $_COOKIE['us'];
				$result = $mysqli->query("SELECT * FROM users WHERE email='$mail'");

				if ( $result->num_rows > 0 ){ // User doesn't exist
				    $user = $result->fetch_assoc();
					echo $user['first_name'];
				}
			?>">
			<input type="hidden" id="username" name="username" value="<?php echo $_COOKIE['ss'] ?>">
			<input type="hidden" id="email" name="email" value="<?php echo $_COOKIE['us'] ?>">
			<input type="hidden" id="number" name="number" value="<?php
				include 'db.php';
				$mail = $_COOKIE['us'];
				$result = $mysqli->query("SELECT * FROM users WHERE email='$mail'");

				if ( $result->num_rows > 0 ){ // User doesn't exist
				    $user = $result->fetch_assoc();
				    echo $user['phone'];
				}
			?>">
			<input type="hidden" id="items" name="items" value="<?php
				$connect = mysqli_connect("localhost", "root", "", "products");
				$table_name =$_COOKIE['ss'];
				$query = "SELECT title,quantity,description FROM $table_name";
				$result = mysqli_query($connect, $query);
				if (mysqli_num_rows($result) >0) {
					while ($row = mysqli_fetch_array($result)) {
						echo $row['quantity'] .' '. $row['title'] .'(' .$row['description'] .')' .',';
					}
				}?>">
			<input type="text" id="address" name="address" placeholder="address" class="text-center text-muted" required />
			<button type="submit" class="container-fluid text-center text-white bg-warning p-3" onclick="printDiv('printableArea')">Print invoice</button>
        <input type="submit" value="Checkout" class="container-fluid text-center text-white green-body p-3">
    </form>

	</section>
<script>
	$("#contact-form").submit(function(e)){
		var order_type = document.getElementById('order-type'),
		var firstname = document.getElementById("firstname"),
		var username = document.getElementById("username"),
		var email = document.getElementById("email"),
		var number = document.getElementById("number"),
		var items = document.getElementById("items"),
		var address = document.getElementById("address");

		if(!order_type.value || !firstname.value || !username.value || !email.value || !number.value || !items.value || !address.value){
			alertify.error("Please check your entries "); 
		}else{
			$.ajax({
				url: "https://formspree.io/gideonju1738@gmail.com",
				method: "POST",
				data: $(this).serialize(),
				dataType: "json"
			});
			e.preventDefault()
			$(this).get(0).reset() 
			alertify.success("Order placed successfully")
		}
	}
</script>