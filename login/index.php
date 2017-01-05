<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login </title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">

    
    
    
    
  </head>

  <body>

    
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Account </h1><span> <i class='fa fa-code'></i> Database by <a href='http://andytran.me'>Umer Farooq,Raza Bhojani,Amjad Hussain</a></span>
</div>
<div class="rerun"><a href="">Reload</a></div>
<div class="container">
  <div class="card"></div>
  <div class="card" >
    <h1 class="title">Logn</h1>
    <form action="login.php" method="POST">
      <div class="input-container">
        <input type="text" id="Username"name ="uid" required="required"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" name ="pwd" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Go</span></button>
      </div>
      <div class="footer"><a href="#">Forgot your password?</a></div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form action="signup.php" method="POST">
      <div class="input-container">
        <input type="text" name ="first" id="Username" required="required"/>
        <label for="Username">Name</label>
        <div class="bar"></div>
      </div>
	   <div class="input-container">
        <input type="text" name ="last"id="Username" required="required"/>
        <label for="Username">username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name ="uid" id="Password" required="required"/>
        <label for="Password">Email</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name ="pwd" id="Repeat Password" required="required"/>
        <label for="Repeat Password">Password</label>
        <div class="bar"></div>
		
      </div>
	  
	      <div class="input-container">
        <input type="password" name ="loc" id="Repeat Password" required="required"/>
        <label for="Repeat Password">Location</label>
        <div class="bar"></div>
		
      </div>
	  
      <div class="button-container">
        <button><span>Next</span></button>
      </div>
    </form>
  </div>
</div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
  </body>
</html>
