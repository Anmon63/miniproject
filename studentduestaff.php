<?php
require_once('db.php');

// Check if username is submitted via POST
if(isset($_POST["username"])) {
    $username = $_POST["username"];

    // Sanitize user input to prevent SQL injection
    $username = mysqli_real_escape_string($con, $username);

    $query = "SELECT * FROM student WHERE username='$username'";
    $result = mysqli_query($con, $query);

    if (!$result) {
        die('Error in executing the query: ' . mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Due and Clearance</title>
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
    h3 {
      color: green;
      text-align: center;
  }
    </style>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Student Database</h2>
                    </div>
                    <div class="card-body">
                        <?php if (isset($result) && mysqli_num_rows($result) > 0) : ?>
                            <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered text-center">
                                <tr class="background-black text-white">
                                    <td>ID</td>
                                    <td>Username</td>
                                    <td>Due</td>
                                </tr>
                                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['due']; ?></td>
                                        <td><a href="update.php?username=<?php echo $row['username']; ?>">Edit</a></td>
                                    </tr>
                                <?php endwhile; ?>
                            </table>
                        <?php else : ?>
                            <p class="text-center">No records found.</p>
                        <?php endif; ?>
                        <h3><a href="indexstaff.php" class="btn btn-primary">Back</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
