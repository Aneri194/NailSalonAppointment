<!DOCTYPE html>
<html>
  <head>
    <title>GlamUP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
      body {
        background-color: #f4eadf;
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

      .btn-success {
        background-color: #4a3931;
        border: none;
      }

      .btn-success:hover {
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
  <body style="background-image: url('assets/img/IMAGES/wp24.png')">
    <div class="container">
      <a href="index.php">Back</a>

      <div class="panel panel" style="opacity: 0.9">
        <div class="panel-heading">Login</div>
        <div class="panel-body">
          <form action="redirect.php" method="POST">
            <label for="email"><b>Email</b></label>
            <input
              type="email"
              placeholder="Enter Email"
              name="email"
              class="form-control"
              id="email"
              required
            />

            <label for="psw-repeat"><b>Password</b></label>
            <input
              type="password"
              placeholder="Password"
              class="form-control"
              name="Password"
              id="psw-repeat"
              required
            />
            <hr />

            <button href="index.php" type="submit" class="btn btn-success">
              Login
            </button>

            <div class="signin">
              <p>Don't have account? <a href="registration.php">Signup</a>.</p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
