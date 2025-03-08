<?php
session_start();

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: studentlogin.php');
  exit();
}

$username = $_SESSION['username'];


$hostname = "localhost";
$usernameDB = "root";
$passwordDB = "";
$databaseName = "miniproject";

$con = mysqli_connect($hostname, $usernameDB, $passwordDB, $databaseName);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}


$query = "SELECT due FROM student WHERE username = '$username'";
$result = mysqli_query($con, $query);

if (!$result) {
  die("Query failed: " . mysqli_error($con));
}

$row = mysqli_fetch_assoc($result);
$due = $row['due'];

mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Student Due</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    /* Add CSS for background image */
    body {
      background-image: url('https://cdn.pixabay.com/photo/2019/02/10/09/21/lecture-3986809_1280.jpg'); /* Replace 'background-image.jpg' with your image file path */
      background-size: cover;
      padding-top: 150px; /* Add some padding to push the background image down */
    	padding-right: 0;
    	padding-bottom: 0;
    	padding-left: 0;
      background-repeat: no-repeat;
      background-position: center;
    }
    h2 {
      color: red;
      text-align: center;
  }
  h3 {
      color: goldenrod;
      text-align: center;
  }
  h4 {
      color: green;
      text-align: center;
  }
</style>
</head>
<body>
  <div class="header">
    <h2>Student Due</h2>
  </div>
  <div class="content">
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success">
        <h3>
          <?php
          echo $_SESSION['success'];
          unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>
    <?php if (isset($_SESSION['username'])) : ?>
      <h3><p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></h3>
      <h3><p> due amount = <?php echo $due; ?></p></h3>
      <h4><p><a href="indexstudent.php" style="color: aqua;">Back</a></p></h4>
      <h4><p><a href="indexstudent.php?logout=1" style="color: red;">Logout</a></p></h4>
    <?php endif ?>
  </div>
</body>
</html>
