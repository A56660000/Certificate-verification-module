<?php
// connect to the database

$db = mysqli_connect("localhost", "root", "", "certi_final");
//echo "hello";
$certificate_no=$_GET['q'];
//echo "$certificate_no";
$sql = "SELECT * FROM certificates WHERE c_number = '$certificate_no'";

$result = mysqli_query($db, $sql);
$certificate = mysqli_fetch_assoc($result);

if ($certificate) { 
    // if certificate exists
    foreach($certificate as $value){
        //echo "$value";
        $data[]=$value;
    }
    $mydata= json_encode($data);
    echo "$mydata";
    
  
}
else{
    echo"Oops! No certificate found for this certificate number";
}
    ?>