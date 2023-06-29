<?php 
	session_start();


  // ###### context #####
  $allowMessReg = false ;


	// connect to database
  $conn = new mysqli("localhost" , "root" , "" , "project2") ;
  if (!$conn)
  {
    die("Connection Error".mysqli_connect_error()) ;
  }
  echo("") ;
  
       // coming soon...

	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/project2/');




?>