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