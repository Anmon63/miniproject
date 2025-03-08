<!DOCTYPE html>
<html>
<body>

<?php
session_start();

$username = "";
$email    = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'miniproject');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}



$sql = "SELECT id, username, email, img FROM administrator";
$result = $db->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        print "<br> id: ". $row["id"]. "<br> - Name: ". $row["username"]. "<br> - Email: " . $row["email"] . "<br>";
      print "<img src=\"".$row["img"]."\">";
     
    }
} else {
    print "0 results";
}
$sql = "SELECT id, username, email, img FROM staff";
$result = $db->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        print "<br> id: ". $row["id"]. "<br> - Name: ". $row["username"]. "<br> - Email: " . $row["email"] . "<br>";
      print "<img src=\"".$row["img"]."\">";
     
    }
} else {
    print "0 results";
}
$sql = "SELECT id, username, email, img FROM student";
$result = $db->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        print "<br> id: ". $row["id"]. "<br> - Name: ". $row["username"]. "<br> - Email: " . $row["email"] . "<br>";
      print "<img src=\"".$row["img"]."\">";
      
    }
} else {
    print "0 results";
}

$db->close();   
        ?> 



</body>
</html>