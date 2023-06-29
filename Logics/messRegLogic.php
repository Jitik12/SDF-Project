<?php
include("config.php");
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// Connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "project2";

$name = $_SESSION["name"] ;

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Email value to match
$emailToMatch = $_SESSION["email"];

// Query to retrieve data from "mess" table based on email
$sql = "SELECT * FROM mess WHERE emailid = '$emailToMatch'";
$result = $conn->query($sql);
if (!$result) {
  echo ("Query error: ");
  exit;
}

// Display the results
if ($result->num_rows == 1) {
  
    $row = $result->fetch_assoc();
    $email = $row["emailid"];
    $mess = $row["mess"];
    $_SESSION["mess"] = $mess ;

    echo "<p class='details'>Name: $name</p>";
    echo "<p class='details'>Email: $email</p>";
    echo "<p class='details'>Message: $mess</p>";

} else {
  echo "No results found.";
}


if ($allowMessReg) {
  ?>
  <form name="messSwitch" method="post" onsubmit="">
    <input type="submit" value="Switch Mess" id="switchMess" name="switchMess" />
  </form>
<?php

} 
else {
  echo("<p>Mess Registration is <span class='NO'>NO</span> longer happening </p>");
}
?>

<?php
include("messSwitch.php");
?>
