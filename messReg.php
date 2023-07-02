<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

use LDAP\Result;
include("config.php");

if (!$_SESSION["name"]) {
  header("Location: login.php");
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



  <section id="messReg">
    <div>
      <h1>Mess Registration</h1>
      <?php
      include("Logics/messRegLogic.php");
      ?>
    </div>
  </section>


  <?php require_once('includes/footer.php') ?>

</body>

<!-- end of body section -->

</html>