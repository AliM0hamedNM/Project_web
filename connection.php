<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_web";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
    die("Connection seccsusfully: " . mysqli_connect_error());

}

?>
