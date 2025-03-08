<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>login here</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    /* Add CSS for background image */
    body {
      background-image: url('https://cdn.pixabay.com/photo/2017/08/06/15/16/table-2593395_960_720.jpg'); /* Replace 'background-image.jpg' with your image file path */
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }
	.input-group {
      text-align: center;
    }

    input[type="text"],
    input[type="password"] {
      display: block;
      margin-bottom: 40px;
      width: 100%;
	  padding: 10px;
      border: 2px solid rgb(255, 192, 203);
    }
    h2 {
      color: green;
      text-align: center;
  }
  h3 {
      color: green;
      text-align: center;
  }
</style>
</head>
<body>
  <div class="header">
  	<h2>Student Login</h2>
  </div>
	 
  <form method="post" action="studentlogin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_student">Login</button>
  	</div>
  	<p>
		 <h3><a href="login.php">back</a></h3>
  	</p>
  </form>
</body>
</html>