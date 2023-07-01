<?php
require_once("config.php");

if ($_SESSION['name'] == "admin12" || $_SESSION['name'] == NULL) {
  header("Location: login.php");
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


  <section id="talk">
    <div class="talk"  data-aos="fade-in" data-aos-duration="3000" data-aos-delay="100">
      <form action="https://formcarry.com/s/RgH0IS5ZJR" method="POST" class="formcarry-form">
        <label for="name"><h3>What might you be called ?</h3></label>
        <input type="text" id="name" name="fullName" placeholder="Name..." required />

        <label for="email"><h3>What's your internet Address ?</h3></label>
        <input type="email" id="email" name="email" placeholder="Email..." required />

        <label for="message"><h3>Say something Bro..</h3></label>
        <textarea name="message" id="message" cols="30" placeholder="No Cursing..." rows="10"></textarea>

        <button name="concern" type="submit">Let's Talk</button>
      </form>
    </div>
  </section>
  <?php
  if($_POST['concern'])
  {
    header("Location: index.php") ;
  }
  ?>



  <?php require_once('includes/footer.php') ?>


</body>

<!-- end of body section -->

</html>