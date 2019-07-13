

<?php
// connect to the database


$db = mysqli_connect("localhost", "root", "", "certi_final");
//echo "hello";
$certificate_no=$_GET['q'];
//echo "$certificate_no";
$sql = "SELECT * FROM certificates WHERE c_number = '$certificate_no'";

$result = mysqli_query($db, $sql);
$certificate = mysqli_fetch_assoc($result);

// if(isset($_POST['generate'])) {
//     g_pdf($certificate);
// }
session_start();
$_SESSION["certificateNum"] = $certificate_no;

if ($certificate) { 
    // if certificate exists
    echo '<br><div class="alert alert-success">
  <strong>Success!</strong> Certificate Exists</div> ';
    
    foreach($certificate as $value){
        //echo "$value";
        $data[]=$value;
    }
    //echo json_encode($data);
    
    echo "<table class='table table-striped'>";
    echo "<tr>";
    echo "<th>certificate No.</th>";
    echo "<td>" . $certificate['c_number'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Student Name</th>";
    echo "<td>" . $certificate['name'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Course Name</th>";
    echo "<td>" . $certificate['c_name'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Course type</th>";
    echo "<td>" . $certificate['c_type'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    
    echo "<tr>";
    echo "<th>Date of completion</th>";
    echo "<td>" . $certificate['c_date'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Duration of course</th>";
    echo "<td>" . $certificate['duration'] . " months </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Number</th>";
    echo "<td>" . $certificate['number'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Email ID</th>";
    echo "<td>" . $certificate['email'] . "</td>";
    echo "</tr>";
    echo "</table>";
 //   echo '<input type="button" action="gpdf.php" value="Click!" />';
//     echo '<form action="'=$_SERVER['PHP_SELF'];'" method="post">
//     <input type="button" name="generate" value="generate">
// </form>';

    echo '<form class="form-inline" method="post" action="gpdf.php">
<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary">
Generate PDF</button>
</form>';

// echo '<td><center><input type="hidden" name="id" value="' . $certificate['c_number'] . '" /><input type="submit" id="'$certificate['c_number'].'" class="btn" name="Add" value ="Add to cart"><center></td><tr>';
}
else{
    echo '<br><div class="alert alert-warning">
  <strong>Oops!</strong> No certificate found for this certificate number
</div>';
}



/*
$stmt = $mysqli->prepare($sql);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($certifcate, $cname, $name, $adr, $city, $pcode, $country);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>CustomerID</th>";
echo "<td>" . $cid . "</td>";
echo "<th>CompanyName</th>";
echo "<td>" . $cname . "</td>";
echo "<th>ContactName</th>";
echo "<td>" . $name . "</td>";
echo "<th>Address</th>";
echo "<td>" . $adr . "</td>";
echo "<th>City</th>";
echo "<td>" . $city . "</td>";
echo "<th>PostalCode</th>";
echo "<td>" . $pcode . "</td>";
echo "<th>Country</th>";
echo "<td>" . $country . "</td>";
echo "</tr>";
echo "</table>";
*/

