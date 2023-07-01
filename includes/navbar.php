  <?php
  if ($_SESSION["name"] == "admin12") {
    require_once('navbar3.php');
  } else if ($_SESSION["name"] != NULL) {
    require_once('navbar1.php');
  } else {
    require_once('navbar2.php');
  }
  ?>