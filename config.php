<?php 
	session_start();



	// connect to database
  $conn = new mysqli("localhost" , "root" , "" , "project2") ;
  if (!$conn)
  {
    die("Connection Error".mysqli_connect_error()) ;
  }
  echo("") ;

// coming soon...

// define ('ROOT_PATH', realpath(dirname(__FILE__)));
// define('BASE_URL', 'http://localhost/project2/');



// ###### context #####
$allowMessReg = false;
$sql = "SELECT * FROM messregistration" ;
$result = mysqli_query($conn, $sql) ;
$row = mysqli_fetch_array($result, MYSQLI_ASSOC) ;
$allowMessReg = $row['messregistration'] ;


?>