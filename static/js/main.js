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
}
const validatePupil = () => {
  let pupil = document.getElementById("pupil").value ;

  if( pupil.length() == 0 )
  {
    alert("Did not Eat Properly") ;
    return false ;
  }
}

