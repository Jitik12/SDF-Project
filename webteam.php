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
  require_once("includes/navbar.php");
  ?>





  <section id="webTeam">


    <div style="display: flex; flex-wrap: wrap; align-items: center;">
      <p>We are the -</p>
      <h1>
        <h1>Boss</h1>
      </h1>
    </div>
    <div class="image">
      <img src="./static/images/night.jpg" alt="">
    </div>
    <div class="images">
      <img src="./static/images/sriman.jpg" alt="">
      <img src="./static/images/koushik.jpg" alt="">
      <img src="./static/images/naveen.jpg" alt="">
      <img src="./static/images/ShaikArmaan.png" alt="">
    </div>
  </section>


  <?php require_once('includes/footer.php') ?>

</body>

<!-- end of body section -->

</html>