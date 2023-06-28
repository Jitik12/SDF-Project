<?php 
	session_start();


  // ###### context #####
  $_SESSION['authenticated'] = false ;
  $allowMessReg = true ;


	// connect to database
  $conn = new mysqli("localhost" , "root" , "" , "project2") ;
  if (!$conn)
  {
    die("Connection Error".mysqli_connect_error()) ;
  }
  echo("<p>Connection Successful</p>") ;
  
       // coming soon...

	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/project2/');




?>