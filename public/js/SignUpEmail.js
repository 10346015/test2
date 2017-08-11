function check_email(){
  var email = document.getElementById('email').value;
  var email_error =document.getElementById('email_error');
  emailRule = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/;
  if (!email.match(emailRule)){
    email_error.innerHTML = 'The email must be a valid email address.'
  }
  else {
    email_error.innerHTML = ''
  }
  if (email == ""){
    email_error.innerHTML = ''
  }
  else if (email.length > 200){
    email_error.innerHTML = 'The email may not be greater than 200.'
  }
}
