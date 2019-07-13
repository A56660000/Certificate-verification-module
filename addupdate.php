<?php 
  session_start();
  
if (!isset($_SESSION['username'])=="user") {
    $_SESSION['msg'] = "You must log in first";
    header('location: certificate_verify.php');
  }

  
?>
<!doctype html>
<html lang="en">
  <head>
    

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>MindScript</title>
 ;     
       <script>
function FindEditCertDetails(str) {
  var xhttp;    
  if (str == "") {
   
      alert("Please enter certificate number");
      
      
    return;
  }
  xhttp = new XMLHttpRequest();
  
  xhttp.open("GET", "editcertificate.php?q="+str, true);
  xhttp.send();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    
    var mydata = JSON.parse(this.responseText);
    document.getElementById("upname").value=mydata[0];
    document.getElementById("upc_number").value=mydata[1];
    document.getElementById("upc_name").value=mydata[2];
    document.getElementById("upc_type").value=mydata[3];
    document.getElementById("upduration").value=mydata[4]; 
    document.getElementById("upc_date").value=mydata[5];
    document.getElementById("upnumber").value=mydata[6];
    document.getElementById("upemail").value=mydata[7];
    
        
      
    
    }
    
  }
}
</script>
 </head>

 <body>
     <div class="container">
     <div class="container">
     <nav class="navbar navbar-inverse navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><h3>MindScript</h3></a>
        </div>
    
            <ul class="nav navbar-nav navbar-right">
      
                <li class="nav-item"><a href="logout.php" class="nav-link"> Log Out</a></li>
            </ul>
        </div>
     </nav>
         </div>
   <div class="container col-sm-12" style="margin-top:68px;">  
     <ul class="nav nav-tabs" id="myTab" role="tablist">
  
  <li class="nav-item">
    <a class="nav-link active" id="viewcertificate-tab" data-toggle="tab" href="#viewcertificate" role="tab" aria-controls="viewcertificate-tab" aria-selected="true">All Certificates</a>
  </li>

  <li class="nav-item">
    <a class="nav-link " id="addcertificate-tab" data-toggle="tab" href="#addcertificate" role="tab" aria-controls="addcertificate-tab" aria-selected="true">Add Certificate</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="editcertificate-tab" data-toggle="tab" href="#editcertificate" role="tab" aria-controls="editcertificate-tab" aria-selected="false">Edit Certificate</a>
  </li>
  
</ul>



<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="viewcertificate" role="tabpanel" aria-labelledby="viewcertificate-tab">
      
      <div><h2 style="text-align: center;"><br>All Certificates</h2></div>
    <div class="container-fluid col-sm-12"> 
      <div class="row justify-content-center">
        

        <table class="table col-sm-10">
          <thead>
            <tr>
              <th>Certificate ID</th>
              <th>Name</th>
              <th>Course Name</th>
              <th>Type</th>
              <th>Duration</th>
              <th>Completion Date</th>
              <th>Contact</th>
              <th>Action</th>
            </tr>
          </thead>
      <?php 

$username = "root";
$password = "";
$database = "certi_final";
$mysqli = new mysqli("localhost", $username, $password, $database);
 
$query = "SELECT * FROM certificates";

 
$result = $mysqli->query($query);
$id = 0; 
    

      foreach($result as $row ){ ?>
          <?php $id=$row['c_number']; ?>
          <tr>
            <td><?php echo $row['c_number']       ?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['c_name']      ?></td>
            <td><?php echo $row['c_type']?></td>
            <td><?php echo $row['duration']?></td>
            <td><?php echo $row['c_date']?></td>
            <td><?php echo $row['number']?><br><?php echo $row['email'] ?></td>
            <td>
              

              <a href='edit.php?id="<?php echo $id ?>"' title='Delete Record' data-toggle='tooltip' class="btn btn-success"><span class='glyphicon glyphicon-eye-open'>Delelte</span></a>


            <!--   <a href="index.php?edit=<?php echo $row['product_id']; ?>"
              class="btn btn-info">Edit</a>
              <a href="del.php?product_id=<?php echo $row['product_id']; ?>"
              class="btn btn-danger">Delete</a> -->
              
            </td>
          </tr>
        <?php }  ?>
        
        

        </table>
      </div>
      

      
    </div>


    
