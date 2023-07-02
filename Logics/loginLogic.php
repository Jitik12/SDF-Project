<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require("config.php");

if( isset($_POST['submitBtn']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  if($name == "admin12" && $email == "admin@gmail.com" && $password == "admin12")
  {
    // admin logic
    $_SESSION["name"] = $name ;
    $_SESSION["email"] = $email ;
    
    echo("<script>console.log('1')</script>") ;
    header("Location: index.php");
  }
  
  else
  {
    $sql = "SELECT * FROM users WHERE ( name = '$name' ) AND ( email = '$email' ) AND ( password = '$password' )" ;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);  
    
    
    
    if ( $count == 1 )
    {
      $_SESSION["name"] = $name ;
      $_SESSION["email"] = $email ;
      
      echo("<script>console.log('2')</script>") ;
      header("Location: ./index.php") ;
      exit() ;
    }
    else
    {
      echo("<script>console.log('3')</script>") ;
      echo '<script>
      alert("LogIN Failed Bro") ;
      window.location.href = "login.php" ;
      </script>' ;
      exit() ;
    }
  }
}




?>

