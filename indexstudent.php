<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: studentlogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: studentlogin.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
    body {
        background-image: url("https://cdn.pixabay.com/photo/2014/02/01/17/28/apple-256261_1280.jpg");
        font-family: Arial, sans-serif;
        margin: 0;
		padding-top: 150px; /* Add some padding to push the background image down */
    	padding-right: 0;
    	padding-bottom: 0;
    	padding-left: 0;
        background-size: cover; /* Cover the entire viewport */
        background-repeat: no-repeat;
        background-position: center;
    }
	h2 {
            color: red;
            text-align: center;
    }
	h3 {
            color: greenyellow;
            text-align: center;
    }
	h4 {
            color: blue;
            text-align: center;
    }
	p {
            color: red;
            text-align: center;
    }
	</style>
</head>
<body>

<div class="header">
	<h2>Student Home Page</h2>
</div>
<div class="content" >
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
    <?php  if (isset($_SESSION['username'])) : ?>
    	<h3>WELCOME TO STUDENT HOME PAGE  <strong><?php echo $_SESSION['username']; ?></strong></h3>
		<h4><a href="studentdue.php">View Due</a></h4>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

</body>
</html>