<?php 
include("config.php") ;
if (!$_SESSION["name"])
{
  header("Location: login.php") ;
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
  if($_SESSION["name"])
  {
    require_once('includes/navbar.php') ;
  }
  else{
    require_once('includes/navbar2.php') ;
  }
  ?>



  <section id="messReg">
    <div>
      <h1>Mess Registration is Now <span class="messRegHeadOpen">Open</span></h1>
      <?php
      include("Logics/messRegLogic.php") ;
      ?>
    </div>
  </section>


  <?php require_once('includes/footer.php') ?>

</body>

<!-- end of body section -->

</html>



