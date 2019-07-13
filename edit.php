<?php 
$param_id= 0;

$param_id= $_GET['id'];


//require "process1.php";
$link = mysqli_connect("localhost", "root", "", "certi_final");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "DELETE FROM certificates WHERE c_number = $param_id ";

mysqli_query($link, $sql);
    

mysqli_close($link);
header("location: addupdate.php");



// if(isset($_POST["id"]) && !empty($_POST["id"])){
//     // Include config file
//     require_once "process1.php";
//     $param_id= $_GET['id'];
//     echo $param_id;

    
//     // Prepare a delete statement
//     $sql = "DELETE FROM certificates WHERE c_number = ?";
    
//     if($stmt = mysqli_prepare($link, $sql)){
//         // Bind variables to the prepared statement as parameters
//         mysqli_stmt_bind_param($stmt, "i", $param_id);
        
//         // Set parameters
//         $param_id = trim($_POST["id"]);
        
//         // Attempt to execute the prepared statement
//         if(mysqli_stmt_execute($stmt)){
//             // Records deleted successfully. Redirect to landing page
//             header("location: index.php");
//             exit();
//         } else{
//             echo "Oops! Something went wrong. Please try again later.";
//         }
//     }
     
//     // Close statement
//     mysqli_stmt_close($stmt);
    
//     // Close connection
//     mysqli_close($link);
// }
?>