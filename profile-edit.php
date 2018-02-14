<?php include 'db.php';
if (isset($_COOKIE['us'])) {
	$email_cookie = $_COOKIE['us'];
}else{
	$email_cookie = 'guest';
}
$result = $mysqli->query("SELECT * FROM users WHERE email='$email_cookie'") or die($mysqli->error());
while ($row = $result->fetch_assoc()){
$img = $row['display_image'];
}
?>
      <div class="modal fade details-16" id="details-15" tabindex="-1" role="dialog" aria-labelledby="details-15" aria-hidden="false">

	<div class=" modal-content">
		<div class="container-fluid">
			<div class="modal-header m-0 p-0">
				<button class="close" type="button" data-dismiss="modal" aria-label="close">
				<span aria-hidden="true" class=" modal-dialog"><i class="fa fa-close"></i></span>
				</button>
				<h5 class="modal-title text-center green-font"><i class="fa fa-edit"></i> Edit profile:</h5>
			</div>
			<div class="modal-body">
      				<div class="row">
	      				<div class="container-fluid col-lg-5 profile-img pt-3">
	      					<img src="
	      					<?php
	      						if($img !== ''){
	      							echo 'uploads/' .$img;
	      						}else{
	      							echo 'uploads/user.png';
	      						}
	      					?>
	      					" class="img-responsive center justify-content-center my-auto d-flex" style="border: 2px solid #25A187;">
	      					<form class="p-3" method="POST" action="upload.php" enctype="multipart/form-data">
	      					<input type="file"  name="fileToUpload" id="fileToUpload" placeholder="Upload image" class="bg-dark container-fluid p-3">
	      					<input type="password" name="password" placeholder="Please input password to save changes" class="bg-dark container-fluid" required />
	      					<button type="submit" name="submit" class="btn green-body container-fluid">Uplad image</button>
	      					</form>
	      				</div>
	      				<div class="container-fluid col-lg-7 profile-form">
	      	
			<?php
				$connect = mysqli_connect("localhost", "root", "", "accounts");
				$mail =$_COOKIE['us'];
				$query = "SELECT * FROM users WHERE email='$mail'";
				$result = mysqli_query($connect, $query);
				if (mysqli_num_rows($result) >0) {
					while ( $row = mysqli_fetch_array($result)) {
			?>
	      					<form action="index.php" method="post" autocomplete="off">
	      						<section class="container-fluid">
									<input type="hidden" name="item_id" value="<?php echo $row["id"]; ?>">
	      							<input type="text" name="firstname" placeholder="Fullname" value="<?php echo $row['first_name'] ?>" required />
	      							<input type="text" name="lastname" placeholder="Username" value="<?php echo $row['last_name'] ?>" required />
		      						<input type="email" name="email" placeholder="Email" value="<?php echo $row['email'] ?>" required />
		      						<input type="text" name="tel" placeholder="Tel-phone" value="<?php echo $row['phone'] ?>" required />
		      						<input type="text" name="address" placeholder="Address" value="<?php echo $row['address'] ?>" >
		      						<input type="text" name="bio" placeholder="Bio" value="<?php echo $row['bio'] ?>" >
	      						</section>
	      						<section class="bg-dark container-fluid">
	      								<input type="text" name="password" placeholder="Please input password to save changes" required="Please input password to continue update" />
	      						</section>
	      						<button type="submit" name="update" class="btn green-body container-fluid">Submit</button>
	      					</form>
			<?php
                  }
                }
            ?>
	      				</div>
      				</div>
			</div>
		</div>

		</div>
	</div>
<style type="text/css">
	.profile-img form{
		margin: 0 auto !important;
		float: none !important;
		padding: 5px;
	}
	.profile-img img{
		width: 300px;
		height: 300px;
		border-radius: 300px;
		margin: 0 auto !important;
		float: none !important;
	}
	.profile-form form,input{
		text-align: center;
		color: grey;
	}
	label{
		font-size: 21px !important;
		color: #25A187 !important;
	}
</style>