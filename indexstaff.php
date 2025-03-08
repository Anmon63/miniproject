<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: stafflogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: stafflogin.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
    body {
        background-image: url("https://cdn.pixabay.com/photo/2017/03/28/12/07/bricks-2181920_1280.jpg");
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
		color:blue;
		text-align: center;
		font-size: large;
	}
	h4 {
		
		color:red;
		text-align: center;
		font-size: large;
	}
	input[type="text"] {
      display: block;
      margin-bottom: 40px;
      width: 93%;
	  padding: 10px;
      border: 2px solid rgb(255, 192, 203);
    }
	
	</style>
</head>
<body>

<div class="header">
	<h2>Staff Home Page</h2>
</div>
<div class="section" >
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
    	<h3>WELCOME TO STAFF HOME PAGE <?php echo $_SESSION['username']; ?></h3> 
		<form method="post" action="studentduestaff.php">
			Enter the student name: <input name="username" type="text">
			<input type="submit" value="Submit"> 
		</form>
    	<h4> <a href="indexstaff.php?logout='1'" style="color: blue ;">logout</a> </h4>
    <?php endif ?>
</div>

</body>
</html>
