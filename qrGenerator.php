<?php
include("config.php");
?>
<!DOCTYPE html>

<html>
<!-- head section -->
<?php require_once('includes/head_section.php') ?>
<!-- end of head section -->

<!-- body section -->

<body>
  <?php
  if ($_SESSION["name"]) {
    require_once('includes/navbar.php');
  } else {
    require_once('includes/navbar2.php');
  }
  ?>
<section>
  <h1>Hello Bitch</h1>
  
</section>






  <?php require_once('includes/footer.php') ?>

</body>

<!-- end of body section -->

</html>