<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
if( isset($_POST['switchMess'])) 
{
  $email = $_SESSION["email"] ;
  $mess = $_SESSION["mess"] ;
  if( $mess == "LDH")
  {
    $changeTo = "UDH" ;

  }
  else if($mess == "UDH")
  {
    $changeTo = "LDH";    
  }

  $sql = "UPDATE mess SET mess = '$changeTo' WHERE emailid = '$email'";
  $result = mysqli_query($conn, $sql);
  header("Location: messReg.php") ;
}
?>