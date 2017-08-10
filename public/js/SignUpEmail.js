function test(){
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
}