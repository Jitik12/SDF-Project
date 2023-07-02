<?php
 if ($_SESSION["name"] == "admin12") {
   require_once('footer3.php');
 } else if ($_SESSION["name"] != NULL) {
   require_once('footer1.php');
 } else {
   require_once('footer2.php');
 }
?>