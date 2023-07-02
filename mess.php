<?php
require_once("config.php")
?>
<!DOCTYPE html>
<!-- head section -->
<?php require_once('includes/head_section.php') ?>
<!-- end of head section -->


<body class="minH0">


  <?php
  $presentDay = date("Y-m-d");
  $nextDate = date("Y-m-d", strtotime($presentDay . " +1 day"));
  $day2 = date("l", strtotime($nextDate));
  $nextDate = date("Y-m-d", strtotime($nextDate . " +1 day"));
  $day3 = date("l", strtotime($nextDate));
  $nextDate = date("Y-m-d", strtotime($nextDate . " +1 day"));
  $day4 = date("l", strtotime($nextDate));
  $nextDate = date("Y-m-d", strtotime($nextDate . " +1 day"));
  $day5 = date("l", strtotime($nextDate));
  $nextDate = date("Y-m-d", strtotime($nextDate . " +1 day"));
  $day6 = date("l", strtotime($nextDate));
  $nextDate = date("Y-m-d", strtotime($nextDate . " +1 day"));
  $day7 = date("l", strtotime($nextDate));
  ?>


  <section id="food">
    <div>
      <ul class="dayBar">
        <li>
          <a href="day1.php">Today Menu</a>
        </li>
        <li>
          <a href="day2.php"><?php echo ($day2 . ' Menu') ?></a>
        </li>
        <li>
          <a href="day3.php"><?php echo ($day3 . ' Menu') ?></a>
        </li>
        <li>
          <a href="day4.php"><?php echo ($day4 . ' Menu') ?></a>
        </li>
        <li>
          <a href="day5.php"><?php echo ($day5 . ' Menu') ?></a>
        </li>
        <li>
          <a href="day6.php"><?php echo ($day6 . ' Menu') ?></a>
        </li>
        <li>
          <a href="day7.php"><?php echo ($day7 . ' Menu') ?></a>
        </li>
      </ul>
    </div>
  </section>
</body>