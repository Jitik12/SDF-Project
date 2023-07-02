<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// use LDAP\Result;

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

  <section id="lunch">
    <div class="scanner">
      <h1><span class="lunch">Lunch</span> Scanner</h1>
      <form method="post" onsubmit="return validatePupil() ;">
        <p>Date : <?php echo (date('d-m-Y')); ?></p>
        <label for="pupil">Pupil's Email :</label>
        <input name="pupil" id="pupil" type="text" />
        <input type="submit" value="Eaten" id="Eaten" name="Eaten">
      </form>

      <?php
      if (isset($_POST['Eaten'])) {
        $pupil = $_POST['pupil'];
        $date = date('d-m-Y');

        $sql = "SELECT * FROM attendence WHERE (pupil = '$pupil') AND (lunch = true ) AND (date = '$date')";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if ($count != 0) {
      ?>
          <br><br><br>
          <h1>You have already Eaten, <?php echo ("$pupil"); ?></h1>
      <?php
          exit();
        }



        $sql = "INSERT INTO `attendence`(`pupil`, `date`, `lunch`) VALUES ('$pupil','$date',true)";
        $result = mysqli_query($conn, $sql);

        if ($result) {
          header("Location: lunch.php");
          exit();
        } else {
          echo "Error: " . mysqli_error($conn);
          echo "<script>
            alert('Failed to Submit \'s Querry') ;
            </script>";
        }
      }

      ?>

    </div>
  </section>


  <?php require_once('includes/footer.php') ?>

</body>

<!-- end of body section -->

</html>