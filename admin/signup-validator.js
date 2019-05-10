
var check = function() {
    if (document.getElementById('password').value ==
      document.getElementById('confirm_password').value && document.getElementById('password').value != "" && document.getElementById('password').value.length >
       6) {
      document.getElementById('message').style.color = 'green';
      document.getElementById('message').innerHTML = 'Password OK!';
    } else {
      document.getElementById('message').style.color = 'red';
      document.getElementById('message').innerHTML = 'Password doesn\'t match!';
    }
  }
  
var fuckingManager = function() {
  document.getElementById('fuckingManager').style.display="block";
}

  var emailCheck = function() {
    if (document.getElementById('email').value ==
      document.getElementById('confirm_email').value) {
      document.getElementById('emailCheck').style.color = 'green';
      document.getElementById('emailCheck').innerHTML = 'Email OK!';
    } else {
      document.getElementById('emailCheck').style.color = 'red';
      document.getElementById('emailCheck').innerHTML = 'Email doesn\'t match!';
    }
  }