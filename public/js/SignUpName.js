function check_name(){
  var name = document.getElementById('name').value;
  var name_error = document.getElementById('name_error');
  if (name.length > 30){
    name_error.innerHTML = 'The name may not be greater than 30.';
  }
  else{
    name_error.innerHTML = '';
  }
}
