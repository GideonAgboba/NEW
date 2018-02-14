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
session_start();
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */
// Set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];
$_SESSION['phone'] = $_POST['tel'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['bio'] = $_POST['bio'];

// Escape all $_POST variables to protect against SQL injections
$first_name = $mysqli->escape_string($_POST['firstname']);
$last_name = $mysqli->escape_string($_POST['lastname']);
$email = $mysqli->escape_string($_POST['email']);
$phone = $mysqli->escape_string($_POST['tel']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );
$address = $mysqli->escape_string($_POST['address']);
$bio = $mysqli->escape_string($_POST['bio']);
      
// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());
$resultusername = $mysqli->query("SELECT * FROM users WHERE last_name='$last_name'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
$email_cookie = $_COOKIE['us'];
$input_email = $_POST['email'];
$input_uname = $_POST['lastname'];
$uname_cookie = $_COOKIE['ss'];
if ( $result->num_rows > 0 && $input_email !== $email_cookie) {
    
    $_SESSION['message'] = 'User with this email already exists!';
    header("location: re-error.php");
    
}elseif ($resultusername->num_rows >0 && $input_uname !== $uname_cookie) {
    $_SESSION['message'] = 'User with this Username already exists!';
    header("location: re-error.php");
}elseif ($_POST['password'] = '') {

    $_SESSION['message'] = 'Please fill in the password filed!';
    header("location: re-error.php");
}
else { 
deluser();
// Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO users (first_name, last_name, email, password, hash, phone, address, bio) " 
            . "VALUES ('$first_name','$last_name','$email','$password', '$hash', '$phone', '$address', '$bio')";

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