</div>





  <div class="tab-pane fade show " id="addcertificate" role="tabpanel" aria-labelledby="addcertificate-tab">
      
			<div class="container-fluid py-5">
				<h2 style="text-align: center;">Add Certificate</h2>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <form action="process1.php" method="POST">
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="inputFirstname">Full Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">Certificate Number</label>
                        <input type="text" class="form-control" name="c_number" placeholder="Certificate number">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine2">Cousre Name</label>
                        <input type="text" class="form-control" name="c_name" placeholder="Course Name">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputCity">Cousre Type</label>
                        <select class="form-control" name="c_type" name="sellist1">
        					<option>Internship</option>
        					<option>Full Course</option>
        					<option>Crarsh Course</option>
        
      					</select>

                        
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">Duration</label>
                        <input type="text" class="form-control" name="duration" placeholder="Duration">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputPostalCode">Completion Date</label>

                        <input type="Date" class="form-control" name="c_date" placeholder="Date">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Contact Number</label>
                        <input type="tel" class="form-control" name="number" placeholder="Contact Number">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputWebsite">E-mail name</label>
                        <input type="email" class="form-control" name="email" placeholder="E-mail">
                    </div>
                    <!-- <div class="col-sm-6">
                    <p>Certifate Upload:</p>
    <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" name="customFile" name="filename">
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div></div> -->
                </div>
                <button type="submit" name="reg_certi" class="btn btn-success px-4 float-centre">Save</button>
               <a href="addupdate.php"> <button type="button"  class="btn btn-danger px-4 float-centre">Clear</button></a>
            </form>
            <br>
        <!--     <a href="viewAll.php"
							class="btn btn-primary btn-block">View All/Edit</a> -->
        </div>
    </div>
    
</div>
    
    
    </div>
  
  <div class="tab-pane fade" id="editcertificate" role="tabpanel" aria-labelledby="editcertificate-tab">
    <div class="row justify-content-left" style="margin-top: 40px;">
            <div class="container py-1">
               
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="certificate number" id="certificateno">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="submit" onclick="FindEditCertDetails(document.getElementById('certificateno').value)">search</button> 
                            </div>
                    </div>
                
            </div>
        



			<div class="container">
				<h2 style="text-align: center;">Update Certificate</h2>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <form action="process2.php" method="POST">
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="inputFirstname">Full Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" id="upname">
                    </div>
                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">Certificate Number</label>
                        <input type="text" class="form-control" name="c_number" placeholder="Certificate number" id="upc_number">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine2">Cousre Name</label>
                        <input type="text" class="form-control" name="c_name" placeholder="Course Name" id="upc_name">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputCity">Cousre Type</label>
                        <select class="form-control" name="c_type" name="sellist1" id="upc_type">
        					<option>Internship</option>
        					<option>Full Course</option>
        					<option>Crarsh Course</option>
        
      					</select>

                        
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">Duration</label>
                        <input type="text" class="form-control" name="duration" placeholder="Duration" id="upduration">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputPostalCode">Completion Date</label>

                        <input type="Date" class="form-control" name="c_date" placeholder="Date" id="upc_date">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Contact Number</label>
                        <input type="tel" class="form-control" name="number" placeholder="Contact Number" id="upnumber">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputWebsite">E-mail name</label>
                        <input type="email" class="form-control" name="email" placeholder="E-mail" id="upemail">
                    </div>
                    <!-- <div class="col-sm-6">
                    <p>Certifate Upload:</p>
    <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" name="customFile" name="filename">
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div></div> -->
                </div>
                <button type="submit" name="reg_certi" class="btn btn-success px-4 float-centre">Save changes</button>
               
            </form>
            <br>
        <!--     <a href="viewAll.php"
							class="btn btn-primary btn-block">View All/Edit</a> -->
        </div>
    </div>
    
</div>

        </div>
    </div>
  
</div>
     </div>
     </div>
     
   
     
</body>
</html>