<?php
include("config.php");
if( $_SESSION['name'] != "admin12" )
{
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


  <section id="startScan">
    <div class="startScan">
      <a class="breakfast" href="<?php echo (BASE_URL . "breakfast.php") ?>">
        <div>
          <h1>Breakfast</h1>
        </div>
      </a>
      <a class="lunch" href="<?php echo (BASE_URL . "lunch.php") ?>">
        <div>
          <h1>Lunch</h1>
        </div>
      </a>
      <a class="dinner" href="<?php echo (BASE_URL . "dinner.php") ?>">
        <div>
          <h1>Dinner</h1>
        </div>
      </a>
    </div>
  </section>


  <?php require_once('includes/footer.php') ?>

</body>

<!-- end of body section -->

</html>