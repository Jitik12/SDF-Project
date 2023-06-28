<?php
include("config.php");
include("Logics/loginLogic.php");

if ($_SESSION[$name] == NULL)
{
  header("Location: login.php") ;
  exit() ;
}
?>

<!DOCTYPE html>

<html>
<!-- head section -->
<?php require_once('includes/head_section.php') ?>
<!-- end of head section -->

<!-- body section -->

<body>
  <?php require_once('includes/navbar.php') ?>
  <h1>Mess Reg</h1>


  <section>
    <?php
    if (!$allowMessReg)
    {
    ?>
      <!-- mess reg code -->
    <?php
    }
    else 
    {
    ?>
      <!-- default message -->
      <div>
        Your current Mess is <?php echo($_SESSION['name']);?>
      </div>


    <?php
    }
    ?>

  </section>


  <?php require_once('includes/footer.php') ?>

</body>

<!-- end of body section -->

</html>



