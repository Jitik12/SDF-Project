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

<body>
  <section id="food">
    <?php require_once('includes/navbar.php') ?>

    <?php
    $presentDay = date("Y-m-d");
    $day = date("l", strtotime($presentDay));
    // ############
    // echo $day;
    ?>

    <div class=hero style="height: 1000px;">
      <div class="heading">
        <h1>TODAY MENU</h1>
      </div>

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


    Hello this is the Mess Page.
    <?php require_once('mess.php') ?>
  </section>


  <?php require_once('includes/footer.php') ?>


</body>

<!-- end of body section -->

</html>