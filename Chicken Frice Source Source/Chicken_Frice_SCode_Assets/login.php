<!-- This code is design to create the login page template -->
<html>
<head>
    <title>User Login and Registration</title> <!-- title tab -->
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- calls the css design -->
    <!--This is a bootstrap cdn link wherein the code pulls in the design templates from the net. Note that this is open source -->
    <link rel=stylesheet type ="text/css" href ="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"> 

    <body>
      <!-- Login box  in the left side of the page-->
    <div class = "container">
    <div class = "login-box">
    <div class="row">
    <div class = "col-md-6 login-left">
    <h2>Login Here</h2>
    <form action = "validation.php" method="post"> <!-- calls the validation.php source code to verify the accounts -->
    <div class ="form-group">
    <label>Username</label>
    <input type="text" name="user" class="form-control" required> <!-- gets user username input -->
    </div>

    <div class ="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" required> <!--gets user password input -->
    </div>
    <button type="submit" class="btn btn-primary">Login</button> <!-- login button -->

    </form>
    </div>
 <!-- Registration box on the right side of the page-->
    <div class = "col-md-6 login-right">
    <h2>Register Here</h2>
    <form action = "registration.php" method="post"> <!-- calls the registration source code to register data input to the databse -->
    <div class ="form-group">
    <label>Username</label>
    <input type="text" name="user" class="form-control" required><!-- gets the user username input -->
    </div>

    <div class ="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" required> <!-- gets the user password input -->
    </div>
    <button type="submit" class="btn btn-primary">Register</button> <!-- register button -->

    </form>
    
    </div>
    </div>
    </div>
    </div>
    
    </body>

<html>