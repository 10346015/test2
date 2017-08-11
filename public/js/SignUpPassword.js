function check_password(){
  var password = document.getElementById('password').value;
  var passwor_error = document.getElementById('password_error');
  if (password.length < 6){
    passwor_error.innerHTML = 'The password must be at least 6.';
  }
  else if (password.length >30){
    passwor_error.innerHTML = 'The password may not be greater than 30.';
  }
  else{
    passwor_error.innerHTML = '';
  }
  if (password == ""){
    passwor_error.innerHTML = '';
  }
}
