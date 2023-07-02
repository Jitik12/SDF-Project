<?php
include("config.php");
?>
<nav>

  <div class="logo_div">

    <a href="index.php">
      <h1>Mess @IITH</h1>
    </a>

  </div>

  <ul>

    <div>
      <li><a class="active" href="index.php">Home</a></li>
    </div>

    <div>
      <li><a href="day1.php">Menu</a></li>
    </div>


    <div>
      <li><a href="<?php echo ("startScan.php") ?>">StartScan</a></li>
    </div>

    <div>
      <li><a href="allowMessReg.php">Enable Mess Registration</a></li>
    </div>

    <div>
      <li><a href='./Logics/logoutLogic.php'>-Admin LogOut-</a></li>
    </div>

  </ul>

</nav>