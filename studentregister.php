<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system admin</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    /* Add CSS for background image */
    body {
      background-image: url('https://cdn.pixabay.com/photo/2015/07/17/22/44/student-849828_1280.jpg'); /* Replace 'background-image.jpg' with your image file path */
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
    width: 100%;
	padding: 5px;
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
  	<h2>Student Register</h2>
  </div>
	
  <form method="post" action="studentregister.php">
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
  	  <button type="submit" class="btn" name="reg_student">Register</button>
  	</div>
  	<p>
  		<a href="index.php">Back</a>
  	</p>
  </form>
</body>
</html>