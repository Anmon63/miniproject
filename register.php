<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system admin</title>
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
	input[type="email"],
    input[type="password"] {
      display: block;
      margin-bottom: 30px;
      width: 93%;
	  padding: 5px;
      border: 2px solid rgb(255, 192, 203);
    }
	.container{
		
		max-width: 800px;
        margin: center;
        padding: 20px;
	}
	h2 {
		color:blue;
		text-align: center;
		font-size: x-large;
	}
</style>
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  </form>
</body>
</html>