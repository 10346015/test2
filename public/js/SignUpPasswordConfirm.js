function check_password_confirm(){
  var password = document.getElementById('password').value;
  var password_confirm = document.getElementById('password-confirm').value;
  var password_error = document.getElementById('password_confirm_error');
  if (password_confirm != ""){
    if (password_confirm != password){
      password_error.innerHTML = 'The password confirmation does not match.';
    }
    else{
      password_error.innerHTML = '';
    }
  }
  else{
    password_error.innerHTML = '';
  }
}
