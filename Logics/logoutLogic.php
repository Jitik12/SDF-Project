<?php
session_start();
session_destroy();
  // ini_set('display_errors', 1);
  // ini_set('display_startup_errors', 1);
  // error_reporting(E_ALL);
?>

<!DOCTYPE html>

<html>
<!-- head section -->
<style>
  *{
    font-family: fantasy;
    font-size: 1.3rem;
    margin: 0;
    padding: 0;
    box-sizing: content-box;
  }
  body{
    background-color: #0e0e0e;
    
  }
  section
  {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #0e0e0e;
    color: aliceblue;
  }
  a{
    text-decoration:underline ;
    color: whitesmoke;
    transition: 0.15s;
  }
  a:hover
  {
    color: green;
  }

</style>
<!-- end of head section -->

<!-- body section -->

<body>
  <?php


  echo '<section>
    <p class="logOut">You have been successfully logged out. <a href="/project2/index.php">Go back</a></p>
  </section>';



  ?>

</body>

<!-- end of body section -->

</html>