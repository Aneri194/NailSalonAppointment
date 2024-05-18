<!DOCTYPE html>
<html>
<head>
  <title>GlamUp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 
  <style>
    body {
      background-color: #F4EADF;
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    .container {
      margin-top: 50px;
    }

    .panel {
      background-color: rgba(255, 255, 255, 0.9);
      border: 1px solid #5e483e;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    }

    .panel-heading {
      background-color: #4a3931;
      color: white;
      font-weight: bold;
    }

    .panel-body {
      padding: 20px;
    }

    .form-control {
      margin-bottom: 10px;
    }

    .btn-primary {
      background-color: #4a3931;
      border: none;
    }

    .btn-primary:hover {
      background-color: #5e483e;
    }

    .signin {
      margin-top: 20px;
      text-align: center;
    }

    .signin a {
      color: #337ab7;
    }

    .signin a:hover {
      text-decoration: none;
    }
  </style>

</head>
<body style='background-image: url("assets/img/login1.jpg");'>


  <div class="container">
    
    <div class="panel panel" style="opacity: 0.9;">
      <div class="panel-heading">Registration</div>
      <div class="panel-body">
        <form action="add_details.php" method="POST">

          <label for="email"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" class="form-control" name="name" id="email" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" class="form-control" id="email" required>

    <label for="phone"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone No" name="mob" class="form-control" id="email" required>


    <!-- <label for="date"><b>DOB</b></label>
    <input type="date" placeholder="Enter DOB" name="dob" class="form-control" id="email" required> -->

    <label for="gender"><b>Gender</b></label>
    <select class="form-control" name="gender">
     <option value="Female">Female</option>
     <option value="Male">Male</option>
    </select>

    <label><b>Address</b></label>
    <textarea name="address" placeholder="Enter Address" class="form-control"></textarea>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Password" class="form-control" name="Password" id="psw" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" name="submit" class="btn btn-primary">Register</button>
 
  
  <div class="signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>
      </div>
    </div>
   </div>

   


</body>
</html>
