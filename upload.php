<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        echo "<script>
        alert('image uploaded successfully');
        window.loaction = 'index.php';
        </script>";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>



<?php
include 'db.php';
    function deluser(){
      $mysqli = new mysqli("localhost", "root", "", "accounts");
      $id = $_COOKIE['us'];
      $result = $mysqli->query("DELETE FROM users WHERE email= '$id'");
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

include 'db.php';
session_start();
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */
// Set session variables to be used on profile.php page
      
// Check if user with that email already exists
$email_cookie = $_COOKIE['us'];
$result = $mysqli->query("SELECT * FROM users WHERE email='$email_cookie'") or die($mysqli->error());
while ($row = $result->fetch_assoc()){
$first_name = $row['first_name'];
$last_name = $row['last_name'];
$email = $row['email'];
$phone = $row['phone'];
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );
$address = $row['address'];
$bio = $row['bio'];
$display_image = basename( $_FILES["fileToUpload"]["name"]);
}
$resultusername = $mysqli->query("SELECT * FROM users WHERE last_name='$last_name'") or die($mysqli->error());


if ($_POST['password'] = '') {

    $_SESSION['message'] = 'Please fill in the password filed!';
    header("location: re-error.php");
}
else { 
deluser();
// Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO users (first_name, last_name, email, password, hash, phone, address, bio, display_image) " 
            . "VALUES ('$first_name','$last_name','$email','$password', '$hash', '$phone', '$address', '$bio', '$display_image')";

    // Add user to the database
    if ( $mysqli->query($sql) ){
        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        $_SESSION['message'] =
                
                 "Profile has been updated login to view changes!";

        header("location: re-profile.php"); 

    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: re-error.php");
    }

}
