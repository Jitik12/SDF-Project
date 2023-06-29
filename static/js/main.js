const validate = () => {
  let name = document.getElementById("name").value ;
  let email = document.getElementById("email").value ;
  let password = document.getElementById("password").value ;

  if ( name.length == 0 )
  {
    alert("Put in a Name") ;
    return false ;
  }
  else if ( email.length == 0 )
  {
    alert("Put in an Email") ;
    return false ;
  }
  else if ( password.length == 0 )
  {
    alert("Put in an Password") ;
    return false ;
  }
  console.log("4");
}



let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {
    slideIndex = 1
  }
  if (n < 1) {
    slideIndex = slides.length
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}
