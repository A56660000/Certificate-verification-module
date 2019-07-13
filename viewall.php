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
  </head>
  <body>
	 
	   
<nav class="navbar navbar-inverse navbar-expand-sm bg-dark navbar-dark fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><h3>MindScript</h3></a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      
      <li class="nav-item"><a href="#" class="nav-link"> Log Out</a></li>
    </ul>
  </div>
</nav>



</div>
<div><h2 style="text-align: center;margin-top: 70px;">All Certificates</h2></div>
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
 
    

 			foreach($result as $row ){ ?>
					<tr>
						<td><?php echo $row['c_number']       ?></td>
						<td><?php echo $row['name']?></td>
						<td><?php echo $row['c_name']      ?></td>
						<td><?php echo $row['c_type']?></td>
						<td><?php echo $row['duration']?></td>
						<td><?php echo $row['c_date']?></td>
						<td><?php echo $row['number']?><br><?php echo $row['email'] ?></td>
						<td>
							<a href="del.php?product_id=<?php echo $row['product_id']; ?>"
							class="btn btn-success">Download</a>
							<a href="index.php?edit=<?php echo $row['product_id']; ?>"
							class="btn btn-info">Edit</a>
							<a href="del.php?product_id=<?php echo $row['product_id']; ?>"
							class="btn btn-danger">Delete</a>
							
						</td>
					</tr>
				<?php }  ?>
				
				<!-- <?php if( count($result) == 0 ):  ?>
				<td></td><td style="color:red" >There Are No Products To View ):</td><td></td><td></td><td></td>
				<?php endif; ?> -->

				</table>
			</div>
			

			
		</div>
  </body>
</html>