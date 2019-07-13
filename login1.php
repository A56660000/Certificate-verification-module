<?php
session_start();


// initializing variables


$link = mysqli_connect("localhost", "root", "", "certi_final");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($link, $_POST['login_id']);
  $password = mysqli_real_escape_string($link, $_POST['password']);


  
    
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($link, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: addupdate.php');
    }
    else {
      echo "<script> alert('Wrong ') </script>";
      usleep(2000000);

      header("location: certificate_verify.php");
    }
  
}



/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */


$name = "";
$c_type = "";
$c_name = "";
$c_number = "";
$c_date = "";
$duration = "";
$number = "";
$email = "";

if (isset($_POST['reg_certi'])) {
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$c_number = mysqli_real_escape_string($link, $_REQUEST['c_number']);
$c_name = mysqli_real_escape_string($link, $_REQUEST['c_name']);
$c_type = mysqli_real_escape_string($link, $_REQUEST['c_type']);
$duration = mysqli_real_escape_string($link, $_REQUEST['duration']);
$c_date = mysqli_real_escape_string($link, $_REQUEST['c_date']);
$number = mysqli_real_escape_string($link, $_REQUEST['number']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
 
// Attempt insert query execution
$sql = "INSERT INTO certificates  VALUES ('$name', '$c_number', '$c_name', '$c_type', '$duration', '$c_date', '$number', '$email')";
if(mysqli_query($link, $sql)){

	$message = "wrong answer";
echo "<script type='text/javascript'>alert('$message');</script>";

    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 }
 //header('location: addupdate.php');
// Close connection
mysqli_close($link);
?>