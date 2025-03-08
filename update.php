<?php
// Initialize variables
$due = "";
$username = "";

// Check if the update form is submitted
if (isset($_POST['update'])) {
    // Database connection credentials
    $hostname = "localhost";
    $dbUsername = "root";
    $password = "";
    $databaseName = "miniproject";

    // Connect to the database
    $connect = mysqli_connect($hostname, $dbUsername, $password, $databaseName);

    // Check if connection was successful
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get username from the URL parameter
    $username = $_GET['username'];
    
    // Get due from the form
    $due = mysqli_real_escape_string($connect, $_POST['due']);

    // Update the due for the specified username
    $query = "UPDATE student SET due='$due' WHERE username='$username'";
    $result = mysqli_query($connect, $query);

    // Check if the update was successful
    if ($result) {
        echo '<p style="color: green;">Data Updated</p>';
    } else {
        echo '<p style="color: red;">Data Not Updated: ' . mysqli_error($connect) . '</p>';
    }
    

    // Close the database connection
    mysqli_close($connect);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP UPDATE DUE</title>
    <style>
    /* Add CSS for background image */
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
    h2,h3,h4 {
      color: gold;
      text-align: center;
  }
  /* CSS for submit button */
input[type="submit"] {
    background-color: #4caf50; /* Button background color */
    color: #e90b0b; /* Button text color */
    border: none; /* Remove button border */
    padding: 10px 20px; /* Adjust padding to change button size */
    cursor: pointer; /* Show pointer cursor on hover */
    border-radius: 3px; /* Apply border radius to round the corners */
    width: 150px; /* Adjust width to change button width */
    height: 40px; /* Adjust height to change button height */
    font-size: 16px; /* Adjust font size to change button text size */
}

input[type="submit"]:hover {
    background-color: #45a049; /* Change background color on hover */
}
.input-group {
      text-align: center;
    }

input[type="text"] {
    display: block;
    margin-bottom: auto;
    margin-left: auto;
    margin-right: auto;
    margin-top: auto;
    width: 50%;
	padding: 5px;
    border: 2px solid lightblue;
    }

    </style>
</head>
<body>
    <form action="update.php?username=<?php echo $_GET['username']; ?>" method="POST">
        <h2>Enter the Due to update: <input type="text" name="due" required><br><br></h2>
        <h4><input type="submit" name="update" value="Update Due"><h4></h4>
        <h3><a href="indexstaff.php">Back</a></h3>
    </form>
</body>
</html>
