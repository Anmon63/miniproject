<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>login here</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    /* Add CSS for background image */
    body {
      background-image: url('https://cdn.pixabay.com/photo/2019/02/12/12/32/library-3992076_960_720.jpg'); /* Replace 'background-image.jpg' with your image file path */
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
    width: 93%;
	  padding: 10px;
    border: 2px solid rgb(255, 192, 203);
    }
  p {
      
      text-align: center;
  }
  h2 {
      color: red;
      text-align: center;
  }
</style>
</head>
<body>
  <div class="header">
  	<h2>Staff Login</h2>
  </div>
	 
  <form method="post" action="stafflogin.php">
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
  		<button type="submit" class="btn" name="login_staff">Login</button>
  	</div>
  	<p>
		 <a href="login.php">back</a>
  	</p>
  </form>
</body>
</html>