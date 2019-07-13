
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MindScript</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
       <script>
function showCertificateDetails(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("certificate_details").innerHTML = '<br><div class="alert alert-info"><strong>Info!</strong> Please enter certificate number</div>';
    return;
  }
  xhttp = new XMLHttpRequest();
  
  xhttp.open("GET", "verify.php?q="+str, true);
  xhttp.send();
  
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("certificate_details").innerHTML = this.responseText;



    }
  }
}
</script>

</head>
<body>
<div class="container-fluid">

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <form action="login1.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Login ID</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Login ID" name="login_id">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  
  <button type="submit" name="login_user" class="btn btn-primary">Submit</button>
</form>


      </div>
    
    </div>
  </div>
</div>
<nav class="navbar navbar-inverse navbar-expand-sm bg-dark navbar-dark fixed-top">
  <div class="container-fluid">
    <div class="navbar-header align-self-center">
      <a class="navbar-brand" href="#"><h3>MindScript</h3></a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      
      <li class="nav-item"><a href="" class="nav-link" data-toggle="modal" data-target="#modalLoginForm">Admin Login</a></li>
    </ul>
  </div>
</nav>




    

<div class="container">
  <div class="row justify-content-left" style="margin-top: 80px;">
    <h2>Verify Certificate </h2>      
  </div>
     
  </div>
<div class="container">

  <div class="form-group">
    <!-- <label for="certificate_no">certificate number:</label> -->
    <input type="text" class="form-control" id="certificate_no" name="certificate_no" placeholder="Enter Certificate Number">
  </div>
 

  
  <button type="submit" class="btn btn-primary btn-md" onclick="showCertificateDetails(document.getElementById('certificate_no').value)">verify</button>
  
  </div>
   

    </div>
    <div class="container" id="certificate_details">
    <p><br>Status of certificate verification :</p>
    </div>

 

</body>
</html>
