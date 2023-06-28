<?php
include("config.php") ;
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] == true ) {
  $loggedIn = true;
} else {
  $loggedIn = false;
}
?>
<div class="navbar">

  <div class="logo_div">

    <a href="index.php">
      <h1>LifeBlog</h1>
    </a>

  </div>

  <ul>

    <li><a class="active" href="index.php">Home</a></li>

    <li><a href="mess.php">Mess</a></li>

    <li><a href="concerns.php">Concerns</a></li>
    
    <li><a href="messReg.php">messReg</a></li>

    <?php

    if ( $loggedIn )
    {
      echo("<li><a href='./Logics/logoutLogic.php'>LogOut</a></li>");
    }
    else{
      echo("<li><a href='./login.php'>Login</a></li>");
    }

    ?>

  </ul>

</div>