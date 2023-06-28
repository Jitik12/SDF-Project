<?php
include("Logics/loginLogic.php") ;
?>

<!DOCTYPE html>

<html>
<!-- head section -->
<?php require_once('includes/head_section.php') ?>
<!-- end of head section -->

<!-- body section -->

<body>
  <?php require_once('includes/navbar.php') ?>


  <section>
    <h1>Log In Bitch</h1>
    <form name="form" method="post" onsubmit="return validate()">
      <div>
        <label for="name">Give me your Name, Bitch : </label><br>
        <input type="text" placeholder="Name..." id="name" name="name">
      </div>
      <div>
        <label for="email">Give me your Email, Bitch : </label><br>
        <input type="text" placeholder="Email..." id="email" name="email">
      </div>
      <div>
        <label for="password">Give me your Email, Bitch : </label><br>
        <input type="password" placeholder="Password..." id="password" name="password">
      </div>

      <div>
        <input type="submit" value="LOGIN" id="submitBtn" name="submitBtn">
      </div>

    </form>
  </section>


  <?php require_once('includes/footer.php') ?>


</body>

<!-- end of body section -->

</html>