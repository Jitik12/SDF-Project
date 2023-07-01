<?php
include("config.php");
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

  <section id="hero">
    <div class="container-fluid carousel">
      <div id="carouselExampleCaptions" class="carousel slide">



        <div class="carousel-inner glass-tablet">
          <div class="carousel-item active">
            <img src="./static/images/m1.jpeg" class="d-block w-100 kenburns-top" alt="..." />

          </div>
          <div class="carousel-item">
            <img src="./static/images/m3.jpeg" class="d-block w-100 kenburns-top" alt="..." />

          </div>
          <div class="carousel-item">
            <img src="./static/images/m4.jpeg" class="d-block w-100 kenburns-top" alt="..." />

          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>


  <section id="about">
    <div class="about">
      <div>
        <a href="#about">
          <h1>About Us,</h1>
        </a>
      </div>
      <div>
        <p>
          At the IIT Hyderabad Mess, we believe that good food is not just a necessity, but a vital part of a student's life. We take pride in providing a diverse and delicious dining experience to the students, faculty, and staff of the Indian Institute of Technology Hyderabad.
        </p>
      </div>
      <div>
        <p>
          Our dedicated team of culinary experts and support staff work tirelessly to ensure that every meal served at the mess is of the highest quality, hygienically prepared, and caters to a variety of tastes and preferences. We understand that the IITH community is diverse, with students hailing from different regions of India and various cultural backgrounds. Therefore, our menu is thoughtfully designed to include a wide range of cuisines, including North Indian, South Indian, Chinese, Continental, and more. We strive to strike a balance between traditional favorites and innovative dishes to keep our patrons excited and satisfied.
        </p>
      </div>
      <div>
        <p>
          We take pride in being more than just a place to eat. The IITH Mess is a hub of social interactions, where students, faculty, and staff can engage in meaningful conversations, discuss ideas, and unwind from the rigors of academic life. We host special events and theme nights to add excitement and entertainment to your dining experience.
        </p>
      </div>
      <div>
        <p>
          In summary, the IITH Mess is committed to providing a memorable culinary journey for the entire IITH community. We strive to create a warm and welcoming atmosphere where delicious food and great company come together. Join us at the mess and indulge in a gastronomic adventure like no other.
        </p>
      </div>
    </div>
  </section>






  <?php require_once('includes/footer.php') ?>

</body>

<!-- end of body section -->

</html>