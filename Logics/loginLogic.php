<?php
include("config.php") ;

if( isset($_POST['submitBtn']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  $sql = "SELECT * FROM users WHERE ( name = '$name' ) AND ( email = '$email' ) AND ( password = '$password' )" ;
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);  

  

  if ( $count == 1 )
  {
    $_SESSION['name'] = $row['name'] ;
    $_SESSION['email'] = $row['email'] ;


    header("Location: messReg.php") ;
    $_SESSION['authenticated'] = true;
    exit() ;
  }
  else{
    echo '<script>
    alert("LogIN Failed Bro") ;
    window.location.href = "login.php" ;
    </script>' ;
  }
}




?>

