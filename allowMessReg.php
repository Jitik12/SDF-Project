<?php
include("config.php");
if ($_SESSION['name'] != "admin12") {
  header("Location: login.php");
}
?>
<!DOCTYPE html>

<html>
<!-- head section -->
<?php require_once('includes/head_section.php') ?>
<!-- end of head section -->

<!-- body section -->

<!-- <body>
  <?php
  // require_once("includes/navbar.php");
  ?>

  <section id="allowMessReg">
    <h1>
      Hello Bitch,this is the control panel
    </h1>

    <div class="button r center" id="button-3">
      <input type="checkbox" class="checkbox">
      <div class="knobs"></div>
      <div class="layer"></div>
    </div>

  </section>




  <?php
  // require_once('includes/footer.php')
  ?>

</body> -->

<body>
  <div class="button r center" id="button-3">
    <input type="checkbox" class="checkbox">
    <div class="knobs"></div>
    <div class="layer"></div>
  </div>
</body>

<!-- end of body section -->

</html>