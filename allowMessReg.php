<?php
include("config.php");
if ($_SESSION['name'] != "admin12") {
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>

<html>
<!-- head section -->
<?php require_once('includes/head_section.php') ?>
<!-- end of head section -->

<!-- body section -->

<body>
  <?php
  require_once("includes/navbar.php");
  ?>

  <section id="allowMessReg">
    <h1>
      This is the control panel
    </h1>

    <!-- The admin shall allow mess reg from here -->


    <form method="post" name="messReg">
      <h3>Control Panel</h3>
      <br>
      <input type="submit" id="allowMessReg" name="allowMessReg" value="Start Mess Registration" />
      <input type="submit" id="allowMessReg" name="stopMessReg" value="End Mess Registration" />
    </form>




  </section>

  <?php

  if (isset($_POST['allowMessReg'])) {
    $sql = "UPDATE `MessRegistration` SET `MessRegistration`= true";
    $result = mysqli_query($conn, $sql);
    $_SESSION["allowMessReg"] = true;
    header("Location: allowMessReg.php") ;
  } else if (isset($_POST['stopMessReg'])) {
    $sql = "UPDATE `MessRegistration` SET `MessRegistration`= false";
    $result = mysqli_query($conn, $sql);
    $_SESSION["allowMessReg"] = false;
    header("Location: allowMessReg.php") ;
  }


  ?>






  <?php
  require_once('includes/footer.php')
  ?>

</body>



<!-- end of body section -->

</html>