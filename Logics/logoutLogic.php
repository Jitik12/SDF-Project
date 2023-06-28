<?php
session_start();
session_destroy();
echo 'You have been successfully logged out. <a href="/project2/index.php">Go back</a>';
?>