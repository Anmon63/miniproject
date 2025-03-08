<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
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

    /* Define different background images for different screen widths */
    @media only screen and (max-width: 600px) {
        body {
            background-image: url("https://cdn.pixabay.com/photo/2017/03/28/12/07/bricks-2181920_1280.jpg");
        }
    }

    @media only screen and (min-width: 601px) and (max-width: 1024px) {
        body {
            background-image: url("https://cdn.pixabay.com/photo/2014/02/01/17/28/apple-256261_1280.jpg");
        }
    }

    @media only screen and (min-width: 1025px) {
        body {
            background-image: url("https://cdn.pixabay.com/photo/2017/09/26/04/28/classroom-2787754_1280.jpg");
        }
    }

	.input-group {
    text-align: center;
    margin: auto;
    width: 50%; /* Set the width to control the size of the centered text */
}
h2,h3,h4,h5 {
            color: red;
            text-align: center;
    }

  </style>
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
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
    	<h3><p>WELCOME <strong><?php echo $_SESSION['username']; ?></strong></p></h3>
		<h4><button type="button" onclick="location.href='staffregister.php'" style="color:crimson;">ADD STAFF</button></h4>
		<h4><button type="button" onclick="location.href='studentregister.php'" style="color:saddlebrown;">ADD STUDENT</button></h4>
    	<h5><p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p></h5>
    <?php endif ?>
</div>

</body>
</html>