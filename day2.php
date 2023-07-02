<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
require_once("config.php")
?>
<!DOCTYPE html>


<!-- head section -->
<?php require_once('includes/head_section.php') ?>
<!-- end of head section -->

<!-- body section -->
<?php require_once('includes/navbar.php') ?>
<section id="menu">
  <div id="food">

    <?php
    $presentdate = date("Y-m-d");
    $Date = date("Y-m-d", strtotime($presentdate . " +1 day"));
    $day = date("l", strtotime($Date));
    // echo $day;
    ?>

    <div class="hero">
      <?php echo "<div class='heading'><h2>" . $day . " Menu" . "</h2></div>" ?>


      <div class="">
        <div class="">
          <h3>Breakfast</h3>
        </div>
        <div style="margin-top:1rem">

        </div>
        <?php

        // SQL query to fetch data
        $sql = "SELECT * FROM break_fast WHERE day='$day'";
        $result = $conn->query($sql);

        // Check if any rows are returned
        if ($result->num_rows > 0) {
          // Iterate through each row "<br>"
          while ($row = $result->fetch_assoc()) {
            // Access data from each column
            $column1Value = $row["menu"];

            echo "<div class=td >" .  $column1Value . "</div>";
            echo "<br>";
          }
        } else {
          echo "No data found.";
        }
        ?>
      </div>
      <div class="">
        <div class="">
          <h3>Lunch</h3>
        </div>
        <div style="margin-top:1rem">

        </div>
        <?php

        // SQL query to fetch data
        $sql = "SELECT * FROM lunch WHERE day='$day'";
        $result = $conn->query($sql);

        // Check if any rows are returned
        if ($result->num_rows > 0) {
          // Iterate through each row "<br>"
          while ($row = $result->fetch_assoc()) {
            // Access data from each column
            $column1Value = $row["menu"];

            echo "<div class=td >" .  $column1Value . "</div>";
            echo "<br>";
          }
        } else {
          echo "No data found.";
        }
        ?>
      </div>
      <div class="">
        <div class="">
          <h3>Dinner</h3>
        </div>
        <div style="margin-top:1rem">

        </div>
        <?php

        // SQL query to fetch data
        $sql = "SELECT * FROM dinner WHERE day='$day'";
        $result = $conn->query($sql);

        // Check if any rows are returned
        if ($result->num_rows > 0) {
          // Iterate through each row "<br>"
          while ($row = $result->fetch_assoc()) {
            // Access data from each column
            $column1Value = $row["menu"];

            echo "<div class=td >" .  $column1Value . "</div>";
            echo "<br>";
          }
        } else {
          echo "No data found.";
        }
        ?>
      </div>
    </div>


  </div>
  <div>
    <?php require_once('mess.php') ?>
  </div>




</section>

<?php require_once('includes/footer.php') ?>
<!-- end of body section -->

</html>